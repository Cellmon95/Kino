<?php get_header() ?>
<div class="title-container">
    <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    <h1>EXHIBITIONS</h1>
</div>

<?php if (have_posts()) : ?>

    <div>

        <?php while (have_posts()) : the_post();

            the_title(); ?>




    <?php
        endwhile;
    endif;

    ?>
    </div>

    <?php get_footer() ?>