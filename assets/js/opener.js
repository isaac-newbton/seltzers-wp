(function() {
    document.addEventListener('DOMContentLoaded', function(){
        const openers = document.querySelectorAll('.opener');
        if(openers){

            function toggleOpener(opener) {
                opener.classList.toggle('inactive');
                opener.querySelector('.opener_title_bar > span').innerHTML = opener.classList.contains('inactive') ? '+' : '&times;';
            }

            for(let o of openers){
                o.querySelector('.opener_title_bar').addEventListener('click', function(e){
                    toggleOpener(e.target.closest('.opener'));
                });

                if(!o.classList.contains('inactive')){
                    toggleOpener(o);
                }
            }
        }
    });
})();