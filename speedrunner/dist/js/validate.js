$(document).ready(function () {
  function validateForm(form) {
    $(form).validate({
      rules: {
        name: {
          required: true,
          minlength: 2,
        },
        phone: "required",
        email: {
          required: true,
          email: true,
          minlength: 5,
        },
      },
      messages: {
        name: {
          required: "Enter your name",
          minlength: jQuery.validator.format(
            "At least {0} characters required!"
          ),
        },
        email: {
          required: "We need your email address to contact you",
          minlength: jQuery.validator.format(
            "At least {0} characters required!"
          ),
        },
      },
    });
  }

  validateForm("#consultation-form");
  validateForm("#consultation form");
  validateForm("#order form");
});
