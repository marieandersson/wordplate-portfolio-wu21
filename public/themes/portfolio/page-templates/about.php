<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<div class="flex flex-col">
<?php if (have_posts()): ?>

    <div class="prose">
        <?php while (have_posts()): the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>

        <?php endwhile; ?>
    </div>

<?php endif; ?>

<?php
  /*
  * List the latest project
  */
  $args = [
    'post_type' => 'project',
    'numberposts' => 1,
    'order' => 'desc',
  ];
  $latestProject = get_posts($args);
?>

<?php if (count($latestProject)): ?>
    <div class="mt-8 w-[300px] border border-gray-300 shadow-md p-4">
        <?php foreach ($latestProject as $post): setup_postdata($post); ?>
            <div class="mb-4">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
            </div>

            <div>
                <a class="text-lg font-black underline hover:text-teal-700" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
            </div>
        <?php endforeach; wp_reset_postdata(); ?>

    </div>
<?php endif; ?>
</div>

<?php get_footer(); ?>