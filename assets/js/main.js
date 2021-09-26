$(document).ready(function(){
    $('.sidenav').sidenav({
        preventScrolling: false
    });

    $('.slider').slider({
        indicators: false,
        interval: 3000,
        height: 500
    });

    $(".dropdown-trigger").dropdown({
        closeOnClick: true
    });

    $('.materialboxed').materialbox();

    $('.collapsible').collapsible();

    $('.modal').modal();
});