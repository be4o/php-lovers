<?php include_once('includes/header.php');?>
<?php
		//check url for categories
		if(isset($_GET['cat'])){
				$posts = $db->select("select * from posts where category=".$_GET['cat']);
		}
		else {
			$posts = $db->select("select * from posts");
		}
?>
<?php if($posts):?>
<?php while($row = $posts->fetch_assoc()):?>
	<div class="blog-post">
			<h2 class="blog-post-title"><?=$row['title']?></h2>
			<p class="blog-post-meta"><?= dateFormat($row['date'])?> by <a href="#"><?=$row['auther']?></a></p>
			<p class="blog-post-body"><?=shortenText($row['body'])?></p>
			</div>
			<a class="btn btn-info" href="post.php?id=<?=urlencode($row['id'])?>">Read More</a>
	<?php endwhile;  ?>
<?php else : ?>
<h3>There's no posts to show in that category..</h3>
<?php endif;?>
				</div><!--End main col-->
<?php include_once('includes/footer.php');?>
