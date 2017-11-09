<div class="carousel-inner" role="listbox">
    <?php
        $portfolio_query = new WP_Query(array(
            'post_type' => 'testimonials',
            'posts_per_page' => 1
        ));

            while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>

                <div class="carousel-item active">

                    <p><?php echo get_field('testimonial'); ?></p>
                    <p><strong><?php echo get_field('author'); ?></strong> - <?php echo get_field('location'); ?></p>

                </div>

    <?php   endwhile; wp_reset_postdata(); ?>

    <?php
        $portfolio_query = new WP_Query(array(
            'post_type' => 'testimonials',
            'posts_per_page' => 5,
            'offset' => 1
        ));

            while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>

                <div class="carousel-item">

                    <p><?php echo get_field('testimonial'); ?></p>
                    <p><strong><?php echo get_field('author'); ?></strong> - <?php echo get_field('location'); ?></p>

                </div>

    <?php   endwhile; wp_reset_postdata(); ?>

</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>