var $input = $(".form-fieldset > input");

$input.blur(function (e) {
  $(this).toggleClass("filled", !!$(this).val());
});

$("#yes").on("change", function () {
  $("#no").not(this).prop("checked", false);
});

$("#no").on("change", function () {
  $("#yes").not(this).prop("checked", false);
});
