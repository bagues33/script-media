<?php
/**
 * Custom Search Form.
 */

?>
 <h3 class="sidebar-title">Search</h3>
<div class="sidebar-item search-form">
    <form role="search" method="get" action="<?php echo esc_url( home_url( '/blog' ) ); ?>">
      <input type="text" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'sm' ); ?>" value="<?php the_search_query(); ?>" name="s">
      <button type="submit"><i class="bi bi-search"></i><?php echo esc_attr_x( '', 'submit button', 'sm' ); ?></button>
    </form>
</div><!-- End sidebar search formn-->