// nav active button fix 6/9

$(document).ready(function () {
        $('ul.nav > li').click(function (e) {
        	// $('ul.nav > li').removeClass('active');
            // e.preventDefault();
            $(this).addClass('active');                
        });            
    });

