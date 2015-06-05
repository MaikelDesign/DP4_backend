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
        $('#register_form, #register_form_company').hide();
        $('#login_form').show();
    }); 
    
    
//////////////////////////////////      LOGIN / REGISTER FORMS FUNCTIONS     //////////////////////////////////  
    
    //login click -> show login form
    $('#login').click(function(e){
        e.preventDefault();
       $('#login_container').show(); 
    });

    //register click -> user register form
    $('#register').click(function(e){
        e.preventDefault();
        $('#login_form').hide();
        $('#register_form').show();
    });    
    
    //login company click -> company register form 
    $('#company').click(function(e){
        e.preventDefault();
        $('#login_form, #register_form').hide();
        $('#register_form_company').show(); 
    });    
    
    //login company click -> company register form 
    $('#user').click(function(e){
        e.preventDefault();
        $('#login_form, #register_form_company').hide();
        $('#register_form').show();
    });    
    
    //back btn register form
    $('a.form_back').click(function(e){
        e.preventDefault();
        $('#register_form, #register_form_company').hide();
        $('#login_form').show();
    });
    
    
    
    

    
});