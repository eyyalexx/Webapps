$(document).ready(function() {
	$("#artist").change(function(){
		//This should change artwork selects to artist's artwork
		var artistVal = $("#artist").val();
		updateList(artistVal);
	});
});

function updateList(av){
	//clear art work list
	$("#artwork").children('option:not(:first)').remove();

	//add accordingly
	for(index in artworks[av]){
		var artVal = parseInt(index) + 1;
		$("#artwork").append('<option value="' + artVal + '">' + artworks[av][index] + '</option>');
	}

	//once populated go back to disabled option (title of box)
	$("#artwork").val(0);


	if ( av > 0) {
		//enable submit
		$("#sbtn").removeClass("disabled");
	} else {
		//disable submit
		$("#sbtn").addClass("disabled");
	}
};





//<option value="1">Vincent can Gogh</option>
//<option value="2">Pablo Picasso</option>
//<option value="3">Claude Monet</option>
//<option value="4">Leonardo da Vinci</option>
//<option value="5">Michelangelo</option>
var artworks = [
	["NEVER USED"],
	["The Starry Night","Irises","The Potato Eaters", "Cafe Terrace at Night"],
	["Guernica","Les Demoiselles d'Avignon","The Old Guitarist","Chicago Picasso","The Weeping Woman"],
	["Bain a la Grenouillere","Bathers at La Grenouillere","Impression, Sunrise","Woman with a Parasol","The Magpie"],
	["Mona Lisa","The Last Supper","Annunciation","St. John the Baptist","Salvator Mundi",]
	,[]];