<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("p").hide();
  });
  $(".btn2").click(function(){
    $("p").show();
  });
});
</script>
<script>
$("#sub").on('click', function(event) {
    event.preventDefault();

    $.ajax({
        "type": 'POST',
        "url": "traitement.php",
        "data": '1',
        "processData": false,  // tell jQuery not to process the data
        "contentType": false,  // tell jQuery not to set contentType
        "success": function() {
            console.log('ça fonctionne !');
        },
        "error": function(p_JqXHR, p_TextStatus, p_ErrorThrown) {
            console.log(p_ErrorThrown);
        }
    });
})(jQuery);
</script>
</head>
<body>

<p>This is a paragraph.</p>

<button class="btn1">Hide</button>
<button class="btn2">Show</button>

</body>
</html>