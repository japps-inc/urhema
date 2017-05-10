<script src="<?php echo Config::get('URL'); ?>js/jquery.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo Config::get('URL'); ?>";
    </script>

    <!-- our JavaScript -->
	<script type="text/javascript" src="<?php echo Config::get('URL'); ?>js/jquery_002.js"></script>
    <script src="<?php echo Config::get('URL'); ?>js/bootstrap.js"></script>
    <script src="<?php echo Config::get('URL'); ?>js/application.js"></script>
    <script src="<?php echo Config::get('URL'); ?>js/typed.js"></script>
    <script src="<?php echo Config::get('URL'); ?>js/core.js"></script>
	
	<script>
	// niceScroll
	jQuery("html").niceScroll({
		scrollspeed: 50,
		mousescrollstep: 38,
		cursorwidth: 3,
		cursorborder: 0,
		cursorcolor: '#6B18E5',
		autohidemode: true,
		zindex: 9999999,
		horizrailenabled: false,
		cursorborderradius: 0
	});
	
	jQuery(".Loading").niceScroll({
		scrollspeed: 50,
		mousescrollstep: 38,
		cursorwidth: 5,
		cursorborder: 0,
		cursorcolor: '#6B18E5',
		autohidemode: false,
		zindex: 9999999,
		horizrailenabled: false,
		cursorborderradius: 5
	});
	</script>
	
</body>
</html>
