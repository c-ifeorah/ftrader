<!-- 
Description:  User profile page of the site where a user can view and edit his details including avator / profile picture
Author:  Michael Ifeorah
 -->

<?php
include_once('signon/session.php');
include_once('signon/user-details.php');
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Trading Strategy Analysis Tool User Profile Page.">
    <meta name="author" content="Michael Ifeorah">
    <title>Strategy Analyser - User Profile</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/strat-analyze.css" rel="stylesheet">
    <link href="css/trade-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="fa/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/trade-admin.js"></script>
    <!-- jQuery validate plugin -->
    <script src="js/jquery.validate.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
    <!-- Confirm Password -->
    <script src="js/confirm-pass.js"></script>
</head>
<body>
<?php
    //  Refresh the page after  user details update
    if (isset($_GET["status"])) {
        header("refresh:8; url=user-profile.php");
    }
?>
    <div id="main_wrapper">
        <!--  Navigation -->
        <?php include('tmpl/nav.php');  ?>
        <!-- /.Line breaking -->
        <div><br></div>
        <!--  Page body -->
        <?php include('tmpl/body_wrapper/bdy_user-profile.php');  ?>
        <!--  Footer -->
        <?php include('tmpl/footer.php');  ?>
    </div>
    <!-- /main_wrapper -->
</body>
</html>