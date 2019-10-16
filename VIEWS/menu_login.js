Login = document.querySelector(".coin");
menuLog = document.querySelector('.loginmenu');

Register = document.querySelector(".reg");
RegisterLog = document.querySelector('.registerMenu');

Login.onclick = function login () {

    if(!RegisterLog.classList.toggle("registerMenu"))
    {
        this.register();
    }
    menuLog.classList.toggle("loginmenunoff");
}

Register.onclick = function register() {
    if(!RegisterLog.classList.toggle("loginmenu"))
    {
        this.login();
    }
    RegisterLog.classList.toggle("registerMenuOff");
}
