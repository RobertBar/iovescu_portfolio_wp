<?php
    // Advanced Custom field for gallery
    $text_on_hover = get_field("album_title");

    $categories = get_the_category();
    $slugs = wp_list_pluck($categories, 'slug');
    $class_names = join(' ', $slugs);
?>

<div class="filter-item col-sm-12 col-md-2 col-lg-4 <?php if ($class_names) { echo ' ' . $class_names;  } ?>">
    <div class="gallery-item">
        <div class="gallery-header">
            <a href="<?php the_permalink(); ?>">
                <div class="image-overlay">
                    <p class="justify-content-center align-items-center">
                        <?php echo $text_on_hover; ?>
                    </p>
                </div>
            </a>
            
            <?php the_post_thumbnail('gallery_thumbnail_two', ['class' => 'img-fluid']); ?>
            
        </div>
        <div class="gallery-footer">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="round-container" >
                    <?php echo get_simple_likes_button(get_the_ID()); ?>
                </div>
            </div>
        </div>
    </div>
</div>