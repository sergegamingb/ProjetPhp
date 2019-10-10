LogoLogin = document.getElementById("logo");
menuLog = document.querySelector('.loginmenu');
Vmenu = document.querySelector('.menuV');
bout = document.getElementById('bouton');


LogoLogin.onclick = function  clique() {
        menuLog.classList.toggle("loginmenunoff");
}

bout.onclick = function () {
        Vmenu.classList.toggle("menuVoff");
}


