/**
 * Created by Francisco on 3/28/2017.
 */
/* -----------------------------------------------------------------------------
 Title. - Rhema app
 File:           JS Core ()
 Version:        1.0
 Last change:
 Author:         JAPPS
 -------------------------------------------------------------------------------- */
'use strict';

var Rhema = {
    init: function () {
        this.Basic.init()
    },

    Basic: {
        init: function () {
            this.typed(),
			this.switchAuth(),
			this.socialSwitch(),
			this.realtimeSearch(),
			this.userDropBar(),
			this.request()
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
		},
		
		socialSwitch: function() {
			var iconToggle = $('#in');
			var iconToggle2 = $('#out');
			var socialIcons = $('.social-icons');
			var swiss2 = $('.swiss-set-2');
			var swiss1 = $('.swiss-set-1');
			
			iconToggle.on('click',openSocialIcons);
			iconToggle2.on('click',closeSocialIcons);
			
			function openSocialIcons() {
				swiss1.animate({
					width: '27%'
				}, 500);
				socialIcons.animate({
					marginLeft: '10px'
				}, 800);
				iconToggle.hide();
				iconToggle2.show();
			}
			
			function closeSocialIcons() {
				socialIcons.animate({
					marginLeft: '-150px'
				}, 800);
				swiss1.animate({
					width: '20%'
				}, 500);
				iconToggle2.hide();
				iconToggle.show();
			}
			
		},
		
		realtimeSearch: function() {
			var topSearch = $('#search');
			var aiSearch = $('.aiSearch');
			
			topSearch.keypress(function(){
				aiSearch.addClass('show');
				topSearch.addClass('activeInput');
			});
			
			window.onclick = function(event) {
				if (!event.target.matches('.dd')) {

					var dropdowns = document.getElementsByClassName("aiSearch");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
						var openDropdown = dropdowns[i];
						if (openDropdown.classList.contains('show')) {
							openDropdown.classList.remove('show');
							topSearch.removeClass('activeInput');
						}
					}
				}
			}
		},
		
		userDropBar: function() {
			
			$('#dropBar').click(function(){
				$('#deck').animate({
					marginRight: '0'
				},500);
			});
			
			$('#close').click(function(){
				$('#deck').animate({
					marginRight: '-380px'
				},800);
			});
			
		},
		
		request: function() {
			$('.req').click(function () {
				$('.req').removeClass('sledge-active');
				$(this).addClass('sledge-active');
			});
		}
		
    }

};

function page(num) {
    $('.loading-pace').removeClass('hide');
	check_user_ajax(num);
	function check_user_ajax(value){
		$.get(url + 'dashboard/getFile', {'value':value}, function(data) {
			var respu = data;
			//alert(respu);
            $('#loading').html(respu);
            $('.loading-pace').addClass('hide');
		});
	}
}

$(document).ready(function () {
    Rhema.init()
})