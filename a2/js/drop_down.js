
function more_artist_info() {


    $(".thumbnail").css("height", "500px");

    var artistVal = $("#artist").val();

    $('.home').fadeOut('fast');
    $("#image").html('<img height="50%" width="50%" src="images/artists/' + artistVal + '.jpg" alt="Mountain View"/>');
    $("#info").html("<p>Birth: " + artistInfo[artistVal].birth + "</p>\
						<p>Death: "+ artistInfo[artistVal].death + "</p>\
						<p>Place of living: "+ artistInfo[artistVal].living + "</p>\
						<p>Generes: "+ artistInfo[artistVal].genres + "</p>\
                        <p>Famous: "+ artistInfo[artistVal].famous + "</p>");
}

function more_artwork_info(){
    $(".thumbnail").css("height", "500px");

    var artworkVal = $("#artwork").val();
    
    $('.home').fadeOut('fast');
    $("#image").html('<img height="50%" width="50%"src="images/artwork/'+artworkVal+'.jpg" alt="Mountain View"/>');
    
    
    
    $("#info").html("<p>Date: "+artInfo[artworkVal].date+"</p>\
                    <p>Type: "+artInfo[artworkVal].type+"</p>\
                    <p>Dimensions: "+artInfo[artworkVal].dimensions+"</p>\
                    <p>Location: "+artInfo[artworkVal].location+"</p>\
                    <p>Artist: "+artInfo[artworkVal].artist+"</p>\
                    <p>Price: "+artInfo[artworkVal].price+"</p>\
                    <p>Genre: "+artInfo[artworkVal].genre+"</p>");

}

$(document).ready(function () {

    
    //When changes made to artists dropdown menu
    $("#artist").change(function () {
        $(".thumbnail").css("height", "250px");
        
        var artistVal = $("#artist").val();

        $('.home').fadeOut('fast');
        $("#image").html('<img height="150px" width="150px" src="images/artists/' + artistVal + '.jpg" alt="Mountain View"/>');
        $("#info").html("<p>Name: <a id='artist_link' onClick='more_artist_info(); return false;' href='#'>" + artistInfo[artistVal].name + "</a></p>\
                            <p>Brief Description: "+ artistInfo[artistVal].description + "</p>");

    });

    //When changes made to artwork dropdown menu
    $("#artwork").change(function () {
        $(".thumbnail").css("height", "250px");

        var artworkVal = $("#artwork").val();

        $('.home').fadeOut('fast');
        $("#image").html('<img height="150px" width="150px"src="images/artwork/' + artworkVal + '.jpg" alt="Mountain View"/>');

        $("#info").html("<p>Name: <a id='artist_link' onClick='more_artwork_info(); return false;' href='#'>" + artInfo[artworkVal].name + "</a></p>\
                            <p>Brief Description: "+ artInfo[artworkVal].description + "</p>\
                            <p>Price: "+ artInfo[artworkVal].price + "</p>");


    });

    $("#artist_link").on('click', function(event){
        console.log("click ");
    });


});
