$(document).ready(function(){

	$('.menu, .close-menu').click(function(){

		$(this).toggleClass('open');
		$('.menu-burger').toggleClass("on");
		$("nav").toggleClass('hidden');

	});

});

var btnOpen = document.getElementById("btn-open");
var btnClose = document.getElementById("btn-close");
var textExpend = document.querySelector('.collapsible');
var dots = document.getElementById("dots");

btnOpen.addEventListener('click', function() {

    dots.classList.toggle("d-none");
	textExpend.classList.toggle('collapsed');
	btnOpen.classList.toggle("d-none");
	btnClose.classList.toggle("d-none");

});

btnClose.addEventListener('click', function() {

    dots.classList.toggle("d-none");
	textExpend.classList.toggle('collapsed');
	btnOpen.classList.toggle("d-none");
	btnClose.classList.toggle("d-none");

});