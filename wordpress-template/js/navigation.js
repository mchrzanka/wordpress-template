/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {
	const siteNavigation = document.getElementById('site-navigation');
	const hamburger = siteNavigation.getElementsByClassName('hamburger')[0];

	const menu = siteNavigation.getElementsByClassName('menu')[0];

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	hamburger.addEventListener('click', function () {
		console.log('clicked');
		// siteNavigation.classList.toggle('toggled');

		hamburger.classList.toggle('is-active');
		menu.classList.toggle('show');

		// if (hamburger.getAttribute('aria-expanded') === 'true') {
		// 	hamburger.setAttribute('aria-expanded', 'false');
		// } else {
		// 	hamburger.setAttribute('aria-expanded', 'true');
		// }
	});

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener('click', function (event) {
		const isClickInside = siteNavigation.contains(event.target);

		if (!isClickInside) {
			siteNavigation.classList.remove('toggled');
			hamburger.setAttribute('aria-expanded', 'false');
		}
	});
})();
