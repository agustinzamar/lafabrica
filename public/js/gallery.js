const gallery = document.querySelector('.gallery').children;
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const maxItems = 3;
const pagintation = Math.ceil(gallery.length/maxItems);

let index = 1;

prev.addEventListener('click', function prev(){

	index--;
	check();
	showItems();
});

next.addEventListener('click', function next(){

	index++;
	check();
	showItems();
});

function check(){

	if (index == pagintation) {

		next.classList.add('disabled');
	}

	else{

		next.classList.remove('disabled');
	}

	if (index == 1) {

		prev.classList.add('disabled');
	}

	else{

		prev.classList.remove('disabled');
	}
}

function showItems(){

	for(let i = 0; i<gallery.length; i++){

		gallery[i].classList.remove('show');
		gallery[i].classList.add('hide');

		if(i>=(index*maxItems)-maxItems && i<index*maxItems){

			gallery[i].classList.remove('hide');
			gallery[i].classList.add('show');
		}
	}

}

window.onload = function(){

	showItems();
	check();
};