<?php
session_start();
 include("header.php"); 
session_destroy();
?>
<section id="page">
<header id="pageheader" class="homeheader">
</header>

<section id="contents">

<article class="post">
<header class="postheader">
<h2><a href="#">Logged Out Successfully</a>...</h2>
<p class="postinfo">&nbsp;</p>
</header>
<p>
  <article class="post">
    <footer class="postfooter"></footer>
  </article>
</p>
</article>
<div class="blog-nav"></div>
</section>
<div class="clear"></div>

<div class="clear"></div>
</section>
</div>
<?php include("footer.php"); ?>