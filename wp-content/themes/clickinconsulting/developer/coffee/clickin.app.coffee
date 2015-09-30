jQuery(document).ready ->
	clickin =
		preloader: ->
			# Preloader
			preloader = $('.preloader');
			setTimeout (->
				preloader.remove()
			), 800
			# End :: Preloader
	clickin.preloader()

