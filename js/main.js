$(document).ready(function(){
	$('.dropdown-menu a.test').on("click", function(e){
		$(this).next('ul').toggle();
		e.stopPropagation();
		e.preventDefault();
	});
	$('.dropdown-menu .mail').on("click", function(e){
		e.stopPropagation();
		e.preventDefault();
	});

		$('ul li a').click(function(){
			 $('li a').removeClass("active-menu");
			 $(this).addClass("active-menu");
			});
$("#login").click(function(event){
		event.preventDefault();
		var usuario=$('#usuario').val();
		var pwd=$('#password').val();
		console.log(pwd);
		$.ajax({
			url: "login.php",
			method: "POST",
			data: {userLogin:1,usuario:usuario, pwd:pwd},
			success: function(data){
				if(data=="true"){
					window.location.href="indexAdministrador.php";
				}
			}
		})
	});
});
