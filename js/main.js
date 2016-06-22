$(function() {
  $("form").submit(function(e) {
    var form = $(this);
      var id = form.attr('id');
      var url = "guardarjson.php"; // the script where you handle the form input.

      $.ajax({
             type: "POST",
             url: url,
             data: $("#"+id).serialize(), // serializes the form's elements.
             success: function(data)
             {
                 console.log(data); // show response from the php script.
             }
           });

      e.preventDefault(); // avoid to execute the actual submit of the form.
  });
})
