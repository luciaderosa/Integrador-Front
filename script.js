// Get the button:
let mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
const precio = 200;
const descuentos = [0.20, 0.50, 0.85];

function calculate_value() {
  document.getElementById("total").innerHTML = 'Total a Pagar: '; 

  let cantidad = document.getElementById("cantidad").value;
  let texto_total = document.getElementById("total").innerText;
  let categoria = document.getElementById("categoria").value;
  let index = Number(categoria)-1;

  let calculo = parseFloat(cantidad) * precio * descuentos[index];

  document.getElementById("total").innerHTML = texto_total + ' '+
  new Intl.NumberFormat('es-AR', { style: 'currency', currency: 'ARS' }).format(calculo);;
}
function borrar_total(){
  document.getElementById("total").innerHTML = 'Total a Pagar: '; 
}

