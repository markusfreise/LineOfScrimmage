wp.domReady( () => {
    const { registerBlockStyle } = wp.blocks;

    const predefinedPClasses = [
        { name: 'abstract', label: 'Intro' }
    ];

    const predefinedHeadClasses = [
        { name: 'h1', label: 'wie H1' },
        { name: 'h2', label: 'wie H2' },
        { name: 'h3', label: 'wie H3' }
    ];

    predefinedPClasses.forEach( style => {
        registerBlockStyle( 'core/paragraph', {
            name: style.name,
            label: style.label,
        } );
    } );

    predefinedHeadClasses.forEach( style => {
        registerBlockStyle( 'core/heading', {
            name: style.name,
            label: style.label,
        } );
        registerBlockStyle( 'core/paragraph', {
            name: style.name,
            label: style.label,
        } );
    } );

} );
