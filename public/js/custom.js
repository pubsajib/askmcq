$(document).ready(function() {
    // Tabs
    $('#tab-container').easytabs();

    // Text Editor
    $("#question-one").Editor();
    $("#question-two").Editor();
    $("#question-three").Editor();
    $("#explanation-one").Editor();
    $("#explanation-two").Editor();

    // Question Selection
    $(document).on('click', '.apptitude', function(event) {
        var id = $(this).attr('data-block');
        $('.sub-categories').addClass('list-hide');
        $(id).removeClass('list-hide');
    })


})