add_action( 'template_redirect', 'remove_wpseo' );

/*
Removes output from Yoast SEO on the frontend for a specific post. 
Simply replace the if ( is_single ( 1 )) with the post id you want to disable the SEO output.
*/


function remove_wpseo() {
    if ( is_single ( 1 ) ) {
        $front_end = YoastSEO()->classes->get( Yoast\WP\SEO\Integrations\Front_End_Integration::class );

        remove_action( 'wpseo_head', [ $front_end, 'present_head' ], -9999 );
    }
}