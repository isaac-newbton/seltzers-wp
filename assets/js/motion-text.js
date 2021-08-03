(function() {
    const MotionTexts = function(text) {
        let container = text, delay, items, index, timer;

        this.init = function() {
            delay = parseInt(container.dataset.timer) || 500;
            index = parseInt(container.dataset.index) || 0;
            items = container.querySelectorAll('.dynamic > div');
            items.forEach(i => {
                if(i!=items[index]) i.classList.add('inactive');
                else i.classList.add('active');
            });
            timer = setInterval(cycle, delay);
        }

        function cycle() {
            index++;
            if(index >= items.length){
                index = 0;
            }
            items.forEach(i => {
                if(i!=items[index]){
                    i.classList.remove('active');
                    i.classList.add('inactive');
                }else{
                    i.classList.remove('inactive');
                    i.classList.add('active');
                }
            });
        }
    }

    document.addEventListener('DOMContentLoaded', function(){
        const texts = document.querySelectorAll('.motion_text_wrapper');
        texts.forEach(t => {
            let motionText = new MotionTexts(t);
            motionText.init();
        });
    });
}());