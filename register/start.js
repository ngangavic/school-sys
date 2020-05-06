function load(){
$(document).ready(function () {
    $("#form-school").show();
    $("#form-teacher").hide();
    $("#form-parent").hide();
    $("#school-btn").prop('disabled', true);
    $("#teacher-btn").prop('disabled',true);
});
}