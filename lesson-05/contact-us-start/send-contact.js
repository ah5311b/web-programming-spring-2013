// wait for the page to fully load
$(document).ready(function() {
	// wait for the send button to be clicked
	$("#send-contact").click(function() {
		// get the data from the form 
		var services = [];
		$('.services:checked').each(function(index) {
			services[index] = $(this).val();
		});
		var contact = {customername: $("#customername").val() , customeremail: $("#customeremail").val() , timeofservices: $("#timeofservices").val() , dateofservices: $("#dateofservices").val() , services: services };
		$.ajax({
			type:"POST",
			url:'send-contact.php',
			data:contact
			}).done(function() {
			  alert("Thank you for contacting us! We will get in touch with you shortly.");
			});	
	});
	
	
});