<?php
// Start the session
session_start();
error_reporting(0);
$con= new mysqli("localhost","root","","sonet");
if(isset($_GET['uid']) && $_GET['action']=='del')
{
$userid=$_GET['uid'];
$query=mysqli_query($con,"delete from news where id='$userid'");
header('location:newsIndex.php');
}
?>

<!DOCTYPE html>
<head>
    

    <style>
        #livesearch{
          position: absolute;
          padding-left: 10px;
        }
    </style>
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

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <i class="icon-reorder shaded"></i>
        </a>

         <a class="brand" href="#">
            <img src="sonetlogo.svg" style="height: 40px;width: 100%">
          </a>
          
            
            <div class="nav-collapse collapse navbar-inverse-collapse">
        
          <ul class="nav pull-left">

            <li><a  class="active" href="newsIndex.php"> News</a></li>
            <li><a href="orders.php"> Orders</a></li>
            <li> <a href="feedback.php">Feedback</a></li>
        
          </ul>
        </div>

        <div class="nav-collapse collapse navbar-inverse-collapse">
        
          <ul class="nav pull-right">

            <li><a href="logout.php">
            
            Logout
            </a></li>

        
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

<div class="page-container">
  
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
       <div class="row" style="margin-top: 15px;margin-right: 10px">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 above_tables">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
                <div class="pull-left">
                    <!-- <div class="input-group ">
                        <input type="text" id="input1-group2" name="input1-group2" placeholder="search here" class="form-control" onkeyup=search()>
                        <div class="input-group-btn">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div> -->
                    <div id="livesearch"></div>
                </div></div>
            <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
                <div class="pull-right">
                    <a href="news.php" class="btn btn-primary">Add news</a>
                </div></div></div>

        </div>
      </div>
        <div class="col-md-12 table-responsive" style="margin-top: 25px">
            <table class="table table-responsive list_table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Actions</th>
                      
                  </tr>

                </thead>
                <tbody>
                   <tr>
                       <?php
                       if(isset($_GET['page']) && !empty($_GET['page'])){
                       $page = $_GET['page'];
                       }
                       else
                        $con= new mysqli("localhost","root","","sonet");
                           $page = 1;
                       $doc_query = "select * from news";
                       $total = mysqli_query($con,$doc_query);
                       $items_per_page = 10;
                       $total_links = ceil(mysqli_num_rows($total)/$items_per_page);
                       $offset = ($page-1) * $items_per_page;
                       $sql_command = "select * from news limit $items_per_page OFFSET $offset";
                       $list = mysqli_query($con,$sql_command);
                       while($row = mysqli_fetch_assoc($list)){
                           echo "<tr>";
                           echo "<td>".$row['id']."</td>";
                           echo "<td>".$row['name']."</td>";
                           echo "<td>".$row['title']."</td>";
                           echo "<td>".$row['description']."</td>";
                           echo "<td>".$row['dates']."</td>";
                          
                           echo "<td>"?>
                           <a class="btn btn-primary btn-sm" role="submit" href="edit.php?id=<?php echo $row['id']?>" ><i class="icon-edit">Edit</i></a>
                           <a class="btn btn-danger btn-sm " role="submit" href="newsIndex.php?uid=<?php echo htmlentities($row['id']);?>&&action=del" title="Delete" onClick="return confirm('Do you really want to delete the news ?')">
                                  <i class="icon-remove"></i>Delete</a>
                           
                            
                                
                         <?PHP       "</td>";
                           echo "</tr>";    

                       }
                       if(mysqli_num_rows($list)==0)
                       {
                           echo "<td colspan='7' style='align: center;'>"."has no value"."</td>";
                       }
                       mysqli_close($con);
                       ?>
                       <td></td>
                   </tr>
                </tbody>
            </table>
        <div class="col-md-12">
        <?php
        echo '<ul class="pagination center" >';
        for($i=1;$i<=$total_links;$i++){
             if($i == $page){
                 echo '<li><a class="active">'.$i.'</a></li>';
             }
             else
             {
                 echo '<li><a href="newsIndex.php?page='.$i.'">'.$i.'</a></li>';
             }
        }
        echo "</ul>";?>
      </div>
        </div>

    </div>
</div>

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