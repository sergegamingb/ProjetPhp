LogoLogin = document.getElementById("logo");
menuLog = document.getElementById('.loginmenu');
Vmenu = document.querySelector('.menuV');
bout = document.getElementById('bouton');


LogoLogin.onclick = function  () {

        menuLog.classList.toggle("loginmenunoff");

}

bout.onClick = function () {
        Vmenu.classList.toggle("menuVoff");
}


