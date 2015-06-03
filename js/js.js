/*
//Javascript document
//Jquery plugin
*/

$(document).ready(function(){

//////////////////////////////////      GENERAL FUNCTIONS     //////////////////////////////////  
    
    //close button
    $('.close').click(function(e){
        e.preventDefault();
        $(this).parent().hide();
    }); 
    
    
//////////////////////////////////      LOGIN / REGISTER FORMS FUNCTIONS     //////////////////////////////////  
    
    //login click -> show login form
    $('#login').click(function(e){
        e.preventDefault();
       $('#login_container').show(); 
    });

    //logout click -> logout 
    $('#register').click(function(e){
        e.preventDefault();
        $('#login_form').hide();
        $('#register_form').show();
    });    
    
    //back btn register form
    $('#register_form a').click(function(e){
        e.preventDefault();
        $('#register_form').hide();
        $('#login_form').show();
    });
    
    
    
    

    
});