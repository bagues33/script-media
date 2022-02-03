<?php
/**
 * Template for entry meta
 *
 * @package Aquila
 */

?>

 <!--  <div class="entry-meta">
        <ul>
          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
          <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
        </ul>
      </div>
 -->
<div class="entry-meta">
 <ul>
    <li class="d-flex align-items-center"><i class="bi bi-person"></i><?php sm_posted_by(); ?></li>
    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><?php 	sm_posted_on(); ?></li>
 </ul>
</div>
