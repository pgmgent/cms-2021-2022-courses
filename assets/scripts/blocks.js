wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/button', {
        name: 'primary-button',
        label: 'Primary button',
    } );

    wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );
} );