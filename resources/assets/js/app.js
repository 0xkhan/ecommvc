(function () {
    const toggleBtn = document.getElementById('menu-btn');
    const navList = document.getElementById('nav-list');
    const navBtnList = document.getElementById('nav-btn-list');
    toggleBtn.addEventListener('click', () => {
        navList.classList.toggle('active');
        navBtnList.classList.toggle('active');
    })
})();
