<?php
	/*--------------------------------------------------
	    | Theme & WordPress core functions files
	--------------------------------------------------*/
		require get_template_directory() . '/includes/core/wp-admin.php';
		require get_template_directory() . '/includes/core/enqueue.php';
		require get_template_directory() . '/includes/core/theme-setup.php';
		require get_template_directory() . '/includes/core/theme-support.php';
		require get_template_directory() . '/includes/core/excerpt.php';
		require get_template_directory() . '/includes/core/nav-walker.php';
		require get_template_directory() . '/includes/core/google-analytics.php';


	/*-----------------------------------------------------------------------------
		| Custom
	-----------------------------------------------------------------------------*/

		@include ('includes/custom/helpers.php');


	/*-----------------------------------------------------------------------------
		| Custom Post Types
	-----------------------------------------------------------------------------*/

		// @include ('includes/custom-post-types/cpt-example.php');



	/*-----------------------------------------------------------------------------
		| Taxonomies
	-----------------------------------------------------------------------------*/

		// @include ('includes/taxonomies/taxonomy-example.php');