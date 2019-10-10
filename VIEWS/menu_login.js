LogoLogin = document.getElementById("logo");
menuLog = document.querySelector('.loginmenu');
bod = document.getElementById('1');

LogoLogin.onclick = function () {
        menuLog.classList.toggle("loginmenunoff");
        bod.style.background="red";
}


