var artistInfo = null;
var artworkInfo = null;
var museumInfo = null;


$.ajax({ 
        type: 'GET', 
        url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/artistInfo.php', 
        dataType: 'json',
        success: function (data) { 
                artistInfo = data;
                console.log("HH"+data);
        },
        error: function(e) {
            console.log(e.message);
        }
});


function closeDialog(){
    $("#dialog").dialog("close");
}

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
                    <p>Price: $"+artInfo[artworkVal].price+"</p>\
                    <p>Genre: "+artInfo[artworkVal].genre+"</p>");

}

function more_museum_info(){
    $(".thumbnail").css("height", "500px");

    var museumVal = $("#museum").val();
    
    $('.home').fadeOut('fast');
    $("#image").html('<img height="50%" width="50%"src="images/museums/'+museumVal+'.jpg" alt="Mountain View"/>');
    
    $("#info").html("<p>Date of establishing: "+musInfo[museumVal].est+"</p>\
                    <p>Location and adress: "+musInfo[museumVal].location+"</p>\
                    <p>People involved: "+musInfo[museumVal].people+"</p>\
                    <p>History: "+musInfo[museumVal].history+"</p>\
                    <p>Artworks: "+musInfo[museumVal].artworks+"</p>");
}

$(document).ready(function () {
    
    $("#dialog").dialog({
        autoOpen: false,
        width: 500,
        height: 450
    });

    $("#dialog2").dialog({
        autoOpen: false
        
    });

    $("#search-dialog").dialog({
        autoOpen: false
        
    });

    $("#manage-dialog").dialog({
        autoOpen: false
        
    });

   

    //When changes made to artists dropdown menu
    $("#artist").change(function () {
        $(".thumbnail").css("height", "250px");
        
        var artistVal = $("#artist").val();

        $('.home').fadeOut('fast');
        $("#image").html('<img height="150px" width="150px" src="images/artists/' + artistVal + '.jpg" alt="Mountain View"/>');
        /*$("#info").html("<p>Name: <a id='artist_link' onClick='more_artist_info(); return false;' href='#'>" + artistInfo[artistVal].name + "</a></p>\
                            <p>Brief Description: "+ artistInfo[artistVal].description + "</p>");*/
        $("#info").html(artistInfo);

    });

    //When changes made to artwork dropdown menu
    $("#artwork").change(function () {
        $(".thumbnail").css("height", "250px");

        var artworkVal = $("#artwork").val();

        $('.home').fadeOut('fast');
        $("#image").html('<img height="150px" width="150px"src="images/artwork/' + artworkVal + '.jpg" alt="Mountain View"/>');

        $("#info").html("<p>Name: <a id='artist_link' onClick='more_artwork_info(); return false;' href='#'>" + artInfo[artworkVal].name + "</a></p>\
                            <p>Brief Description: "+ artInfo[artworkVal].description + "</p>\
                            <p>Price: $"+ artInfo[artworkVal].price + "</p>");
    });

    //When changes made to museum dropdwon menu
    $("#museum").change(function () {
        $(".thumbnail").css("height", "250px");

        var museumVal = $("#museum").val();

        $('.home').fadeOut('fast');
        $("#image").html('<img height="150px" width="150px"src="images/museums/' + museumVal + '.jpg" alt="Mountain View"/>');

        $("#info").html("<p>Name: <a id='artist_link' onClick='more_museum_info(); return false;' href='#'>" + musInfo[museumVal].name + "</a></p>\
                            <p>Brief Description: "+ musInfo[museumVal].etc + "</p>");
    });

    function updatePrice(){
        var artworkVal = $("#artwork").val();
        if(artworkVal != null){

            var shippingMethod = $("#shipping").val();
            var quantity = $("#quantity").val();
            
            var price = artInfo[artworkVal].price*quantity;
            var tax = price * 0.13;
            if(shippingMethod == 1)
                var shipping = 10;
            else{
                var shipping = 20;
            }

            $("#price").text("$"+price);
            $("#tax").text("$"+tax);
            $("#shipPrice").text("$"+shipping);
            $("#total").text("$"+(price+tax+shipping));
        }
    }


    $("#quantity").change(function () {
        updatePrice();

    });
    $("#shipping").change(function () {
        updatePrice();
    });

    $("#searchBtn").on('click', function(event){
        $("#search-dialog").dialog({
            position: { my: "right top", at: "right top", of: window }
        });
        $("#search-dialog").dialog("open");
    });


    $("#manage_button").on('click', function(event){
        $("#manage-dialog").dialog({
            position: { my: "right top", at: "right top", of: window }
        });
        $("#manage-dialog").dialog("open");
    });
    

    $("#cart").on('click', function(event){
        var artworkVal = $("#artwork").val();

        if(artworkVal != null){
            //for default values
            var price = artInfo[artworkVal].price;
            var tax = price * 0.13;
            var shipping = 10;

            $("#dialog").dialog("open");
            $("#ptitle").text(artInfo[artworkVal].name);
            $("#price").text("$"+price);
            $("#tax").text("$"+tax);
            $("#shipPrice").text("$"+shipping);
            $("#total").text("$"+(price+tax+shipping));

        }else{
            $("#dialog2").dialog("open");
        }
    });

});

