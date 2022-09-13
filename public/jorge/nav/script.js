$(document).ready(function(){
    $("li").click(function(){
        $(this).css({ 'background-color':'#B392AC' });
        $("li").not(this).css({ 'background-color':'#735D78' }); 
        
        $("li").not(this).children("ul").hide();
        $(this).children("ul").toggle();
    });
});
