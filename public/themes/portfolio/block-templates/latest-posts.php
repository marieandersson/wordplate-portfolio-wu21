<?php
$postType = get_field('latest-posts-post-type') ?: 'post';
$numberOfPosts = get_field('latest-posts-number-of-posts') ?: 3;
$latestPostsArchiveLink = get_field('latest-posts-link-to-archive');
$latestPostsLinkLabel = get_field('latest-posts-link-label') ?: 'All posts';
$backgroundColor =  get_field('latest-posts-background-color');

$args = [
    'post_type' => $postType,
    'numberposts' => $numberOfPosts,
    'order' => 'desc',
];

$latestPosts = get_posts($args);

?>

<div <?php if (!empty($backgroundColor)):?> style="background-color:<?= $backgroundColor; ?>;"<?php endif; ?>?>
<div class="grid gap-5 grid-cols-3 mt-8 not-prose">
    <?php foreach($latestPosts as $post): ?>
        <a href="<?= get_the_permalink($post); ?>">
            <?php if ($image = get_the_post_thumbnail($post, 'large')): ?>
                <?= $image; ?>
            <?php endif; ?>
            <h3 class="text-2xl"><?= get_the_title($post); ?></h3>
        </a>
    <?php endforeach; ?>
</div>

<?php if (!empty($latestPostsArchiveLink)): ?>
    <div class="mt-8 not-prose">
        <a class="bg-teal-900 text-white px-3 py-2" href="<?= esc_url($latestPostsArchiveLink); ?>"><?= $latestPostsLinkLabel; ?></a>
    </div>
<?php endif; ?>
