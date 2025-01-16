// app container with side bar
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

// side bar drop downs
const navDropdownToggle = document.querySelectorAll('.nav-dropdown-toggle')
const navDropdown = document.querySelectorAll('.nav-dropdown')

if (navDropdownToggle && navDropdown) {
    for (let i = 0; i < navDropdownToggle.length; i++) {
        navDropdownToggle[i].addEventListener('click', () => {
            const ic = navDropdownToggle[i].querySelector('.drop-ic')
            ic.classList.toggle('rotate')

            for (let j = 0; j < navDropdown.length; j++) {
                if (j === i) {
                    navDropdown[j].classList.toggle('open')
                }
            }
        })
    }
}

// top bar drop down
const topDropdownToggle = document.querySelectorAll('.top-dropdown-toggle')
const topDropdown = document.querySelectorAll('.top-dropdown')

if (topDropdownToggle) {
    for (let i = 0; i < topDropdownToggle.length; i++) {
        topDropdownToggle[i].addEventListener('click', (e) => {
            e.stopPropagation()
            const ic = topDropdownToggle[i].querySelector('.drop-ic')
            ic.classList.toggle('rotate')

            for (let j = 0; j < topDropdown.length; j++) {
                if (j === i) {
                    topDropdown[j].classList.toggle('open')
                }
            }
        })
    }
}