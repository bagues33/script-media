<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Script Media
 */

?>

<!-- <aside id="secondary" role="complementary">
	
</aside>
 -->

    <div class="sidebar">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
      <?php get_search_form(); ?>
      <h3 class="sidebar-title">Categories</h3>
      <div class="sidebar-item categories">
        <ul>
          <?php sm_category(); ?>
        </ul>
      </div><!-- End sidebar categories-->

      <h3 class="sidebar-title">Recent Posts</h3>
      <div class="sidebar-item recent-posts">
        <?php recent_post(); ?>
      </div><!-- End sidebar recent posts-->

      <h3 class="sidebar-title">Tags</h3>
      <div class="sidebar-item tags">
        <ul>
          <?php sm_tags(); ?>
        </ul>
      </div><!-- End sidebar tags-->

    </div><!-- End sidebar -->

