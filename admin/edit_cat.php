<?php include_once("includes/header.php");?>
<?php

  if(isset($_GET['id'])){
    $cat = $db->select("select * from categories where id=".$_GET['id'])->fetch_assoc();
  }
  //Update category
  if(isset($_POST['submit'])){
    //Validate
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $id=$_GET['id'];
    $db->update("update categories set name='$name' where id=$id");
  }
  //Delete Button
  $id = $_GET['id'];
  if(isset($_POST['delete'])){
    //echo "delete from categories where id=$id";
    $msg = $db->delete("delete from categories where id=$id");
  }
 ?>

<form role="form" method="post" action="edit_cat.php?id=<?=$id?>">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category Name" value="<?=$cat['name']?>"/>
  </div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
  <a class="btn btn-default" href="index.php">Cancel</a>
  <input type="submit" name="delete" class="btn btn-default" value="Delete"/>
<form/>
<?php include_once("includes/footer.php");?>
