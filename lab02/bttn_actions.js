
$(document).ready(function(){

    //image one
    $('#fadeout_image1').on('click', function(){
        console.log('fade out checked');
        $('#img1').fadeOut(700);
    });

    $('#fadein_image1').on('click', function(){
        console.log('fade in checked');
        $('#img1').fadeIn(700);
    });

    //image two
    $('#fadeout_image2').on('click', function(){
        console.log('fade out checked');
        $('#img2').fadeOut(700);
    });

    $('#fadein_image2').on('click', function(){
        console.log('fade in checked');
        $('#img2').fadeIn(700);
    });

    //image three
    $('#fadeout_image3').on('click', function(){
        console.log('fade out checked');
        $('#img3').fadeOut(700);
    });

    $('#fadein_image3').on('click', function(){
        console.log('fade in checked');
        $('#img3').fadeIn(700);
    });



    //inforamtion for image one
    $('#fadeout_info1').on('click', function(){
        console.log('fade out checked');
        $('.info1').fadeOut(700);

    });

    $('#fadein_info1').on('click', function(){
        console.log('fade in checked');
        $('.info1').fadeIn(700);
    });

    //inforamtion for image two
    $('#fadeout_info2').on('click', function(){
        console.log('fade out checked');
        $('.info2').fadeOut(700);
        
    });

    $('#fadein_info2').on('click', function(){
        console.log('fade in checked');
        $('.info2').fadeIn(700);
    });

    //inforamtion for image three
    $('#fadeout_info3').on('click', function(){
        console.log('fade out checked');
        $('.info3').fadeOut(700);
        
    });

    $('#fadein_info3').on('click', function(){
        console.log('fade in checked');
        $('.info3').fadeIn(700);
    });
});