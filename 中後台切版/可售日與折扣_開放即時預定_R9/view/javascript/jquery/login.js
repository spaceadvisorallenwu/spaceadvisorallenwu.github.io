$(function(){

  $(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#password-field");
    //$("#password-field").val("Dolly Duck");
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });

  $(".toggle-password-confirm").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#password-field-confirm");
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
  $(".toggle-password-sencond").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#password-field-sencond");
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });

});
