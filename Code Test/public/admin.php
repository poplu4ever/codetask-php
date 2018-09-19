<?php require_once('../includes/functions.php');?>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Test Code</title>
        <link href="../stylesheet/style.css" media="all" rel="stylesheet" type="text/css"/>
	</head>
	<body>
        <div id="header">
            <h1> Code Task</h1>
            
        </div>
        <div id="main">
            <div id="navigation">
                <h3>Hide</h3>    
            </div>
            <div id="page">
                <h2>Admin Menu</h2>
                
                <?php 
                
//                if($_SESSION['username']){
//                    echo "<p>Welcome to the admin area {$_SESSION['username']}</p>";
//                    
//                }else{
//                    echo "<p>Welcome to the admin area.</p>";
//                }
    
                ?>                
                <ul>
                    <li><a href="manage_pages.php">Manage Website Pages</a></li>
                    <li><a href="user_logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
	</body>
    <div id="footer">Powered by Neo Lu</div>
</html>
