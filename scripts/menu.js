const burger = document.querySelector('.burger');
const list = document.querySelector('.list');
const links = document.querySelectorAll('.list li');
const bars = document.querySelector('.fa-bars'); 
const times = document.querySelector	('.fa-times'); 

burger.addEventListener('click', () => {
	times.classList.toggle('appear');
	bars.classList.toggle('dissapear');
	list.classList.toggle('showNav');
	links.forEach(link => {
		link.classList.toggle('fade');
	})
});

