$(document).ready(function() {
    
    $('#submit').click(function(){
    	$('form').submit();
    });

    $("form").submit(function(event) {
    	event.preventDefault();
    	resetAll();
    	var url = $('#url').val();
    	if (url && !url.match(/^http([s]?):\/\/.*/)) {
	        url = encodeURIComponent('http://' + url);
	    }
	    var regex = new RegExp("^(http[s]?:\\/\\/(www\\.)?|ftp:\\/\\/(www\\.)?|(www\\.)?){1}([0-9A-Za-z-\\.@:%_\‌​+~#=]+)+((\\.[a-zA-Z]{2,3})+)(/(.)*)?(\\?(.)*)?");
	    if (url.length < 5 || !regex.test(url)) {
	    	$("#error").html('Please insert a valid URL').removeClass('hide');
	    }else{
	    	$('#loading').removeClass('hide');
	    	$.post("/create", {url: url}, function(result){
	    		$('#loading').addClass('hide');
	    		result = $.parseJSON(result);
		        if(typeof result.result != 'undefined' && result.result == 'success'){
		        	$("#inputResult").val(result.url);
		        	$("#success").val(result.url).removeClass('hide');
		        }else{
		        	if(typeof result.message != 'undefined'){
		        		 $("#error").html(result.message).removeClass('hide');
		        	}else{
		        		$("#error").html('There was an error. Try again.').removeClass('hide');
		        	}
		        }
		    });
	    }
    });
	
	$('#inputResult').click(function(){
		this.select();
	});
});

function resetAll(){
	$("#success").addClass('hide');
	$("#error").addClass('hide');
}