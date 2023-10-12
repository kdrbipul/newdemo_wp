<?php 
/*
 * This template for displaying for header 
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Theme</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?> >
<div id="header_are"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri();?>./images/logo.jpg" alt="">
            </div>
            <div class="col-md-9"></div>
        </div>
    </div>
</div>
    



    <?php wp_footer();?>
</body>
</html>

