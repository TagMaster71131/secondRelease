$(document).ready(function() {


    // ----------------------------------------
    // Accordion ("Expandera erfarenheter")
    // ----------------------------------------
    var accordionLinks = document.getElementsByClassName('accordion-link');

    for (var i = 0; i < accordionLinks.length; i++) {
        accordionLinks[i].addEventListener('click', toggleDD);
    }

    function toggleDD(e) {
        e.preventDefault();

        // Dive into the DOM and find it
        var ddToToggle = e.path[1].nextElementSibling;
        ddToToggle.classList.toggle('hide');
    }

    // ----------------------------------------
    // Countdown
    // ----------------------------------------

    $('#lia').countdown('2018/01/15', function(event) {
        $(this).html(event.strftime('%w veckor, %d dagar, %H timmar'));
    });

    $('#exam').countdown('2018/05/31', function(event) {
        $(this).html(event.strftime('%w veckor, %d dagar, %H timmar'));
    });

});

