/*
//Javascript document
//Jquery plugin
*/

$(document).ready(function(){

    $('.menu1').click(function(e){
        e.preventDefault();
        $('#login_container').show();
    });
    
    $('.close').click(function(e){
        e.preventDefault();
        $(this).parent().hide();
    });

});