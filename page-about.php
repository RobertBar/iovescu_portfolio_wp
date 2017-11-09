<?php
/**
  Template Name: About me page
 */
?>

<?php get_header(); ?>

<section id="about-me" class="container pt-25 pb-25">
        <div class="row justify-content-center">
            <div class="about-photo col-lg-5">
                <?php $image = get_field('photo');

                if( !empty($image) ): ?>

                    <img class="img-fluid" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>
            <div class="container-about col-lg-7 ">
                <?php echo get_field('biography'); ?>
            </div>
        </div>
    </section>

    <section id="CTA" class="container pt-50 pb-50">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="button col-xs-12">
                <a href="<?php echo get_page_link( 68 ); ?>">Contact me</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>

 <!-- Scripts -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>assets/js/jquery-3.2.1.min.js" ></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>assets/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>assets/js/main.js" ></script>  

</body>
</html>