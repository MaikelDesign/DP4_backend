/*
//Javascript document
//Jquery plugin
*/

$(document).ready(function(){

    //login click -> show login form
    $('#login').click(function(e){
        e.preventDefault();
       $('#login_form').show(); 
    });

    //logout click -> logout 
    
    //close button
    $('.close').click(function(e){
        e.preventDefault();
        $(this).parent().hide();
    });
    
});