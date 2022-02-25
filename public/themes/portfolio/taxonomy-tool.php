<?php get_header(); ?>

<div class="max-w-prose mx-auto">
    <h2 class="text-2xl mt-8"><?php single_term_title( 'Projects built with ' ); ?></h2>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <div class="flex flex-col my-3 w-full min-h-[60px] p-4 border border-gray-300 shadow-md">
                <h2><a class="text-lg mb-3 font-black underline hover:text-teal-700" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>