</div> <!-- / .container -->

<footer class="bg-teal-900 text-white py-8">
  <div class="container mx-auto flex justify-between items-center">
    <div>
      <?php if (get_field('footer_contact_label', 'option')): ?>
        <p class="font-bold"><?php the_field('footer_contact_label', 'option');?></p>
      <?php endif; ?>

      <?php if (get_field('footer_email', 'option')): ?>
        <a class="text-white hover:underline" href="mailto:<?php the_field('footer_email', 'option');?>">
          <?php the_field('footer_email', 'option');?>
        </a>
      <?php endif; ?>
      <?php if (get_field('footer_copyright', 'option')): ?>
        <p class="italic mt-5"><?php the_field('footer_copyright', 'option');?></p>
      <?php endif; ?>
    </div>

    <div class="flex items-center">
      <?php if (get_field('github_url', 'option')): ?>
        <a href="<?php the_field('github_url', 'option');?>">
          <img class="w-12 mr-4 hover:scale-110 transition" src="<?=get_template_directory_uri();?>/assets/images/github-icon.png" />
        </a>
      <?php endif; ?>

      <?php if (get_field('linkedin_url', 'option')): ?>
        <a href="<?php the_field('linkedin_url', 'option');?>">
          <img class="w-12 mr-4 hover:scale-110 transition" src="<?=get_template_directory_uri();?>/assets/images/linkedin-icon.png" />
        </a>
      <?php endif; ?>

      <?php if (get_field('twitter_url', 'option')): ?>
        <a href="<?php the_field('twitter_url', 'option');?>">
          <img class="w-12 hover:scale-110 transition" src="<?=get_template_directory_uri();?>/assets/images/twitter-icon.png" />
        </a>
      <?php endif; ?>
    </div>

  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>