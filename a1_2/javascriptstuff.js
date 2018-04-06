$(document).ready(function() {

	//When changes made to artists dropdown menu
	$("#artist").change(function(){
		var artistVal = $("#artist").val();
	
		$('.home').fadeOut('fast');
		$("#image").html('<img height="80%" width="80%" src="artists/'+artistVal+'.jpg" alt="Mountain View"/>');
		$("#info").html("<p>Birth: "+artistInfo[artistVal].birth+"</p>\
						<p>Death: "+artistInfo[artistVal].death+"</p>\
						<p>Place of living: "+artistInfo[artistVal].living+"</p>\
						<p>Generes: "+artistInfo[artistVal].genres+"</p>\
						<p>Famous: "+artistInfo[artistVal].famous+"</p>");

		
	});

	//When changes made to artwork dropdown menu
	$("#artwork").change(function(){
		var artworkVal = $("#artwork").val();
		
		$('.home').fadeOut('fast');
		$("#image").html('<img height="80%" width="80%"src="artwork/'+artworkVal+'.jpg" alt="Mountain View"/>');
		
		
		
		$("#info").html("<p>Date: "+artInfo[artworkVal].date+"</p>\
						<p>Type: "+artInfo[artworkVal].type+"</p>\
						<p>Dimensions: "+artInfo[artworkVal].dimensions+"</p>\
						<p>Location: "+artInfo[artworkVal].location+"</p>\
						<p>Artist: "+artInfo[artworkVal].artist+"</p>\
						<p>Price: "+artInfo[artworkVal].price+"</p>\
						<p>Genre: "+artInfo[artworkVal].genre+"</p>");

		
	});

	
});