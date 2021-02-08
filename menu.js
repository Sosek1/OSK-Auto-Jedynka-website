const burger = document.querySelector('.burger');
const list = document.querySelector('.list');
let showMenu = false;
burger.addEventListener('click', () => {
	if (!showMenu) {
		list.classList.add('showNav');
		showMenu = true;
	}
	else {
		list.classList.remove('showNav');
		showMenu = false;
	}
});

