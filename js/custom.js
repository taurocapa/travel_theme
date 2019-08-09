//JQuery
$(document).ready(function() {


    $(document).scroll(function() {
        // scroll line
        scroll_line();

    });

    $('#inquiry').ready(function() {
        modal = $('#exampleModal');
        $('#exampleModal').modal('show');
    });

});




//functions
// scroll Line.
function scroll_line() {
    var document_height = $(document).height();
    var scroll_position = $(document).scrollTop();
    var window_height = $(window).height();
    if ((scroll_position - window_height) <= 0) {
        var value_scroll = scroll_position;
    } else {
        var value_scroll = scroll_position + window_height;

    }
    var percent = parseInt((value_scroll / document_height) * 100);

    $('.scroll-page').css('width', percent + '%');
    $('.scroll-page').css('z-index', '20');
}

// Inquiry modal
function inquiry_call(wyw_dir_ajax) {

    // creating bootstrap alert.
    /**/


    var ajaxurl = wyw_dir_ajax,
        data = { 'action': clickBtnValue };
    console.log(data);
    console.log(ajaxurl);

    $.post(ajaxurl, data,
        function(response) {

            var html = ' <div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>THANK for contact us!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>'

            $('.message').append(html);
        },
    );



}