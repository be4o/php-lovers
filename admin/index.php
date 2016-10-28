<?php include_once("includes/header.php");?>
<?php
 $posts = $db->select("select posts.*,categories.name from posts inner join categories on posts.category=categories.id order by title");
 $cats = $db->select("select * from categories");
?>


<div class="col-sm-12  blog-main">
  <div class="msg">
    <?=$_GET['msg']?>
  </div>
  <table class="table table-striped">
    <tr>
      <th>Post ID#</th>
      <th>Post Title</th>
      <th>Category</th>
      <th>Author</th>
      <th>Date</th>
    </tr>
    <?php while($row = $posts->fetch_assoc()):?>
    <tr>
      <td><?=$row['id']?></td>
      <td><a href="edit_post.php?id=<?=urlencode($row['id'])?>"><?=$row['title']?></a></td>
      <td><?=$row['name']?></td>
      <td><?=$row['author']?></td>
      <td><?=dateFormat($row['date'])?></td>
    </tr>
  <?php endwhile;?>
  </table>
  <table class="table table-striped">
    <tr>
      <th>Category ID#</th>
      <th>Name</th>
    </tr>
    <?php while($rowc = $cats->fetch_assoc()):?>
    <tr>
      <td><?=$rowc['id']?></td>
      <td><a href="edit_cat.php?id=<?=urlencode($rowc['id'])?>"><?=$rowc['name']?></td>
    </tr>
    <?php endwhile;?>
  </table>
</div><!--End row-->
</div>
<?php include_once("includes/footer.php");?>
