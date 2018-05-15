
var btnMenu = document.getElementById('btn-menu');
var nav = document.getElementById('nav');
btnMenu.addEventListener('click', function(){
  nav.classList.toggle('mostrar');
});

var submenu = document.getElementById('submenu');
var nav1 = document.getElementById('nav');
submenu.addEventListener('click', function(){
  nav.classList.toggle('mostrar');
});
		