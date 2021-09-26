<header>
        <div class="logo">
            <img class="logoo" src="<?php echo get_template_directory_uri() ?>/images/koko.png" alt="koko" height="100">
        </div>


    </header>


    <?php
    get_header();
?>
<div class="landing">
    <img src="<?php echo get_template_directory_uri() ?>/images/front.png" alt="image" class="landingimg">
    <div class="bottomtext"><?php bloginfo('description')?></div>
</div>


<div class="content">
<?php while(have_posts()): the_post() ?>
    <div class="container">
        <section class="intro">
            <h1 class="introtitle"><?php the_title() ?></h1>
            <p class="introtext"><?php the_content() ?></p>
        </section>
        <section class="field1">
            <div class="left">
                <img src="<?php the_field('img1') ?>" class="img" height="300" width="300">
            </div>
            <div class="right">
                <h3 class="title"><?php the_field('title1') ?></h3>
                <p class="text"><?php the_field('text1') ?></p>
            </div>
        </section>
        <section class="field2">
            <div class="left"> 
            <img src="<?php the_field('img2') ?>" class="img" height="300" width="300">
            </div>
            <div class="right">
            <h3 class="title"><?php the_field('title2') ?></h3>
            <p class="text"><?php the_field('text2') ?></p>
            </div>
        </section>
        <section class="field3">
            <div class="left">
            <img src="<?php the_field('img3') ?>" class="img" height="300" width="300">
            </div>
            <div class="right">
            <h3 class="title"><?php the_field('title3') ?></h3>
            <p class="text"><?php the_field('text3') ?></p>
            </div>
        </section>
        <section class="field4">
            <div class="left">
            <img src="<?php the_field('img4') ?>" class="img" height="300" width="300">
            </div>
            <div class="right">
            <h3 class="title"><?php the_field('title4') ?></h3>
            <p class="text"><?php the_field('text4') ?></p>
            </div>
        </section>
        <section class="field5">
            <div class="left">
            <img src="<?php the_field('img5') ?>" class="img" height="300" width="300">
            </div>
            <div class="right">
            <h3 class="title"><?php the_field('title5') ?></h3>
            <p class="text"><?php the_field('text5') ?></p>
            </div>
        </section>

    </div>
<?php endwhile; ?>
<?php
    get_footer();
?>