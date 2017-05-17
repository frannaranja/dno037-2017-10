<?php include('header.php');?>
<section>
<h2>Blog</h2>
<?php
$blog = array_map('str_getcsv', file('url'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
?>
<hr>
<h4>post_title</h4>
<p>post_excerpt</p>
<p>vínculo al <a href="post.php">post_content</a></p>
<p>post_data</p>
</section>
<?php include('footer.php');?>
