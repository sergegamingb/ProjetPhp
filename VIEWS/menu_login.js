Login = document.querySelector(".coin");
menuLog = document.querySelector('.loginmenu');

Register = document.querySelector(".coin");
RegisterLog = document.querySelector('.registerMenu');

Login.onclick = function () {

    menuLog.classList.toggle("loginmenunoff");
}

Register.onclick = function () {
    RegisterLog = document.querySelector(".registerMenuOff");
}
