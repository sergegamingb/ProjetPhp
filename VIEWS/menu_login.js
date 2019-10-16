Login = document.querySelector(".coin");
menuLog = document.querySelector('.loginmenu');

Register = document.querySelector(".reg");
RegisterLog = document.querySelector('.registerMenu');

Login.onclick = function login () {
    menuLog.classList.toggle("loginmenuoff");
    RegisterLog.classList.remove("registerMenuOff");
}

Register.onclick = function register() {
    RegisterLog.classList.toggle("registerMenuOff");
    menuLog.classList.remove("loginmenuoff");
}
