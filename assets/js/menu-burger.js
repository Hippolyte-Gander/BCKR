const menuHamburger = document.querySelector(".menu-burger")
const navLiens = document.querySelector(".nav-liens")
const navLogin = document.querySelector(".nav-login")
const logoMenu = document.querySelector(".logo-menu")
const logoCroix = document.querySelector(".logo-croix")

menuHamburger.addEventListener('click',()=>{
navLogin.classList.toggle('mobile-menu')
navLiens.classList.toggle('mobile-menu')
logoMenu.classList.toggle('logo-visible')
logoCroix.classList.toggle('logo-visible')
})