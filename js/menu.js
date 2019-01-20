$(document).ready(function() {
    $('#toggle_navbar').on('click', function(){
        $('.header').css('left', '0em')
    })
    $('#hide_navbar').on('click', function() {
        $('.header').css('left', '-18em')
    })
})