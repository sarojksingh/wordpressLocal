<?php

/**
 * Default footer with logo
 */
return array(
	'title'      => __('Footer with logo and citation', 'localwptheme'),
	'categories' => array('footer'),
	'blockTypes' => array('core/template-part/footer'),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-logo {"width":60} /-->

					<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' .
		sprintf(
			/* Translators: WordPress link. */
			esc_html__('Proudly powered by %s', 'localwptheme'),
			'<a href="' . esc_url(__('https://wordpress.org', 'localwptheme')) . '" rel="nofollow">WordPress</a>'
		) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
