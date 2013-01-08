<?php if ( !defined( 'BASEPATH' ) ) {
	exit( 'No direct script access allowed' );
}

/**
 * Created by MightMedia TVS
 * User: Vytenis
 * Date: 12.11.8
 * Time: 12.18
 * © 2012
 */

$this
//	->add_css( 'bootstrap.css' )
//	->add_css( 'bootstrap-responsive.css' )
//	->add_css( 'main.css' )
	->add_css( 'user/main.css' )
	->add_css( 'bootstrap.css' )
	->append_js( 'application/themes/demo/views/web/resources/js/jquery.js' )
	->append_js( 'application/themes/demo/views/web/resources/js/bootstrap.js' )
	->set_partial( 'header', 'partials/header' )
	->set_partial( 'content_header', 'partials/content_header' )
	->set_partial( 'footer', 'partials/footer' )
	->set_layout( 'main_layout' );
