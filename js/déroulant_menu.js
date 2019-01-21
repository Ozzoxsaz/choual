$(document).ready(function(){
    $('.dropdown-perso-toggle').on('click', function(){
        if($('.dropdown-perso').css('display') == 'none') {
            $('.dropdown-perso').slideDown()
        } else {
            $('.dropdown-perso').slideUp()
        }
    })
})