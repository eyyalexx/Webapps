$(document).ready(function() {
	$("#artist").change(function(){
		//This should change artwork selects to artist's artwork
		var artistVal = $("#artist").val();
		alert(artistVal);
	});
});