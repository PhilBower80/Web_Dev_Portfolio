const burgerMenu = document.querySelectorAll('.burger-container');
// const overlay = document.querySelector('.mobile-nav');

for (let i = 0; i < burgerMenu.length; i++) {
	let menu = burgerMenu[i];

	menu.addEventListener('click', () => {
		// overlay.classList.toggle('active');
		for (let i = 0; i < burgerMenu.length; i++) {
			burgerMenu[i].classList.toggle('active');
		}
	});
}
