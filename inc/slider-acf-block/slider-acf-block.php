<?php 

/**
 * Slider Block Template.
 *
 * Aquí vamos a renderizar el contenido de nuestro bloque cuando sea llamado en nuestro editor
 */

$id = 'slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
?>


<div id="<?php echo esc_attr($id); ?>" class="bxslider">

    <?php if( have_rows( 'slider_acf_block_repeater' ) ): ?>
        <?php while( have_rows( 'slider_acf_block_repeater' ) ): the_row(); ?>
            <?php $sliderImage = get_sub_field( 'slider_acf_block_image' ); ?>
            <img 
                src="<?php echo esc_url( $sliderImage['url'] ); ?>" 
                alt="<?php echo esc_attr( $sliderImage['alt'] ); ?>"
            />
        <?php endwhile; ?>
    <?php endif; ?>

</div>