const windowBackgound = document.getElementById("window-background"),
imgPrev = document.getElementById("img-prev"),
prodNom = document.getElementById("prod-nom"),
prodPrec = document.getElementById("prod-prec"),
windowContainer = document.getElementById("window-container"),
closeButton = document.getElementById("close-button");

function vista_prev(numero){
  windowBackgound.style.display = "flex";
  imgPrev.src = producto[numero].imagen;
  prodNom.innerHTML = producto[numero].nombre;
  prodPrec.innerHTML = producto[numero].precio;
}

function cargar_talla(item){
  quitarBordes_talla();
  item.classList.add("active-button");
}

function quitarBordes_talla(){
  var items = document.getElementsByClassName("talla");
  for (let i = 0; i < items.length; i++) {
    items[i].classList.remove("active-button");
  }
}

function cargar_color(item){
  quitarBordes_color();
  item.classList.add("active-color");
}

function quitarBordes_color(){
  var items = document.getElementsByClassName("color");
  for (let i = 0; i < items.length; i++) {
    items[i].classList.remove("active-color");
  }
}

const closeWindow = () => {
  windowContainer.classList.add("close");
  setTimeout(() => {
    windowContainer.classList.remove("close");
    windowBackgound.style.display = "none"
  }, 250)
}

closeButton.addEventListener("click", () => closeWindow())

window.addEventListener("click", e => e.target == windowBackgound && closeWindow())