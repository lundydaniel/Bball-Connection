wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
} );

wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
} );

wp.blocks.registerBlockStyle( 'core/media-text', {
    name: 'spacing',
    label: 'Spacing',
} );

wp.blocks.registerBlockStyle( 'core/navigation', {
    name: 'themeoption',
    label: 'Theme Option',
} );