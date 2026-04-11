jQuery(document).ready(function ($) {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalBtnText = submitBtn.text();

        // Basic Validation
        var name = $('#name').val().trim();
        var email = $('#email').val().trim();
        var message = $('#message').val().trim();

        if (!name || !email || !message) {
            alert('Please fill in all required fields.');
            return;
        }

        // Email Regex Validation
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        submitBtn.text('Processing...').prop('disabled', true);

        var formData = {
            action: 'techgrow_contact',
            nonce: techgrow_ajax.nonce,
            name: name,
            email: email,
            message: message
        };

        $.ajax({
            url: techgrow_ajax.ajax_url,
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    // Success Glow Feedback
                    form.css('border-color', 'var(--secondary-glow)');
                    alert(response.data);
                    form[0].reset();
                } else {
                    alert(response.data || 'Something went wrong.');
                }
            },
            error: function () {
                alert('Connection error. Please try again.');
            },
            complete: function () {
                submitBtn.text(originalBtnText).prop('disabled', false);
            }
        });
    });
});
