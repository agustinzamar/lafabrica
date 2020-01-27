let lastScrollTop = 0;

header = document.getElementById('header');

window.addEventListener('scroll', miScrollTop);

function miScrollTop(){

	let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

	if(scrollTop > lastScrollTop){

		header.style.top = "-80px";
	}

	else{

		header.style.top = "0px";
	}

	lastScrollTop = scrollTop;
}