<?php get_header(); ?>

    <section id="categories" class="container mt-20 mb-20 pt-25">
        <div class="row justify-content-center">
            <nav>
                <ul id="filters" class="list-inline" style="text-align: center;">
                    <?php
                        $all_categories = get_categories(array(
                            'hide_empty' => true
                        ));
                    ?>
                    <?php foreach($all_categories as $category): ?><li class="list-inline-item">
                           <button type="button"  data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </section>

        

    <section id="gallery" class="container pt-25 pb-50">
        <div class="row to_be_filtered">
            <!-- Initiating the loop for album galleries -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ; ?>
            
                <!-- Template part for album -->
                <?php get_template_part( 'partials/album/content-album' ) ?>
            
            <?php endwhile; else: ?>
                <?php echo _e( 'No countent found', 'iovescu_portfolio' ); ?>
            <?php endif; wp_reset_postdata(); ?>


        </div>
    </section>

    <section id="CTA" class="container pt-50 pb-50">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="button col-xs-12">
                <a href="<?php echo get_page_link( 68 ); ?>">Contact me</a>
            </div>
        </div>
    </section>

    <?php if( get_field('testimonials') ) : ?>
        <div class="separator mt-20 mb-20"></div>
        
        <section class="container pt-50 pb-50">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!-- Including the loop for testimonials CTU and his content -->
                <?php get_template_part( 'partials/testimonials/content-testimonials' ); ?>

            </div>                
        </section>
    <?php endif ?>
    

    <?php get_footer(); ?>
    
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    
    <!-- Scripts -->
    <script type="text/javascript">
        jQuery('.carousel').carousel({
            interval: 8000
        });
    </script> 
    
    <script>
        (function ($) {
            
            var $grid = $('.to_be_filtered').isotope({
            itemSelector: '.filter-item',
            layoutMode: 'fitRows',
            getSortData: {
              name: '.name',
              symbol: '.symbol',
              number: '.number parseInt',
              category: '[data-category]',
              weight: function( itemElem ) {
                var weight = $( itemElem ).find('.weight').text();
                return parseFloat( weight.replace( /[\(\)]/g, '') );
              }
            }
          });

          // filter functions
          var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
              var number = $(this).find('.number').text();
              return parseInt( number, 10 ) > 50;
            },
            // show if name ends with -ium
            ium: function() {
              var name = $(this).find('.name').text();
              return name.match( /ium$/ );
            }
          };

          // bind filter button click
          $('#filters').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
          });

          // bind sort button click
          $('#sorts').on( 'click', 'button', function() {
            var sortByValue = $(this).attr('data-sort-by');
            $grid.isotope({ sortBy: sortByValue });
          });

          // change is-checked class on buttons
          $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
              $buttonGroup.find('.is-checked').removeClass('is-checked');
              $( this ).addClass('is-checked');
            });
          });
       })(jQuery);
    </script> 
</body>
</html>