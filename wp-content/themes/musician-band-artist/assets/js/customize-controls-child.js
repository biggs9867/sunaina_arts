( function( api ) {

	// Extends our custom "musician-band-artist" section.
	api.sectionConstructor['musician-band-artist'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );