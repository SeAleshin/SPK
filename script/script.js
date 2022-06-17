$('.js-button').mousedown(function() {
    $(this).addClass('button_scale ');
}).click(function() {
    return true;
}).mouseup(function() {
    $(this).removeClass('button_scale');
});