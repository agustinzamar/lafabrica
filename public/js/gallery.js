/* Slider */

/*Funcion apra avanzar en el slider */
function next(sender){

    const slider = sender.parentElement.parentElement.children[0];
    slider.scrollTo(slider.scrollLeft + slider.clientWidth, 0);
    const dotsList = slider.parentElement.children[1].children[2];

    const index = Math.round(slider.scrollLeft/slider.clientWidth) + 1;
    const maxIndex = dotsList.children.length-1;

    /* verifica que el indice no sobrepase el maximo de nodos */
    if(index <= maxIndex){
      Array.from(dotsList.children).forEach(x => {
        x.classList.remove('active');
      })

      dotsList.children[index].classList.add('active');
    }
  }

/*Funcion apra retroceder en el slider */
function prev(sender){

    const slider = sender.parentElement.parentElement.children[0];
    slider.scrollTo(slider.scrollLeft - slider.clientWidth, 0);
    const dotsList = slider.parentElement.children[1].children[2];

    const index = Math.round(slider.scrollLeft/slider.clientWidth) - 1;

    /* verifica que el indice no sea inferior al primer nodo */
    if(index >= 0){
      Array.from(dotsList.children).forEach(x => {
        x.classList.remove('active');
      })

      dotsList.children[index].classList.add('active');
    }
  }


  /* funcion para agregar los circulos indicadores del segun la cantidad de fotos que hay */
  document.addEventListener('DOMContentLoaded', () => {

    const sliders = document.querySelectorAll('.slider');

    sliders.forEach(slider => {

        const dotsList = slider.children[1].children[2];
        const totalItems = slider.children[0].children.length;

        for (let index = 0; index < totalItems; index++) {
            if(index === 0){
                dotsList.innerHTML += `<li class="dot active"></li>`
            }else{
                dotsList.innerHTML += `<li class="dot"></li>`
            }
        }

    })

  })

