const toggleNav = document.querySelectorAll('#toggle-nav')
const sideNav = document.querySelector('.nav-container')
const main = document.querySelector('.main')
const navOverlay = document.querySelector('.nav-overlay')

if (toggleNav && sideNav) {
    toggleNav.forEach(btn => {
        btn.addEventListener('click', () => {
            sideNav.classList.toggle('slide')
            main.classList.toggle('expand')
            navOverlay.classList.toggle('show')
        })
    })
}