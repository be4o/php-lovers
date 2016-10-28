<?php
include_once("includes/header.php");
  $cats = $db->select("select * from categories");
?>
<?php
if(isset($_POST['submit'])){
  //get values from form entries
  $category = mysqli_real_escape_string($db->link,$_POST['category']);
  $title = mysqli_real_escape_string($db->link,$_POST['title']);
  $body = mysqli_real_escape_string($db->link,$_POST['body']);
  $author = mysqli_real_escape_string($db->link,$_POST['author']);
  $tags = mysqli_real_escape_string($db->link,$_POST['tags']);

  //Validate Form entries

  //add query
  $msg = $db->insert("insert into posts(category,title,body,author,tags) values($category, '$title', '$body', '$author', '$tags')");
}
 ?>

<form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title"/>
  </div>
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body"  class="form-control" placeholder="Enter Post Body"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
      <?php while($row = $cats->fetch_assoc()):?>
      <option value="<?=$row['id']?>" <?php if($post['category'] == $row['id']) echo "selected"; ?>><?=$row['name']?></option>
      <?php endwhile;?>
    </select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name"/>
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input name="Tags" type="text" class="form-control" placeholder="Enter Tags"/>
  </div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
  <a class="btn btn-default" href="index.php">Cancel</a>
<form/>
<?php include_once("includes/footer.php");?>
