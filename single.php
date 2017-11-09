<?php get_header(); ?>

    <section id="about" class="container pt-50">
        <div class="row justify-content-center">
            <div class="container-about col-md-10 ">
                <?php $about_story = get_field('album_story'); ?>
                <?php echo $about_story; ?>
            </div>
        </div>
    </section>


    <section class="container pt-50 pb-50">
        <?php $images = get_field('album_gallery'); 
              $size = 'portfolio-responsive-medium';
        ?>
        
        <div id="lightgallery" class="grid clearfix">
                <?php if( $images ): ?>
            
                    <?php foreach( $images as $image ): ?>
                        <div class="grid-item" data-src="<?php echo $image['url']; ?>" data-sub-html="<h4 class='lightbox-title'><?php echo $image['title']; ?></h4><p class='lightbox-description'><?php echo $image['description']; ?></p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                            <a href="<?php echo $image['url']; ?>">    
                                <?php echo wp_get_attachment_image( $image['ID'], $size, "", array( "class" => "column size-1of3 img-fluid" ) ); ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
            
                <?php endif; ?>   

        </div>
    </section>

<div class="clearfix"></div>
    
    <?php get_footer() ?>

    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.2.1.min.js" ></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js" ></script>

    <!-- Lightgallery -->
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>
    
    <!-- Loaded images -->
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <!-- Masonry -->    
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/main.js" ></script>  

    <script>
        if(jQuery('.grid').length) {
            jQuery('.grid').imagesLoaded( function() {
                jQuery('.grid').masonry({
                    // options
                    itemSelector: '.grid-item',
                    columnWidth: 220
                });                
            });
        }
    </script>
    
</body>
</html>