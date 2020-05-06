$(document).ready(function () {
    $("#school-pass2").keyup(function () {

        var pass1 = $("#school-pass1").val();
        var pass2 = $("#school-pass2").val();

        if (pass1 != pass2) {
            $("#school-pass2").css("background-color", "red");
            $("#school-btn").prop('disabled', true);
        } else {
            $("#school-pass2").css("background-color", "green");
            $("#school-btn").prop('disabled', false);
        }

    });
});