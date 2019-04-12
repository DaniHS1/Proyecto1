
document.addEventListener('', function(){
  document.querySelector('.main').classList.add('fadeout');
});

document.addEventListener(onLoad, function(){
  document.querySelector('.main').classList.add('fadein');
});

$(document).ready(function(){
    $('#boton-Inicio').click(function(){

      document.location.target = "_blank";
      document.location.href="index.html";
    });
});
