/*
//Javascript document
//Jquery plugin
*/

$(document).ready(function(){

    $('.menu1').click(function(){
        //check url for location
        var value = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
        if(value == 'admin.php'){
            window.location.href = "logout.php";
        }else{
            window.location.href = "assets/logout.php";
        }
    });    
    
    
    $('.menu4').click(function(e){
        $('#login_container').show();
    });
    
    $('#close').click(function(e){
        e.preventDefault();
        $('#login_container').hide();
        $('.register-profile').hide();
        $('.register-company').hide();
    });

    $('#registerProf').click(function(e){
        e.preventDefault();
        $('.login').hide();
        $('.register-profile').show();
    });
    
    $('#registerCom').click(function(e){
        e.preventDefault();
        $('.login').hide();
        $('.register-company').show();
    });
    
    $('.userBack').click(function(e){
        e.preventDefault();
        $('.login').show();
        $('.register-profile').hide();
    });
    
    $('.compBack').click(function(e){
        e.preventDefault();
        $('.login').show();
        $('.register-company').hide();
    });
    
});