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
		$("#artwork").append('<option>' + artworks[av][index] + '</option>');
	}

	//on change go back to disabled option (title of box)
	$("#artwork").val(0);
};





//<option value="1">Vincent can Gogh</option>
//<option value="2">Pablo Picasso</option>
//<option value="3">Claude Money</option>
//<option value="4">Leonardo da Vinci</option>
//<option value="5">Michelangelo</option>
var artworks = [[],
	["The Starry Night","Irises","The Potato Eaters", "Cafe Terrace at Night"],
	[],
	[],
	[]];