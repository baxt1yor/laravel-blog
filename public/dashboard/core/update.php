<?php include '../../app/connect.php'; ?>
<?php	 
	 if (isset($_GET['id'])) {
	 	$id = $_GET['id'];
	 	$query= $connect->prepare("UPDATE `xabarlar` SET `id`=?");
	 	$update = $query->execute([$id]);
	 }
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Form Component | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <link href="../css/daterangepicker.css" rel="stylesheet" />
  <link href="../css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="../css/bootstrap-colorpicker.css" rel="stylesheet" />
   <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
</head>

		<div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Basic Forms
              </header>
              <div class="panel-body">
                <form role="form" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">News</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="news">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Short</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="short_m">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Long</label>
                    <textarea class="form-control" name="long_m"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Rasmni yuklash</label>
                    <input type="file" id="exampleInputFile" name="img_link">
                    <p class="help-block">Rasm fayl tanlang (.png; .jpg; .jpeg)</p>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>
          </div>


  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../js/jquery.scrollTo.min.js"></script>
  <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="../js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="../js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="../js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="../js/jquery.hotkeys.js"></script>
  <script src="../js/bootstrap-wysiwyg.js"></script>
  <script src="../js/bootstrap-wysiwyg-custom.js"></script>
  <script src="../js/moment.js"></script>
  <script src="../js/bootstrap-colorpicker.js"></script>
  <script src="../js/daterangepicker.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="../js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="../js/scripts.js"></script>


</body>

</html>