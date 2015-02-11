$(document).ready(function() {
    $("#send-message").click(function(e) {
        e.preventDefault();

        sendData();
    });

    var sendData = function() {
        var form_data = {
            "name": $("#name").val(),
            "email": $("#email").val(),
            "subject": $("#subject").val(),
            "message": $("#message").val()
        };

        $.post(
            window.ajax_url + '?action=custom_forms_feedback_form',
            form_data,
            ajaxCallback,
            'json'
        );
    };

    var ajaxCallback = function(data) {
        resetForm();
    };

    var resetForm = function() {
        $("#feedback-form").find("input[type=text], textarea").val('');
    }
});