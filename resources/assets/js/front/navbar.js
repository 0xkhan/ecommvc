(function () {

    'use strict';

    ecommvc.global.navbar = function() {

        const toggleBtn = document.getElementById('menu-btn');
        const navList = document.getElementById('nav-list');
        // const navBtnList = document.querySelector('.nav-btn');
        const navGlobalHeader = document.querySelector('.nav-global-header');
        toggleBtn.addEventListener('click', () => {
            navList.classList.toggle('active');
            // navBtnList.classList.toggle('show-nav-btn');
            navGlobalHeader.classList.toggle('show-nav-global-header');
            if (toggleBtn.innerHTML == '<i class="fa fa-times text-dark"></i>') {

                toggleBtn.innerHTML = '<i class="fa fa-bars"></i>';
            } else {

                toggleBtn.innerHTML = '<i class="fa fa-times text-dark"></i>';
            }
        });

    };

    /**
     * This function is responsible for drop-down menus.
     * This might be a very poor implementation but this is the
     * one that works for now. Later it can be changed to
     * something better.
     *
     * What it basically does is it loops through menu items that
     * has drop-down menus -> dropdownItems. Inside that loop
     * there is an EventListener on document so we can catch
     * specific events. If the event target was was a menu item
     * and has drop-down menu then toggle "show-dropdown" class.
     *
     * The tricky part was to detect events outside navbar. My
     * approach is a very rudimentary one. I basically collect
     * all drop-down Menus -> dropdownMenus and then loop through
     * it inside EventListener on document. Then I check if
     * "item" contains a specific drop-down menu. If it does then
     * remove "show-dropdown" class.
     */
    ecommvc.global.dropdown = function() {
        const dropdownItems = document.querySelectorAll('.dropdown');
        const dropdownMenus = document.querySelectorAll('.dropdown-menu');

        dropdownItems.forEach((item) => {
            document.addEventListener('click', function(event) {
                let isClickInside = item.contains(event.target);
                if (isClickInside) {
                    if (item.childNodes.length >= 3) {
                        item.childNodes[3].classList.toggle('show-dropdown');
                    }
                } else {
                    dropdownMenus.forEach((ddMenu) => {
                        if (item.contains(ddMenu)) {
                            ddMenu.classList.remove('show-dropdown');
                        }
                    });
                }
            });
        });
    };
})();
