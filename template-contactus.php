<?php

/* Template Name: Contact Us */

?>

<?php get_header('secondary');?>

<div class="container">

<h1><?php the_title(); ?></h1>

<div class="row">

<div class="col-lg-6">

    <h1>This is where the contact form goes</h1>

</div>
<div class="col-lg-6">

<h1><?php get_template_part('includes/section', 'content'); ?></h1>

</div>

</div>



</div>



<?php get_footer();?>