$(document).ready(function(){
		$(".topnav a").click(function(event){
			event.preventDefault();
		
			$.ajax(this.href,{
				success: function(data){
					$('.topnav a').html($(data).find('# *'));
			},
			error: function(){
				alert("Unable to load page");
			}
		});
	});
});