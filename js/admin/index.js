$(function() {
    if (location.hash != '') {
        $('a[href="' + location.hash + '"]').tab('show');
    }
    $('a[data-toggle="tab"]').on('click', function(e) {
        return location.hash = $(e.target).attr('href').substr(1);
    });
});