$(document).ready(function() {

	//When changes made to artists dropdown menu
	$("#artist").change(function(){
		var artistVal = $("#artist").val();
	
		$("#image").html('<img height="80%" width="80%" src="artists/'+artistVal+'.jpg" alt="Mountain View"/>');
		$("#info").html("Hello");
	});

	//When changes made to artwork dropdown menu
	$("#artwork").change(function(){
		var artworkVal = $("#artwork").val();
		
		$("#image").html('<img height="80%" width="80%"src="artwork/'+artworkVal+'.jpg" alt="Mountain View"/>');
		
		$("#info").html("Hello");
	});

	
});