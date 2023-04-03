<?php get_header() ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            EXHIBITONS
        </h1>

    </div>

</section>

<section class="exhibitions">
    <div class="exhibition-heading">
        <h2>EXHIBITIONS</h2>
        <h2>JOANNA HELANDER 2008</h2>
    </div>
</section>

<div class="exhibitions-grid">

    <?php if (have_posts()) : ?>


        <?php while (have_posts()) : the_post(); ?>
            <div class="exhibitions-post">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('paragraph') ?>
                </p>
            </div>




    <?php
        endwhile;
    endif;

    ?>

</div>

<div class="exhibition-image-container">
    <img src="/wp-content/themes/kinokoszy/assets/images/teater.jpg" alt="" />

    <img src="/wp-content/themes/kinokoszy/assets/images/arvikaBib.jpg" alt="" />

</div>



<?php get_footer() ?>