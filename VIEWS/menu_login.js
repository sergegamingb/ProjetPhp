Login = document.querySelector(".coin");
menuLog = document.querySelector('.loginmenu');

Register = document.querySelector(".reg");
RegisterLog = document.querySelector('.registerMenu');

Login.onclick = function () {

    menuLog.classList.toggle("loginmenunoff");
    RegisterLog.classList.replace("registerMenu","registerMenuOff");
}

Register.onclick = function () {
    RegisterLog.classList.toggle("registerMenuOff");
    RegisterLog.classList.replace("loginmenu","loginmenuoff");
}
