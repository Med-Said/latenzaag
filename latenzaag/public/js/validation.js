// Wait for the DOM to be ready
$(function() {

    $("form[name='registration']").validate({
      // Specify validation rules
      rules: {
        categorie: {
            required: true,
            minlength : 3
        },
        marque: {
            required: true,
            minlength: 3
        },
        nom: {
            required: true,
            minlength: 3
        },
        prix: {
            required: true
        },
      },
      // Specify validation error messages
      messages: {
        categorie: {required : "svp saisissez la categorie",
                    minlength: "au moins 3 carateres",
        },
        marque: {required : "svp saisissez la marque"},
   
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });