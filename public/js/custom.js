$(document).ready(function() {
    // Tabs
    $('#tab-container').easytabs();
    // Question Selection
    $(document).on('click', '.apptitude', function(event) {
        var id = $(this).attr('data-block');
        $('.sub-categories').addClass('list-hide');
        $(id).removeClass('list-hide');
    });
    // USER PROFILE
})