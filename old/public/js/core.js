/**
 * Created by Francisco on 3/28/2017.
 */
/* -----------------------------------------------------------------------------
 Culina. - Rhema app
 File:           JS Core ()
 Version:        1.0
 Last change:
 Author:         Purple Dot
 -------------------------------------------------------------------------------- */
'use strict';

var Rhema = {
    init: function () {
        this.Basic.init()
    },

    Basic: {
        init: function () {
            this.typed(),
			this.switchAuth()
        },
        typed: function () {
            /*Typed js for title tag*/
            $("#title").typed({
                strings: ["Rhema :: Cloud hosting gospel message platform"],
                typeSpeed: 200,
                backDelay: 900,
                loop: true,
                cursorChar: "|",
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false
            });
        },
		
		switchAuth: function () {
			// set switch key for login and signup
			$('#goLogin').click(function(){
				$('#signupForm').hide();
				$('#loginForm').show();
				$('.auth-box h1').html('Login to the Community');
			});
			$('#goSignup').click(function(){
				$('#loginForm').hide();
				$('#signupForm').show();
				$('.auth-box h1').html('Join the Community');
			});
		}
		
    }

};
$(document).ready(function () {
    Rhema.init()
})