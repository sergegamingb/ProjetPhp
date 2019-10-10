LogoLogin = document.getElementById("logo");
menuLog = document.querySelector('.loginmenu');
Vmenu = document.querySelector('.menuV');
bout = document.getElementById('bouton');


LogoLogin.onClick = function  () {

        menuLog.classList.toggle("loginmenunoff");

}

bout.onClick = function () {
        Vmenu.classList.toggle("menuVoff");
}
