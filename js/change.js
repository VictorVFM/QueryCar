function changeReferencia() {
   tipoVeiculo.removeAttribute("disabled");
}

function changeTipoVeiculo() {
   loadMarcas()
   marca.removeAttribute("disabled");
}


function changeMarca() {
   loadModelos()
   modelo.removeAttribute("disabled");
}


function changeModelo() {
   loadAnos()
   ano.removeAttribute("disabled");
   consultar.removeAttribute("disabled");
}

const swiper = new Swiper('.swiper', {
   // Optional parameters
   direction: 'vertical',
   loop: true,
 
   // If we need pagination
   pagination: {
     el: '.swiper-pagination',
   },
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   // And if we need scrollbar
   scrollbar: {
     el: '.swiper-scrollbar',
   },
});




