$(function () {
    $.getJSON('js/cakes.json', function(data){
        $("#portfolio").elastic_grid({
            filterEffect: 'popup', // moveup, scaleup, fallperspective, fly, flip, helix, popup, random
            hoverDirection: true,
            hoverDelay: 0,
            hoverInverse: false,
            expandingSpeed: 500,
            expandingHeight: 570,
            exHideInfoBoxTitle: true,
            exControls: true,
            items: data
        });
    });
});