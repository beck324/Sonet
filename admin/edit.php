<?php
session_start();
error_reporting(0);
$con= new mysqli("localhost","root","","sonet");
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $title=$_POST['title'];
  $description=$_POST['description'];
  $id=intval($_GET['id']);
$sql=mysqli_query($con,"update news set name='$name',title='$title',description='$description' where id='$id'");
$_SESSION['msg']="News info Updated !!";

}

?>
<!DOCTYPE html>
<head>
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'> 
</head>
<body>
    
<?php
if($_SESSION["name"]) {
?>
<div class="wrapper" style="padding-left: 250px">
    <div class="container" style="text-align: center;">
      <div class="row">
     
      <div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h3>News / Events</h3>
              </div>
              <div class="module-body">

                  <?php if(isset($_POST['submit']))
{?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                  </div>
<?php } ?>


                  <br />

      <form class="form-horizontal row-fluid" name="Category" method="post" >
<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from news where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>                  
<div class="control-group">
<label class="control-label" for="basicinput">Name :</label>
<div class="controls">
<input type="text" placeholder="Enter person Name"  name="name" value="<?php echo  htmlentities($row['name']);?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Title :</label>
<div class="controls">
<input type="text" placeholder="Enter news title "  name="title" value="<?php echo  htmlentities($row['title']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
                      <label class="control-label" for="basicinput">Description :</label>
                      <div class="controls">
<textarea class="span8" name="description" rows="5"><?php echo  htmlentities($row['description']);?></textarea></div>
                    </div>
                  <?php } ?>  

  <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="submit" class="btn btn-primary ">Update News</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>


            

            
            
          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->
  <div class="footer">
    <div class="container">
       

      <b class="copyright">&copy; 2020 Sonet Information Technology </b> All rights reserved.
    </div>
  </div>
  <?php
} else echo "<h1>Please login first .</h1>";
?>
</body>
<?php include("js.php");?>
</html>
