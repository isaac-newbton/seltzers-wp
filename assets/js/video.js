(function(){
    document.addEventListener('DOMContentLoaded', function(){
        const videoButtons = document.querySelectorAll('.play_video_button');
        if(videoButtons){

            const videoBtnClick = function(btn){
                let video = document.getElementById(btn.dataset.video);
                if(video){
                    if(video.paused){
                        video.play();
                        btn.classList.add('playing');
                    }else{
                        video.pause();
                        btn.classList.remove('playing');
                    }
                }
            }

            for(let btn of videoButtons){
                btn.addEventListener('click', function(e){
                    videoBtnClick(btn);
                })
            }
        }

        const videos = document.querySelectorAll('.custom_play_video');
        if(videos) {
            for(let vid of videos){
                vid.addEventListener('ended', function(e){
                    e.target.parentNode.querySelectorAll('.play_video_button')[0].classList.remove('playing');
                });
            }
        }
    });
})();