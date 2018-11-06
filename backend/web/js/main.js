console.log(ids);
$('#processform-operation').on('change', function () {
    if ($.inArray(parseInt($("#processform-operation option:selected").val()), [2]) > -1) {
        console.log("is in array");
    } else {

        console.log("is NOT in array");
    }
});
function showContact() {

}
