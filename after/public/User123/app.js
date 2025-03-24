let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('bx-x');
    searchBar.classList.remove('active');
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
}

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('bx-x');
    searchBar.classList.toggle('active');
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');
});

menu.addEventListener('click', () =>{
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
    searchBtn.classList.remove('bx-x');
    searchBar.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

// Virus



// About Us

const success = document.querySelector('.counter-box.success h2')
const esteemed = document.querySelector('.counter-box.esteemed h2')
const channel = document.querySelector('.counter-box.channel h2')
const industry = document.querySelector('.counter-box.industry h2')


function counterUp(el, to) {
	let speed = 400
	let from = 0
	let step = to / speed
	const counter = setInterval(function () {
		from += step
		if (from > to) {
			clearInterval(counter)
			el.innerText = to
		} else {
			el.innerText = Math.ceil(from)
		}
	}, 1)
}

counterUp(success, 500)
counterUp(esteemed, 1000)
counterUp(channel, 50)
counterUp(industry, 15)


