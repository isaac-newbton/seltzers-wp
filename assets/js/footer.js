(function(){
    document.addEventListener('DOMContentLoaded', function(){
        const siteFooter = document.getElementById('site-footer');
        if(siteFooter){
            let footerHeight = siteFooter.clientHeight;
            if((document.body.clientHeight > window.outerHeight) && (footerHeight < (window.innerHeight * 0.5))){
                const siteMainLastContainer = document.querySelectorAll('#main > *:last-child > *:last-child')[0];
                siteMainLastContainer.style.paddingBottom = `calc(${footerHeight}px + 2rem)`;
                window.addEventListener('scroll', function(){
                    footerHeight = siteFooter.clientHeight;
                    siteMainLastContainer.style.paddingBottom = `calc(${footerHeight}px + 2rem)`;
                    if(200 < window.scrollY){
                        siteFooter.classList.remove('not-scrolled');
                        siteFooter.classList.add('scrolled');
                    }else{
                        siteFooter.classList.remove('scrolled');
                        siteFooter.classList.add('not-scrolled');
                    }
                });
                if(200 < window.scrollY){
                    siteFooter.classList.remove('not-scrolled');
                    siteFooter.classList.add('scrolled');
                }else{
                    siteFooter.classList.remove('scrolled');
                    siteFooter.classList.add('not-scrolled');
                }
            }
        }
    });
}());