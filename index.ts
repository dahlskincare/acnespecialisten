
let video = document.querySelector('#banner-video') as HTMLVideoElement;
if (document.body.clientWidth > 800) {
    video.src = 'videos/banner.mp4';
} else {
    video.src = 'videos/banner-square.mp4';
}