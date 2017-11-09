<?php
/**
  Template Name: Contact me page
 */
?>

<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div id="info" class="col-md-6 pt-50 pb-50">
                <h5><?php echo get_field('usefull_informations_title'); ?></h5>
                <div><?php echo get_field('usefull_informations'); ?></div>
            </div>
            <div class="col-md-6 pt-50 pb-50">
<!--                <form>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="inputPassword3" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Name">
                        </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="inputEmail3" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="inputPassword3" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Phone">
                        </div>
                        </div>
                        

                        <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>-->
                <?php gravity_form( 1, false, false, false, '', false ); ?>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>

    <!-- Scripts -->
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js" ></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="assets/js/main.js" ></script>  

</body>
</html>