<?php
/**
 * Banner Section
 * 
 * slug: cleaning-equipment/banner
 * title: Banner
 * categories: cleaning-equipment
 */

return array(
    'title'      =>__( 'Banner', 'cleaning-equipment' ),
    'categories' => array( 'cleaning-equipment' ),
    'content'    => '<!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":6,"dimRatio":50,"overlayColor":"black","focalPoint":{"x":0.46,"y":0},"minHeight":800,"minHeightUnit":"px","tagName":"main","className":"wp-block-group alignfull"} -->
<main class="wp-block-cover wp-block-group alignfull" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" style="object-position:46% 0%" data-object-fit="cover" data-object-position="46% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wow fadeInUp","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group wow fadeInUp"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"slider-banner"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center slider-banner"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"style":{"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
<h2 class="wp-block-heading has-background-color has-text-color" style="font-size:35px;font-style:normal;font-weight:600">'. esc_html('PROFESSIONAL TRUSTES HOME','cleaning-equipment') .'<br>'. esc_html('CLEANING SERVICES','cleaning-equipment') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"background","className":"has-background-color has-text-color has-upper-heading-font-size","fontSize":"upper-heading"} -->
<p class="has-text-align-left has-background-color has-text-color has-upper-heading-font-size">'. esc_html('We care for the growing needs of our community. We build systems for providing health services for individuals, families, communities and populations in general.','cleaning-equipment') .'</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"theme-btn","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size theme-btn has-small-font-size"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><strong>'. esc_html('LEARN MORE','cleaning-equipment') .'</strong></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"background","style":{"border":{"radius":"10px"}},"className":"is-style-outline theme-btn","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline theme-btn has-small-font-size"><a class="wp-block-button__link has-background-color has-text-color wp-element-button" href="#" style="border-radius:10px"><strong>'. esc_html('FREE QUOTE','cleaning-equipment') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->',
);