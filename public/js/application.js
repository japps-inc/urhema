window.onscroll = function() {myFunction()};

function myFunction() {
	
	if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        $('.navbar').addClass('fixed-top');
    } else {
        $('.navbar').removeClass('fixed-top');
    }
}