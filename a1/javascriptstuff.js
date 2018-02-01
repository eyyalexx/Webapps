$(document).ready(function() {

	//$("#artwork").val() == 0 if nothign selected (title)
	//$("#artist").val() too

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


	//Display picture and info according to artist and artwork
	$('#sbtn').click(function(){
		//Submit button will only grab artworkVal and artistVal if enabled
		if ( !$('#sbtn').hasClass('disabled') ) {
	 		//alert($("#artist").val() + " " + $("#artwork").val());//debug code
	 		$(".fixed-centered").fadeIn("slow");
	 	}
	});


	$('.close').click(function(){
		$(".fixed-centered").fadeOut("slow");
	});


});
//This should change artwork's dropdown items when a different artist is selected
function updateList(av){
	//clear artwork items except first (title)
	$("#artwork").children('option:not(:first)').remove();
	//add according to global 2d array "artworks[][]"
	for(index in artworks[av][0]){
		//skip 0 (title)
		var artVal = parseInt(index) + 1;
		//appends <option> tags with appropriate values
		$("#artwork").append('<option value="' + artVal + '">' + artworks[av][0][index] + '</option>');
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

//artworks[artistVal][0 = array of paintings][index of paintings] vs.
//artworks[artistVal][1 = URL of paintings][index of paintings]
var artworks = Object.freeze(
		{
			1:[["The Starry Night","Irises","The Potato Eaters", "Cafe Terrace at Night"],
					[]],
			2:[["Guernica","Les Demoiselles d'Avignon","The Old Guitarist","Chicago Picasso","The Weeping Woman"],
					[]],
			3:[["Bain a la Grenouillere","Bathers at La Grenouillere","Impression, Sunrise","Woman with a Parasol","The Magpie"],
					[]],
			4:[["Mona Lisa","The Last Supper","Annunciation","St. John the Baptist","Salvator Mundi"],
					[]],
			5:[["Sistine Chapel ceiling", "The Last Judgement", "Pieta", "David", "The Creation of Adam"],
					[]]
		}
	);