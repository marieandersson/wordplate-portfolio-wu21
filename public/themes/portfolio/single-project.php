<?php get_header(); ?>

<?php if (have_posts()): ?>

  <?php while (have_posts()): the_post(); ?>
  <div class="flex flex-col justify-center lg:flex-row mt-8 lg:mt-0 mx-4">
      <div class="mb-6 mr-6">
            <?php if (has_post_thumbnail()) : ?>
            <div class="p-2 border border-solid border-teal-900" <?php if (get_field('color_profile')) : ?>style="border-color: <?php the_field('color_profile'); ?>"<?php endif; ?>>
              <?php the_post_thumbnail('medium'); ?>
            </div>
            <?php endif; ?>

            <?php if (get_field('project_client')): ?>

              <?php if (get_field('project_client_website')): ?>
                <p class="mt-4 font-bold">Client: <a class="text-teal-900 underline" href="<?php the_field('project_client_website');?>" <?php if (get_field('color_profile')) : ?>style="color: <?php the_field('color_profile'); ?>"<?php endif; ?>><?php the_field('project_client');?></a></p>
              <?php else: ?>
                <p class="mt-4 font-bold">Client: <?php the_field('project_client');?></p>
              <?php endif; ?>

            <?php endif; ?>
          </div>


      <div class="prose">
      <h1 <?php if (get_field('color_profile')) : ?>style="color: <?php the_field('color_profile'); ?>"<?php endif; ?>><?php the_title(); ?></h1>
        <?php $tools = get_the_terms( $post, 'tool'); ?>
        <?php if ($tools): ?>
            <p class="mb-0">
                <?php foreach ($tools as $tool) : ?>
                    <a class="text-lg italic" href="<?php echo get_term_link($tool) ?>" <?php if (get_field('color_profile')) : ?>style="text-decoration-color: <?php the_field('color_profile'); ?>"<?php endif; ?>><?php echo $tool->name ?></a>
                <?php endforeach; ?>
            </p>
        <?php endif; ?>
        <div class="mt-3">
          <?php the_content(); ?>
        </div>
      </div>
  </div>
  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
