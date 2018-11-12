const menu = document.querySelector('.o-header__top-link--menu')
const menuDrawer = document.querySelector('.o-header__drawer')
const menuDrawerClose = document.querySelector('.o-header__drawer-tools-close')
let isOpen = false

menu.addEventListener('click', (e) => {
  e.preventDefault()
  isOpen = true
  console.log(isOpen)
  MenuDrawer(isOpen, menuDrawer)
})

menuDrawerClose.addEventListener('click', (e) => {
  e.preventDefault()
  isOpen = false
  console.log(isOpen)
  MenuDrawer(isOpen, menuDrawer)
})

function MenuDrawer(isOpen, menuDrawer) {
  if (isOpen) {
    menuDrawer.classList.remove('o-header__drawer--closing')
    menuDrawer.classList.add('.o-header__drawer--opening')
    menuDrawer.setAttribute('aria-hidden', 'false')
  } else {
    menuDrawer.classList.remove('o-header__drawer--opening')
    menuDrawer.classList.add('.o-header__drawer--closing')
    menuDrawer.setAttribute('aria-hidden', 'true')
  }
}
