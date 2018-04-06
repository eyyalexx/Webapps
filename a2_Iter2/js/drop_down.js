var artistInfo = null;
var artworkInfo = null;
var museumInfo = null;


$.ajax({ 
        type: 'GET', 
        url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/artistInfo.php', 
        dataType: 'json',
        success: function (data) { 
                artistInfo = data;

        },
        error: function(e) {
            console.log(e.message);
        }
});

$.ajax({ 
    type: 'GET', 
    url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/artworkInfo.php', 
    dataType: 'json',
    success: function (data) { 
            artworkInfo = data;

    },
    error: function(e) {
        console.log(e.message);
    }
});

$.ajax({ 
    type: 'GET', 
    url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/museumInfo.php', 
    dataType: 'json',
    success: function (data) { 
            museumInfo = data;

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

    var artistVal = $("#artist").val()-1;

    $('.home').fadeOut('fast');

    $.ajax({ 
        type: 'POST', 
        url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/getImage.php', 
        dataType: 'json',
        data: {imageID: artistInfo[artistVal].ImageID},
        success: function (data) { 
            $("#image").html('<img height="50%" width="50%" src="'+data[0].Link+'" alt="Mountain View"/>');
        },
        error: function(e) {
            console.log(e.message);
        }
    });
    $("#info").html("<p>Birth: " + artistInfo[artistVal].Birth + "</p>\
						<p>Death: "+ artistInfo[artistVal].Death + "</p>\
						<p>Place of living: "+ artistInfo[artistVal].Living + "</p>\
						<p>Generes: "+ artistInfo[artistVal].Genres + "</p>\
                        <p>Famous: "+ artistInfo[artistVal].Famous + "</p>");
}

function more_artwork_info(){
    $(".thumbnail").css("height", "500px");

    var artworkVal = $("#artwork").val()-1;
    
    $('.home').fadeOut('fast');

    $.ajax({ 
        type: 'POST', 
        url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/getImage.php', 
        dataType: 'json',
        data: {imageID: artworkInfo[artworkVal].ImageID},
        success: function (data) { 
            $("#image").html('<img height="50%" width="50%" src="'+data[0].Link+'" alt="Mountain View"/>');
        },
        error: function(e) {
            console.log(e.message);
        }
    });
    $("#info").html("<p>Date: "+artworkInfo[artworkVal].Date+"</p>\
                    <p>Type: "+artworkInfo[artworkVal].Type+"</p>\
                    <p>Dimensions: "+artworkInfo[artworkVal].Dimensions+"</p>\
                    <p>Location: "+artworkInfo[artworkVal].Location+"</p>\
                    <p>Artist: "+artworkInfo[artworkVal].Artist+"</p>\
                    <p>Price: $"+artworkInfo[artworkVal].Price+"</p>\
                    <p>Genre: "+artworkInfo[artworkVal].Genre+"</p>");

}

function more_museum_info(){
    $(".thumbnail").css("height", "500px");

    var museumVal = $("#museum").val()-1;
    
    $('.home').fadeOut('fast');
    $("#image").html('<img height="50%" width="50%"src="images/museums/'+museumVal+'.jpg" alt="Mountain View"/>');
    
    $.ajax({ 
        type: 'POST', 
        url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/getImage.php', 
        dataType: 'json',
        data: {imageID: museumInfo[museumVal].ImageID},
        success: function (data) { 
            $("#image").html('<img height="50%" width="50%" src="'+data[0].Link+'" alt="Mountain View"/>');
        },
        error: function(e) {
            console.log(e.message);
        }
    });

    $("#info").html("<p>Date of establishing: "+museumInfo[museumVal].Description+"</p>\
                    <p>Location and adress: "+museumInfo[museumVal].Location+"</p>\
                    <p>People involved: "+museumInfo[museumVal].People+"</p>\
                    <p>History: "+museumInfo[museumVal].History+"</p>\
                    <p>Artworks: "+museumInfo[museumVal].Artworks+"</p>");
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
        
        var artistVal = $("#artist").val()-1;

        $('.home').fadeOut('fast');

        $.ajax({ 
            type: 'POST', 
            url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/getImage.php', 
            dataType: 'json',
            data: {imageID: artistInfo[artistVal].ImageID},
            success: function (data) { 
                $("#image").html('<img height="150px" width="150px" src="'+data[0].Link+'" alt="Mountain View"/>');
            },
            error: function(e) {
                console.log(e.message);
            }
        });

        $("#info").html("<p>Name: <a id='artist_link' onClick='more_artist_info(); return false;' href='#'>" + artistInfo[artistVal].Name + "</a></p>\
                            <p>Brief Description: "+ artistInfo[artistVal].Description + "</p>");
        console.log(artistInfo);

    });

    //When changes made to artwork dropdown menu
    $("#artwork").change(function () {
        $(".thumbnail").css("height", "250px");

        var artworkVal = $("#artwork").val()-1;

        $('.home').fadeOut('fast');
        $.ajax({ 
            type: 'POST', 
            url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/getImage.php', 
            dataType: 'json',
            data: {imageID: artworkInfo[artworkVal].ImageID},
            success: function (data) { 
                $("#image").html('<img height="150px" width="150px" src="'+data[0].Link+'" alt="Mountain View"/>');
            },
            error: function(e) {
                console.log(e.message);
            }
        });

        $("#info").html("<p>Name: <a id='artist_link' onClick='more_artwork_info(); return false;' href='#'>" + artworkInfo[artworkVal].Name + "</a></p>\
                            <p>Brief Description: "+ artworkInfo[artworkVal].Description + "</p>\
                            <p>Price: $"+ artworkInfo[artworkVal].Price + "</p>");
        console.log(artworkInfo);
    
    });

    //When changes made to museum dropdwon menu
    $("#museum").change(function () {
        $(".thumbnail").css("height", "250px");

        var museumVal = $("#museum").val()-1;

        $('.home').fadeOut('fast');
        $.ajax({ 
            type: 'POST', 
            url: 'http://www2.scs.ryerson.ca/~tssaini/Webapps/a2_Iter2/getImage.php', 
            dataType: 'json',
            data: {imageID: museumInfo[museumVal].ImageID},
            success: function (data) { 
                $("#image").html('<img height="150px" width="150px" src="'+data[0].Link+'" alt="Mountain View"/>');
            },
            error: function(e) {
                console.log(e.message);
            }
        });

        $("#info").html("<p>Name: <a id='artist_link' onClick='more_museum_info(); return false;' href='#'>" + museumInfo[museumVal].Name + "</a></p>\
                            <p>Brief Description: "+ museumInfo[museumVal].Description + "</p>");
        console.log(museumInfo);
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

