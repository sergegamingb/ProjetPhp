Login = document.querySelector(".coin");
menuLog = document.querySelector('.loginmenu');

Register = document.querySelector(".reg");
RegisterLog = document.querySelector('.registerMenu');

Login.onclick = function login () {

    if (RegisterLog.classList.contains("registerMenuOff"))
    {
        RegisterLog.classList.toggle("registerMenuOff");
    }
    menuLog.classList.toggle("loginmenunoff");
}

Register.onclick = function register() {
    if (MenuLog.classList.contains("loginmenuoff"))
    {
        RegisterLog.classList.toggle("loginmenuoff");
    }
    RegisterLog.classList.toggle("registerMenuOff");
}
