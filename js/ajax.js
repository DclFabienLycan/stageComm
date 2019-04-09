$(".myForm").submit(function() {
  // event.preventDefault();
  
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
