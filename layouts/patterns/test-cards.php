<?php
/**
* Card test
*
* @package rfm
*/
?>
<h2>Cards</h2>
<p>This is a good expample of our grid system as well</p>

<h3>Three columns</h3>
<div class="programs grid cols-3">
<?php for ( $i = 0; $i < 3; $i++ ) {
	get_template_part( RFM_PATTERNS . 'card', 'program' );
} ?>
</div>

<h3>Four columns</h3>
<div class="programs grid cols-4">
<?php for ( $i = 0; $i < 4; $i++ ) {
	get_template_part( RFM_PATTERNS . 'card', 'program' );
} ?>
</div>
