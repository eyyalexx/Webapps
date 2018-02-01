$(document).ready(function() {

	//When changes made to artists dropdown menu
	$("#artist").change(function(){
		var artistVal = $("#artist").val();
		updateList(artistVal);
	});

	//When changes made to artwork dropdown menu
	$("#artwork").change(function(){
		if ($("#artwork").val() > 0) {
			//enable submit
			$("#sbtn").removeClass("disabled");
		} else {
			//disable submit
			$("#sbtn").addClass("disabled");
		}
	});


	$('#sbtn').click(function(){
		alert($("#artist").val() + " " + $("#artwork").val());
	});


});
//This should change artwork's dropdown items when a different artist is selected
function updateList(av){
	//clear artwork items except first (title)
	$("#artwork").children('option:not(:first)').remove();
	//add according to global 2d array "artworks[][]"
	for(index in artworks[av]){
		//skip 0 (title)
		var artVal = parseInt(index) + 1;
		//appends <option> tags with appropriate values
		$("#artwork").append('<option value="' + artVal + '">' + artworks[av][index] + '</option>');
	}
	//once populated bring artwork back to title (becuase of bugs)
	$("#artwork").val(0);
	$("#sbtn").addClass("disabled");
};





//<option value="1">Vincent can Gogh</option>
//<option value="2">Pablo Picasso</option>
//<option value="3">Claude Monet</option>
//<option value="4">Leonardo da Vinci</option>
//<option value="5">Michelangelo</option>
//
//artworks[ArtistValueAbove][Painting#]
var artworks = [
	//First index never used becuase easier to read :)
	[],
	["The Starry Night","Irises","The Potato Eaters", "Cafe Terrace at Night"],
	["Guernica","Les Demoiselles d'Avignon","The Old Guitarist","Chicago Picasso","The Weeping Woman"],
	["Bain a la Grenouillere","Bathers at La Grenouillere","Impression, Sunrise","Woman with a Parasol","The Magpie"],
	["Mona Lisa","The Last Supper","Annunciation","St. John the Baptist","Salvator Mundi",]
	,[]];