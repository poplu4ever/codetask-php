<?php
//chekc if the id  exists
 if (isset($_GET["id"])){
     $selected_id = $_GET["id"];
//     echo $selected_id;
 }else{
     //set the default vale of selected_id;
     $selected_id=null;
 }

    $filename = '../includes/data.csv';
    $handle=fopen($filename,'rb+');
    $rows=[];
    while($row=fgetcsv($handle)){
        $rows[]=$row;
    }
//    print_r($rows);
?>

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
                <h3>You can see nothing here</h3>
            </div>
            <div id="page">
                <h2>Manage Content</h2>
                <p>I am a normal user</p>
                <a href='user_login.php'>Go to Login</a> 
            </div>
        </div>
	</body>
    <div id="footer">Powered by Neo Lu</div>
</html>
