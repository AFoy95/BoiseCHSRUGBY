
$(function() {
  $("#sign_up").click(function () {
    $("#success_fail").toggleClass("active");
	$('#success_fail').delay(3000).fadeOut('slow');
  });
	 $("#success_fail").toggleClass("hidden");
	 $('#success_fail').fadeOut('fast');
});