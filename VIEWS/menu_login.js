Login = document.querySelector(".coin");
menuLog = document.querySelector('.loginmenu');

Register = document.querySelector(".reg");
RegisterLog = document.querySelector('.registerMenu');

Login.onclick = function login () {

    menuLog.classList.add("loginmenunoff");
}

Register.onclick = function register() {
    RegisterLog.classList.add("registerMenuOff");
}
