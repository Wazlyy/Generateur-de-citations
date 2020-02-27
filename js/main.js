$(document).ready(function () {
  $("#generer").click(function () {
    
    $.ajax({
      url: 'db.php',

      success: function (citation) {
        $("#citation").html(citation);
      }

    });
  });

});