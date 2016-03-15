<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
      <!-- WELCOME SECTION-->
      <div class="hero">
        <h2> <?php the_field('intro'); ?> <br>

         <span class="fade-in one line"><?php the_field('intro_second_line') ?> </span></h2>
      </div>

      <!-- FEATURED WORK loop-->
        <?php
        $onePageQuery = new WP_Query(
        array(
                'posts_per_page' => -1,
                'post_type' => 'portfolio',
                'order' => 'ASC'
                )
        ); ?>
  
    <section id="work" class="featuredWorkContainer">
    <h1 class="title"> - Featured Work - </h1>
    <?php if ( $onePageQuery->have_posts() ) : ?>

        <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

            <article class="featuredWorkItem" id="<?php echo $post->post_name; ?>">

                <div class="workImage">

                 <a href=" <?php the_field('link')?> ">
                    <img src=" <?php  the_field('image')?>" alt=" <?php the_field('assignment') ?>">
                 </a>

                  <a class="mobileLinkSite"href="<?php the_field('link')?>">View Live Site</a>

                </div>

                <div class="workDescription">

                  <h3><?php the_field('assignment') ?></h3>
                  <h4> <?php the_field('project_name') ?>
                    <span> - Week <?php the_field('week')?> </span></p>
                  <p class="techSkills"> <?php the_field('tech_languages') ?></h4>
                  
                  <p class="description"> <?php the_field('description') ?> </p>

                  <a class="link" href=" <?php the_field('link')?> ">View Live Site</a>
                </div>

           </article>

           <?php endwhile; ?>

           <?php wp_reset_postdata(); ?>

       <?php endif; ?>
       </section>

      </div>
    
      <!--ABOUT-->
      <div id="about" class="about">
        <h1 class="title"> - About -</h1>

          <div class="aboutContainer">
            <div class="headshot"> 
              <img  class="sophieFace" src=" <?php the_field('about_image')?> " alt="Sophie's mugshot">

              <p>Photo: <?php the_field('about_photo_credit')?></p>
            </div>

            <div class="aboutCaption">
              <p> <?php the_field('about_caption') ?></p>
            </div>
          </div> <!--end of about wrapper-->
      </div> <!--END OF ABOUT SECTION-->

      <!--CONTACT-->
      <div id="contact" class="contact">

        <div class="contactWrapper">
        
          <h1 class="title"> - Contact -</h1>

          <p class="social"><?php the_field('contact_caption')?> </p>
        </div>

      </div>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>