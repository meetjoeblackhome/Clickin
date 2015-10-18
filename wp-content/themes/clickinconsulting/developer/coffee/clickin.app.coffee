jQuery(document).ready ->
	clickin =
		preloader: ->
			# Preloader
			preloader = $('.preloader');
			setTimeout (->
				preloader.remove()
			), 400
			# End :: Preloader
	clickin.preloader()

