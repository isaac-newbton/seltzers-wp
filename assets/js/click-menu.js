/**
 * Based on https://css-tricks.com/in-praise-of-the-unambiguous-click-menu/
 */

 (function() {
    const ClickMenus = function(menu) {
        let container = menu.parentElement, currentMenuItem, i, len;

        this.init = function() {
            menuSetup();
            document.addEventListener('click', closeOpenMenu);
        }

        function toggleOnMenuClick(e) {
            const btn = e.currentTarget;
            if(currentMenuItem && !currentMenuItem.parentNode.contains(btn) && btn !== currentMenuItem){
                toggleSubmenu(currentMenuItem);
            }
            toggleSubmenu(btn);
        }

        function toggleSubmenu(btn) {
            const submenu = document.getElementById(btn.getAttribute('aria-controls'));
            if('true'===btn.getAttribute('aria-expanded')) {
                btn.setAttribute('aria-expanded', false);
                submenu.setAttribute('aria-hidden', true);
                currentMenuItem = false;
            }else{
                btn.setAttribute('aria-expanded', true);
                submenu.setAttribute('aria-hidden', false);
                preventOffScreenSubmenu(submenu);
                currentMenuItem = btn;
            }
        }

        function preventOffScreenSubmenu(submenu) {
            const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
            parent = submenu.offsetParent,
            menuLeftEdge = parent.getBoundingClientRect().left,
            menuRightEdge = menuLeftEdge + submenu.offsetWidth;

            if(menuRightEdge + 32 > screenWidth) {
                submenu.classList.add('sub-menu--right');
            }
        }

        function closeOnEscKey(e) {
            if(27 === e.keyCode) {
                if(null !== e.target.closest('ul[aria-hidden="false"]')){
                    currentMenuItem.focus();
                    toggleSubmenu(currentMenuItem);
                }else if('true' === e.target.getAttribute('aria-expanded')){
                    toggleSubmenu(currentMenuItem);
                }
            }
        }

        function closeOpenMenu(e) {
            if(currentMenuItem && !e.target.closest('#' + container.id)) {
                toggleSubmenu(currentMenuItem);
            }
        }

        function menuSetup() {
            menu.classList.remove('no-js');
            menu.querySelectorAll('ul.sub-menu').forEach( (submenu) => {
                const menuItem = submenu.parentElement;
                if('undefined' !== typeof submenu){
                    let btn = convertLinkToButton(menuItem);
                    setupAria(submenu, btn);
                    btn.addEventListener('click', toggleOnMenuClick);
                    menu.addEventListener('keyup', closeOnEscKey);
                }
            });
        }

        function convertLinkToButton(menuItem) {
            const link = menuItem.getElementsByTagName('a')[0],
            linkHTML = link.innerHTML,
            linkAtts = link.attributes,
            btn = document.createElement('button');

            if(null !== link){
                btn.innerHTML = linkHTML.trim();
                for(i=0, len=linkAtts.length; i<len; i++){
                    let attr = linkAtts[i];
                    if('href'!==attr.name){
                        btn.setAttribute(attr.name, attr.value);
                    }
                }
                menuItem.replaceChild(btn, link);
            }
            return btn;
        }

        function setupAria(submenu, btn) {
            const submenuId = submenu.getAttribute('id');
            let id;
            if(null === submenuId){
                id = btn.textContent.trim().replace(/\s+/g, '-').toLowerCase() + '-submenu';
            }else{
                id = submenuId + '-submenu';
            }

            btn.setAttribute('aria-controls', id);
            btn.setAttribute('aria-expanded', false);

            submenu.setAttribute('id', id);
            submenu.setAttribute('aria-hidden', true);
        }
    }

    document.addEventListener('DOMContentLoaded', function(){
        const menus = document.querySelectorAll('.click-menu');
        menus.forEach(menu => {
            let clickMenu = new ClickMenus(menu);
            clickMenu.init();
        });
    });

}());