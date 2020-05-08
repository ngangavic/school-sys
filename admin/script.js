// id="input-school-name"

$(document).ready(function () {

    $("#btn-school-edit").click(function () {
        if ($("#btn-school-edit").val() == "Edit") {
            $("#input-school-name").prop('disabled', false);
            $("#input-school-phone").prop('disabled', false);
            $("#input-school-address").prop('disabled', false);
            $("#input-school-location").prop('disabled', false);
            $("#input-school-population").prop('disabled', false);
            $("#input-school-logo").prop('disabled', false);
            $("#btn-school-save").prop('disabled', false);
            $("#btn-school-edit").val("Cancel");
        } else if ($("#btn-school-edit").val() == "Cancel") {
            $("#input-school-name").prop('disabled', true);
            $("#input-school-phone").prop('disabled', true);
            $("#input-school-address").prop('disabled', true);
            $("#input-school-location").prop('disabled', true);
            $("#input-school-population").prop('disabled', true);
            $("#input-school-logo").prop('disabled', true);
            $("#btn-school-save").prop('disabled', true);
            $("#btn-school-edit").val("Edit");
        }
    });

});