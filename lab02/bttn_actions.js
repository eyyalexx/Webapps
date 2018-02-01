
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
});