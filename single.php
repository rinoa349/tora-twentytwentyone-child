<?php get_header(); ?>

<main class="main single">
    <?php if ( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
        <?php the_title(); ?>
				<?php
        /* ここからアイキャッチ設定 */
        echo '<span class="image">';
        if ( has_post_thumbnail( $post->ID ) ) {
            echo get_the_post_thumbnail( $post->ID, 'large' );
        } else {
            echo '<img src="' . esc_url( get_theme_file_uri( "img/default-image.png" ) ) . '" alt="">';
        }
        echo '</span>';
        /* ここまで */
        ?>
        <div class="wysiwyg-editor">
            <?php the_content(); ?>
        </div>
        <?php endwhile;?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
