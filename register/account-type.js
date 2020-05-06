$(document).ready(function () {
    $("select#account-type").change(function () {
        var selectedAccount = $(this).children("option:selected").val();
        switch (selectedAccount) {
            case 'school':
                $("#form-school").show();
                $("#form-teacher").hide();
                $("#form-parent").hide();
                break;
            case 'teacher':
                $("#form-school").hide();
                $("#form-teacher").show();
                $("#form-parent").hide();
                break;
            case 'parent':
                $("#form-school").hide();
                $("#form-teacher").hide();
                $("#form-parent").show();
                break;
            default:
                $("#form-school").show();
                $("#form-teacher").hide();
                $("#form-parent").hide();
                break;
        }
        // alert("You have selected the country - " + selectedAccount);
    });
});