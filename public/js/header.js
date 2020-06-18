// let lastScrollTop = 0;

// header = document.getElementById('header');

// window.addEventListener('scroll', miScrollTop);

// function miScrollTop(){

// 	let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

// 	if(scrollTop > lastScrollTop){

// 		header.style.top = "-80px";
// 	}

// 	else{

// 		header.style.top = "0px";
// 	}

// 	lastScrollTop = scrollTop;
// }

window.addEventListener('scroll', scrollHeader)

function scrollHeader() {
    let header = document.querySelector('.header__public')
    header.classList.toggle('sticky', window.scrollY > 0)
}
