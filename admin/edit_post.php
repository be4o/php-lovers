<?php include_once("includes/header.php");?>
<?php
  $id = $_GET['id'];
  $post = $db->select("select * from posts where id=$id")->fetch_assoc();
  $cats = $db->select("select * from categories");
 ?>
<?php
  //Update a post
  if(isset($_POST['submit'])){
    //get values from form entries
    $category = mysqli_real_escape_string($db->link,$_POST['category']);
    $title = mysqli_real_escape_string($db->link,$_POST['title']);
    $body = mysqli_real_escape_string($db->link,$_POST['body']);
    $author = mysqli_real_escape_string($db->link,$_POST['author']);
    $tags = mysqli_real_escape_string($db->link,$_POST['tags']);

    //Validate Form entries

    //add query
    $msg = $db->update("update posts set category=$category, title='$title', body='$body', author='$author', tags='$tags' where id=$id");
  }


  ///Delete Post
  if(isset($_POST['delete'])){
    //Show a message to Ensure that...

    ///Call Delete Function
    $db->delete("delete from posts where id=$id");
  }
 ?>
<form role="form" method="post" action="edit_post.php?id=<?=$id?>">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?=$post['title']?>"/>
  </div>
  <div class="form-group">
    <label>Post Body</label>
    <textarea rows="10" name="body"  class="form-control" placeholder="Enter Post Body"><?=$post['body']?></textarea>
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
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?=$post['author']?>"/>
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input name="Tags" type="text" class="form-control" placeholder="Enter Tags" value="<?=$post['tags']?>"/>
  </div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
  <a class="btn btn-default" href="index.php">Cancel</a>
  <input class="btn btn-default" name="delete" type="submit" value="Delete"/>
<form/>
<?php include_once("includes/footer.php");?>
