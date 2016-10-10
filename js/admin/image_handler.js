function addImage(t) {
    var ths = $('#' + t);
    addI(ths);
}

function addI(ths) {
    ths.closest('.form-group').find('#files').remove();
    if (ths.val() && ths.val().match(/^img/))
        ths.val('/' + ths.val());
    ths.closest('.form-group')
        .append('<div id="files" class="files"><img style="width: 20%; padding: 7px;" src="' + ths.val() + '" alt="" /></div>');
}

function responsive_filemanager_callback(t) {
    addImage(t);
}

function addMinusImgHandler() {
    $('.minusImg').on('click', function (e) {
        e.preventDefault();
        if ($('.image-group').length <= 1) {
            var formGroup = $(this).closest('.form-group');
            formGroup.find('#files').remove();
            formGroup.find('input').val('');
        } else {
            $(this).closest('.form-group').remove();
        }
    });
}

function addHandlers() {
    addMinusImgHandler();
    $('.addImgField').on('click', function (e) {
        e.preventDefault();
        var clone = $('.image-group:last').clone();
        clone.find('#files').empty();
        clone.find('input').val('');
        var modal = clone.find('.modal');
        var num = newNum = modal.attr('id').match(/\d+$/)[0];
        var id = modal.attr('id');
        modal.attr('id', id.replace(num, ++newNum));
        var dt = clone.find('.flm').attr('data-target');
        clone.find('.flm').attr('data-target', '#' + modal.attr('id'));
        var inputId = clone.find('.imgInput').attr('id');
        clone.find('.imgInput').attr('id', inputId.replace(num, newNum));
        var iframeSrc = clone.find('iframe').attr('src');
        clone.find('iframe').attr('src', iframeSrc.replace(/\d+$/, newNum));
        clone.insertAfter('.image-group:last');
        $('.minusImg').unbind('click');
        addMinusImgHandler();
    });
}

$(function () {
    $.each($('.imgInput'), function () {
        if ($(this).val().length > 0)
            addI($(this));
    });
    addHandlers();
});