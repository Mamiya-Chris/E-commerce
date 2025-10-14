// modal contactus form JS (jQuery with validation)
(function($){
  'use strict';
  var $form = $('#contactForm');
  if (!$form.length) return;
  
  // Initialize jQuery validation for contact form
  $form.validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      message: {
        required: true,
        minlength: 10
      }
    },
    messages: {
      name: {
        required: "Please enter your name",
        minlength: "Name must be at least 2 characters"
      },
      email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address"
      },
      message: {
        required: "Please enter a message",
        minlength: "Message must be at least 10 characters"
      }
    },
    errorElement: 'div',
    errorClass: 'invalid-feedback',
    validClass: 'is-valid',
    errorPlacement: function(error, element) {
      error.addClass('invalid-feedback');
      element.addClass('is-invalid');
      element.after(error);
    },
    success: function(label, element) {
      $(element).removeClass('is-invalid').addClass('is-valid');
      label.remove();
    },
    submitHandler: function(form) {
      var $modalEl = $('#contactModal');
      var bsModal = (typeof bootstrap !== 'undefined') ? (bootstrap.Modal.getInstance($modalEl[0]) || 
      new bootstrap.Modal($modalEl[0])) : null;
      if (bsModal) bsModal.hide();
      // show success modal (Bootstrap) instead of alert
      var $successEl = $('#contactSuccessModal');
      var successModal = (typeof bootstrap !== 'undefined' && $successEl.length) ? (bootstrap.Modal.getInstance($successEl[0]) || new bootstrap.Modal($successEl[0])) : null;
      if (successModal) {
        successModal.show();
        // auto-hide after 2s
        setTimeout(function(){ successModal.hide(); }, 2000);
      }
      $form[0].reset();
      $form.find('.is-valid').removeClass('is-valid');
      return false; // Prevent default form submission
    }
  });

  var $contactModalEl = $('#contactModal');
  if ($contactModalEl.length) {
    $contactModalEl.off('shown.bs.modal').on('shown.bs.modal', function(){
      var $first = $('#contactName'); 
      if ($first.length) $first.trigger('focus');
    });
  }
})(window.jQuery);
