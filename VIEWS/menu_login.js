Login = document.querySelector(".coin");
menuLog = document.querySelector('.loginmenu');

Register = document.querySelector(".reg");
RegisterLog = document.querySelector('.registerMenu');

Login.onclick = function login () {

    if(!RegisterLog.classList.toggle("registerMenuOff"))
    {
        this.register();
    }
    menuLog.classList.toggle("loginmenunoff");
}

Register.onclick = function register() {
    RegisterLog.classList.toggle("registerMenuOff");
}
