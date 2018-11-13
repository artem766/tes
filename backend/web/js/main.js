organizationToggle()
$('#processform-operation').on('change', function () {
    organizationToggle()
});

function organizationToggle() {
    if ($.inArray(parseInt($("#processform-operation option:selected").val()), [2]) > -1) {
        $('.field-processform-organization').show();

    } else {
        $('.field-processform-organization select').val('');
        $('.field-processform-organization').hide();
    }
}
