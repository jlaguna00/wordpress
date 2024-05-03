<?php
/**
 * Search Header Section
 * 
 * slug: cleaning-equipment/search-header
 * title: Search Header
 * categories: cleaning-equipment
 */

return array(
    'title'      =>__( 'Search Header', 'cleaning-equipment' ),
    'categories' => array( 'cleaning-equipment' ),
    'content'    => '<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"accent","className":"serach-header","layout":{"type":"constrained","contentSize":"50%"}} -->
<div class="wp-block-group serach-header has-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:query-title {"type":"search","textAlign":"center","textColor":"background"} /-->

<!-- wp:search {"label":"","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","align":"center","backgroundColor":"fourground","textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);