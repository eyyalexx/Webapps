$(document).ready(function() {

	//When changes made to artists dropdown menu
	$("#artist").change(function(){
		var artistVal = $("#artist").val();
		console.log(artistVal);

		$("#image").html('<img height="40%" width="40%" src="artists/'+artistVal+'.jpg" alt="Mountain View"/>');
		$("#info").html("Hello");
	});

	//When changes made to artwork dropdown menu
	$("#artwork").change(function(){
		var artworkVal = $("#artwork").val();
		console.log(artworkVal);
		$("#image").html('<img height="60%" width="60%"src="artwork/'+artworkVal+'.jpg" alt="Mountain View"/>');
		
	});

	
});