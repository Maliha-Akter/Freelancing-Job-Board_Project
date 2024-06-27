const dropDown = document.querySelector('.user-pic');
const wrapper = document.querySelector('.sub-menu-wrap');


dropDown.addEventListener('click', () => {
    wrapper.classList.toggle("open");

})