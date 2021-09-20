          <?php
session_start();
error_reporting(0);
$msg="";
if (isset($_POST['upload'])) {
  //$target="files/".basename($_FILES['image']['name']);
$con= new mysqli("localhost","root","","sonet");
 $number = count($_POST["name"]);
// $image=$_POST["image"]['name']
 
  for($i=0;$i < $number;$i++){

      $sql = "INSERT INTO news(name,title,description) VALUES('".mysqli_real_escape_string($con, $_POST["name"][$i])."','".mysqli_real_escape_string($con, $_POST["title"][$i])."','".mysqli_real_escape_string($con, $_POST["description"][$i])."')";
   
     if (mysqli_query($con, $sql)) {
        $msg="News Send Successfully";
      }

    //       mysqli_query($con, $sql);
    // if(move_uploaded_file($_FILES['image']['temp_name'], $target)){
    //     $msg="News Send Successfully";
    // }else 

    //   $msg="News Not Send Successfully";  

  }
}
?>
   

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>News</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="lib/jquery/jquery.min.js"></script>

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

     
</head>
<header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
           
            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/intro_4.jpg');"></div>
                <div class="carousel-caption">
                  
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/intro_5.jpg');"></div>
                <div class="carousel-caption">
                
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
<body>
  <?php
if($_SESSION["name"]) {
?>
  <form method="POST" action="news.php" name="news">
<div class="container-fluid" style="margin-top: 50px; padding-left: 40px;padding-right: 40px;">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">News/Event</h3>
  <div class="card-body">
    <div id="table" class="table-editable">

      <table class="table table-responsive-md table-striped " id="dynamic_field">
        <thead>
        	<tr><th colspan="3"><center> <label class="text-primary">Well come to News page.</label></center></th></tr>
                   
            
          <tr>
            <th class="text-primary">Name</th>
            <th class="text-primary">Title</th>
            <th class="text-primary">Description</th>
            
            <th></th>
            <th class="text-center"><input type="submit" class="table-add float-right mb-3 mr-2 text-primary btn btn-sm" name="add" class="btn btn-primary" value="ADD" id="add"></th></th>
          </tr>
        </thead>
        <tbody>
          <tr   class="item">
             <td class="pt-3-half">
              <div class="md-form mb-0">
                         <input type="text"  name="name[]" class="form-control " id="name" required="">      
                        </div>
            </td>
            <td class="pt-3-half">
              <div class="md-form mb-0">
                         <input type="text" size="40" name="title[]" class="form-control " id="title" required="">    
                        </div>
            </td>
            <td class="pt-3-half" >
              <div class="md-form mb-0">
                      <textarea class="form-control" rows="4" cols="50" name="description[]" id="description" required=""></textarea>    
                        </div>
            </td>
          <!--   <td class="pt-3-half">
              <div class="md-form ">
                              <input type="text" id="amount" name="amount[]" class="form-control" required>                      
                        </div>
            </td> -->
          </tr>
        </form>
        </tbody>
      </table>
      <div class="row">
                            <div class="col-sm-12" style="float: right;">
              <center><input type="submit" value="Send News" name="upload" class="btn btn-primary"></center>
                    <?php if ($msg != "") echo  '<div id="message" class="wow fadeOut" data-wow-delay="3s">'.$msg .'</div>'; ?>
             </div>
          </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script href="js/addons/datatables.min.js" rel="stylesheet"></script>
  <script href="js/addons/datatables-select.min.js" rel="stylesheet"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
  //THIS FUNCTION ADDS A NEW ROW WHEN ADD BUTTON IS PRESSED, IT ALSO DELETES FOR DELETE BUTTON AND SUBMITS THE COLLECTED DATA TO THE DATABASE FOR SUBMIT BUTTON           
      $(document).ready(function(){
        var postURL = "news.php";
        var i = 1;

        $('#add').click(function(){
          i++;
          $('#dynamic_field').append('<tr  id="row'+i+'" class="dynamic-added item"><td class="pt-3-half"><div class="md-form mb-0"> <input type="File"  name="image[]" class="form-control " id="image" required=""> </div></td><td class="pt-3-half"><div class="md-form mb-0"><input type="text"  name="title[]" class="form-control " id="title" required=""></div> </td> <td class="pt-3-half" > <div class="md-form mb-0"><textarea class="form-control" rows="4" cols="50" name="description[]" id="description" required=""></textarea>  </div> </td> <td><span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0 btn_remove" id="'+i+'">Remove</button></span></td></tr>');
        });
      
//FUNCTION ENDS HERE

//THIS FUNCTION ADDS A DELETE BUTTON FOR EACH DYNAMIC ROW ADDED BY THE ADD BUTTON        
$(document).on('click','.btn_remove', function(){
          var button_id = $(this).attr("id");
          $('#row'+button_id+'').remove();
        });
          
          $('#submit').click(function(){
            $.ajax({     
              url:postURL,
              method:"POST",    
              data:$('#news').serialize(),
              type:'json',    
              success:function(data)
              {
                   i=1;
                   $('.dynamic-added').remove();
                   $('#news')[0].reset();
                   alert(data);   
                   
              }   
            });
          }); 
      });
</script>
<div class="footer">
    <div class="container">
       

      <b class="copyright">&copy; 2020 Sonet Information Technology </b> All rights reserved.
    </div>
  </div>
  <?php
} else echo "<h1>Please login first .</h1>";
?>

</body>
</html>
</body>
</html>