$(document).ready(function(){

    $('.menu-icon, .close-nav-menu').click(function(){

		$(this).toggleClass('animation');
		$('.nav-menu-mobile').toggleClass("open");
		$(".wrap-ul").toggleClass('hidden');
		//$(".wrap-ul").toggleClass('show');
		$(".wrap-menu-icon").toggleClass('wrap-active');
		$(".open").fadeIn();

	});

	$(".btn-more").click(function(){

		$(this).css('display', 'none');
		$("#dots").toggleClass('d-none');
		$(".btn-less").css('display', 'flex');
		$(".collapsible").toggleClass('collapsed');

	});

	$(".btn-less").click(function(){

		$(this).css('display', 'none');
		$("#dots").toggleClass('d-none');
		$(".btn-more").css('display', 'flex');
		$(".collapsible").toggleClass('collapsed');

	})

	$(".error").hide();
	$(".show-message").hide();

	$(".contact-form").submit(function(e) {

		e.preventDefault();
		$(".error").hide();

		var name = $("input.name").val();
		var email = $("input.email").val();
		var subject = $("input.subject").val();
		var message = $("input.message").val();

		if ( name == "" ) {
			$("#error").fadeIn().text("Entrer votre nom et prénom.");
            $("input.name").focus();
            return false;
		}

		if ( email == "" ) {
			$("#error").fadeIn().text("Entrer votre email.");
            $("input.email").focus();
            return false;
		}

		if ( subject == "" ) {
			$("#error").fadeIn().text("Choisir un objet.");
            $("input.email").focus();
            return false;
		}

		if ( message == "" ) {
			$("#error").fadeIn().text("Entrer votre message.");
            $("input.message").focus();
            return false;
		}

		$.ajax({
			type: "POST",
			url: "controllers/autoload.controller.php",
			data: $(this).serialize(),
			success: function(response) {
				//alert(response); // affiche erreur PHP
				$(".contact-form").fadeOut().delay(4000).fadeIn();
				//$(".show-message").fadeIn().html(response);
				$(".show-message").delay(500).fadeIn().delay(3000).fadeOut();
				$(".contact-form")[0].reset();
			}
		});
		//console.log( $( this ).serialize() );

	});

	return false;

});