//$(document).keypress("c",function(e) {
  //if(e.ctrlKey)
    //alert("ctrl + c was pressed");
	
//});

$(document).ready(function(){
    $(".hangman").hide();                     
    $(document).keypress(function (e) {
        if($('.hangman').is(':hidden')){
            $(".hangman").show("fast");
            $("#query").val($("#query").val()+String.fromCharCode(e.charCode));
            document.forms['form'].elements['query'].focus();
        }
    });

    $(document).bind('paste', function(e){
        console.log(e);
        document.forms['form'].elements['query'].focus();
        $(".hangman").show("fast");
        
    });
});