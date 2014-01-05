$(document).ready(function() {

	$("#adduniversity").submit(function(e) {
		
		    var postData = $(this).serializeArray();
		    var formURL = $(this).attr("action");
		    $.ajax(
		    {
		        url : formURL,
		        type: "POST",
		        data : postData,
		        success:function(data, textStatus, jqXHR) 
		        {
		            console.log(data);
		        },
		        error: function(jqXHR, textStatus, errorThrown) 
		        {
		            console.log("Oops!");     
		        }
		    });

		    console.log("Added successfully!");
		    e.preventDefault();
		
	});
	$("#adduniversity").submit();

});