<?php /* Template Name: Work */ ?>

<?php get_header(); ?>

<?php if (have_posts()): ?>

    <div class="prose mx-auto">
        <?php while (have_posts()): the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

        <?php endwhile; ?>
    </div>

<?php endif; ?>

<?php
  /*
  * List all projects
  */
  $projects = get_posts(['post_type' => 'project']);
?>

<?php if (count($projects)): ?>
<div class="max-w-prose mx-auto">
  <h2 class="text-2xl mt-8">Check out my projects</h2>
  <ul class="flex flex-col">
      <?php foreach ($projects as $post): setup_postdata($post); ?>

          <li class="flex flex-col my-3 w-full min-h-[60px] p-4 border border-gray-300 shadow-md">
              <a class="text-lg mb-3 font-black underline hover:text-teal-700" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>

              <?php $tools = get_the_terms($post, 'tool'); ?>
              <?php if ($tools): ?>
                <p class="mb-2">
                  Built using:
                  <?php foreach ($tools as $tool) : ?>
                    <a class="underline italic hover:text-teal-700" href="<?php echo get_term_link($tool) ?>"><?php echo $tool->name; ?></a>
                  <?php endforeach; ?>
                </p>
              <?php endif; ?>
          </li>
      <?php endforeach; wp_reset_postdata(); ?>
  </ul>
</div>
<?php endif; ?>

<?php get_footer(); ?>
