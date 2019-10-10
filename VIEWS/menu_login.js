LogoLogin = document.getElementById("logo");
menuLog = document.querySelector('.loginmenu');
Vmenu = document.querySelector('.menuV');
bout = document.getElementById('bouton');


LogoLogin.onclick = function  () {

        menuLog.classList.toggle("logimenunoff");

}

bout.onclick = function () {
        Vmenu.classList.toggle("menuVoff");
}
