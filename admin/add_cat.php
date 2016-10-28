<?php include_once("includes/header.php");?>

<?php
  if(isset($_POST['submit'])){
    //get values from form entries
    $name = mysqli_real_escape_string($db->link, $_POST['name']);

    //Validate Form entries

    //add query
    $msg = $db->insert("insert into categories(name) values('$name')");
  }
 ?>

<form role="form" method="post" action="add_cat.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category Name"/>
  </div>
  <button type="submit" class="btn btn-default" name="submit" >Submit</button>
  <a class="btn btn-default" href="index.php">Cancel</a>
<form/>
<?php include_once("includes/footer.php");?>
