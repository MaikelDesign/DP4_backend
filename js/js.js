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
    
    
    
    $('.close').click(function(e){
        e.preventDefault();
        $(this).parent().hide();
    });

});