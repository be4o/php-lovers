<?php include_once('includes/header.php');

$post = $db->select("select * from posts where id=".$_GET['id'])->fetch_assoc();
?>
	<div class="blog-post">
			<h2 class="blog-post-title"><?=$post['title']?></h2>
			<p class="blog-post-meta"><?= dateFormat($post['date'])?> by <a href="#"><?=$post['auther']?></a></p>
			<p class="blog-post-body"><?=$post['body']?></p>
			</div>

				</div><!--End main col-->
<?php include_once('includes/footer.php');?>
