
let video = document.querySelector('#banner-video') as HTMLVideoElement;
if (document.body.clientWidth > 800) {
    video.src = 'videos/banner.webm';
} else {
    video.src = 'videos/banner-square.webm';
} 