<?php
// Register category for block patterns
if (function_exists('register_block_pattern_category')) {
    register_block_pattern_category(
        'portfolio-patterns',
        [
            'label' => 'Portfolio patterns'
        ]
    );
}

// Register resume item block pattern
if (function_exists('register_block_pattern')) {

    register_block_pattern(
        'portfolio-theme/resume-item',
        [
            'title' => 'Resume item',
            'description' => 'A list item for building a resume.',
            'categories' => ['portfolio-patterns'],
            'content' => '<!-- wp:group {"style":{"color":{"background":"#e5bbbb"}}} -->
            <div class="wp-block-group has-background" style="background-color:#e5bbbb"><!-- wp:heading -->
            <h2>Education / Employment - School / Company</h2>
            <!-- /wp:heading -->

            <!-- wp:separator {"className":"is-style-wide"} -->
            <hr class="wp-block-separator is-style-wide"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><em>2016 - 2018</em></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>Description. </p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->',
        ]
    );
}
