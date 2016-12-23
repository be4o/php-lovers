<?php include_once('includes/header.php');?>
<?php	$posts = $db->select("select * from posts");?>

     <?php while($row = $posts->fetch_assoc()):?>
       <div class="blog-post">
  					<h2 class="blog-post-title"><?=$row['title']?></h2>
  					<p class="blog-post-meta"><?= dateFormat($row['date'])?> by <a href="#"><?=$row['author']?></a></p>
  					<p class="blog-post-body"><?=shortenText($row['body'])?></p>
  					</div>
  					<a class="btn btn-info" href="post.php?id=<?=urlencode($row['id'])?>">Read More</a>
  			<?php endwhile;  ?>
</div> <!--END main col-->

<?php include_once('includes/footer.php');?>
