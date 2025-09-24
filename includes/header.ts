namespace HeaderTouch {
    export function toggleMenu() {
        const overlay = document.querySelector('#mobile-nav-overlay');

        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
            document.body.classList.remove('noscroll');
        } else {
            overlay.classList.add('active');
            document.body.classList.add('noscroll');
        }
    }

    export function toggleExpanded(e: HTMLElement) {
        const panel = e.parentElement;
        if (panel.classList.contains('active')) {
            panel.classList.remove('active');
        } else {
            panel.classList.add('active');
        }
    }
}

namespace HeaderDesktop {
    export function toggleMenu() {
        const button = document.querySelector('#hamburger-button');
        button.classList.toggle('active');
        button.classList.toggle('not-active');
        const overlay = document.querySelector('#desktop-nav-overlay');
        if (overlay.classList.contains('active')) {
            overlay.classList.remove('active');
        } else {
            overlay.classList.add('active');
        }
    }

    // Start top ("important notice") slideshow
    let slideIndex = 0;
    const notice = document.querySelector('#important-notice');
    const slides = notice.querySelectorAll('.important-notice-slide');
    if (slides.length > 0) {
        setInterval(slideNext, 8000);
    }

    export function slideNext() {
        for (let i = 0; i < slides.length; i++) {
            if (slides[i].classList.contains('offscreen-left')) {
                slides[i].classList.add('offscreen-right');
                slides[i].classList.remove('offscreen-left');
            }
        }
        slides[slideIndex].classList.add('offscreen-left');
        slideIndex = (slideIndex + 1) % slides.length;
        slides[slideIndex].classList.remove('offscreen-right');
    }

    export function slidePrev() {
        for (let i = 0; i < slides.length; i++) {
            if (slides[i].classList.contains('offscreen-right')) {
                slides[i].classList.add('offscreen-left');
                slides[i].classList.remove('offscreen-right');
            }
        }
        slides[slideIndex].classList.add('offscreen-right');
        slideIndex = (slideIndex + 1) % slides.length;
        slides[slideIndex].classList.remove('offscreen-left');
    }
}

namespace CookieDialog {
    function getCookie(name: string) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    export function initialize() {
        if (getCookie('cookieConsent') === 'true') {
            (window as any).gtag('consent', 'update', {
                'ad_storage': 'granted',
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
                'analytics_storage': 'granted'
            });
        } else if (sessionStorage.getItem('consentShown') != 'true') {
            (document.querySelector('#cookieConsent') as HTMLDialogElement).showModal();
        } else {
            (window as any).gtag('consent', 'update', {
                'ad_storage': 'denied',
                'ad_user_data': 'denied',
                'ad_personalization': 'denied',
                'analytics_storage': 'denied'
            });
        }
    }

    export function consent(flag: boolean) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (365 * 24 * 60 * 60 * 1000)); // expire in 1 year
        if (flag === true) {
            (window as any).gtag('consent', 'update', {
                'ad_storage': 'granted',
                'ad_user_data': 'granted',
                'ad_personalization': 'granted',
                'analytics_storage': 'granted'
            });
            // Set cookie rather than localStorage so that consent state can be read by subdomains (boka.acnespecialisten.se)            
            document.cookie = "cookieConsent=true; domain=.acnespecialisten.se; path=/; expires=" + expires.toUTCString();
        } else {
            (window as any).gtag('consent', 'update', {
                'ad_storage': 'denied',
                'ad_user_data': 'denied',
                'ad_personalization': 'denied',
                'analytics_storage': 'denied'
            });
            document.cookie = "cookieConsent=false; domain=.acnespecialisten.se; path=/; expires=" + expires.toUTCString();
        }
        sessionStorage.setItem('consentShown', 'true');
        (document.querySelector('#cookieConsent') as HTMLDialogElement).close();
    }
}


CookieDialog.initialize();


var query = new URLSearchParams(window.location.search);
var gclid = query.get('gclid');
if (gclid) {
    // Append GCLID parameter to all links
    var links = document.querySelectorAll('a');
    for (var i = 0; i < links.length; i++) {
        var link = links[i];
        var url = new URL(link.href);
        url.searchParams.set('gclid', gclid);
        link.href = url.toString();
    }

    // Send GCLID and other UTM parameters to tracking endpoint, but only once per session
    if (sessionStorage.getItem('gclid_tracked') !== gclid) {
        sessionStorage.setItem('gclid_tracked', gclid);

        const trackingData = {
            gclid: gclid,
            utm_source: query.get('utm_source') || '',
            utm_medium: query.get('utm_medium') || '',
            utm_campaign: query.get('utm_campaign') || '',
            utm_term: query.get('utm_term') || '',
            utm_content: query.get('utm_content') || '',
            utm_adgroup: query.get('utm_adgroup') || '',
            device: query.get('device') || '',
            network: query.get('network') || '',
            matchtype: query.get('matchtype') || '',
            feeditemid: query.get('feeditemid') || '',
            extensionid: query.get('extensionid') || '',
            loc_physical: query.get('loc_physical') || '',
            loc_interest: query.get('loc_interest') || '',
            page_url: window.location.href,
            page_title: document.title,
            user_agent: navigator.userAgent,
            referrer: document.referrer || 'Direct',
            timestamp: new Date().toISOString()
        };

        fetch('https://groicompany.app.n8n.cloud/webhook/17bf9e17-f865-4492-ba3a-2fc2c0eb8765', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(trackingData)
        }).catch(error => console.log('GCLID tracking error:', error));
    }
}

