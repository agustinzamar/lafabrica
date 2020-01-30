class SideNav {
	constructor () {

	this.showButtonEl = document.querySelector('.js-menu-show');
	this.hideButtonEl = document.querySelector('.js-menu-hide');
	this.sideNavEl = document.querySelector('.js-side-nav');
	this.sideNavContainerEl = document.querySelector('.js-side-nav-container');

	this.showSideNav = this.showSideNav.bind(this);
	this.hideSideNav = this.hideSideNav.bind(this);
	this.blockClicks = this.blockClicks.bind(this);

	this.addEventListeners();
	}

	addEventListeners () {

		this.showButtonEl.addEventListener('click', this.showSideNav);
		this.hideButtonEl.addEventListener('click', this.hideSideNav);
		this.sideNavEl.addEventListener('click', this.hideSideNav);
		this.sideNavContainerEl.addEventListener('click', this.blockClicks);
	}

	blockClicks (evt) {

		evt.stopPropagation();
	}

	showSideNav () {

		this.sideNavEl.classList.add('side-nav--visible');
	}

	hideSideNav () {

		this.sideNavEl.classList.remove('side-nav--visible');
	}

}

new SideNav();
