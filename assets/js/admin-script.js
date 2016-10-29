jQuery( document ).ready(function() {
		var focusedElement;
		jQuery(document).on('focus', '#acf-location_metabox_embed_shortcode', function () {
				if (focusedElement == this) return; //already focused, return so user can now place cursor at specific point in input.
				focusedElement = this;
				setTimeout(function () { focusedElement.select(); }, 50); //select all text in any field on focus for easy re-entry. Delay sightly to allow focus to "stick" before selecting.
		});
});
