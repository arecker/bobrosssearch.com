// main.js
$(document).ready(function(){

	searchListen();
	searchTrigger();
	focusOnSearch();

});


// Helper functions
function focusOnSearch()
{
	$('#searchBox').val('');
	$('#searchBox').focus();
}

function searchListen()
{
	$('#searchBox').on('keyup change', function(){

		var val = $(this).val();
		
		if ( val == "" )
		{
			$('#searchBox').css('border-color', '#E6E6E6');
		}

		else {
			$('#searchBox').css('border-color', 'black');
		}

	});
}

function searchTrigger()
{
	$('#searchBox').keypress(function(event){

		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '13' && $('#searchBox').val() !== ""){
			searchIt();	
		}

	});
}

function searchIt()
{
	var box=document.getElementById('searchBox');
    window.location.href='http://www.google.com/search?q='+escape(box.value);
}