<?php  require_once('../includes/session.php'); ?>

<?php
//chekc if the id  exists
 if (isset($_GET["id"])){
     $selected_id = $_GET["id"];
     echo $selected_id;
 }else{
     //set the default vale of selected_id;
     $selected_id = null;
 }

    $filename = '../includes/data.csv';
    $handle=fopen($filename,'rb+');
    $rows=[];
    while($row=fgetcsv($handle)){
        $rows[]=$row;
    }
//        print_r($rows);
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
                <ul class='title'>
                    
                    <?php
                    //open data from data.csv
                        $filename = '../includes/data.csv';
                        $handle=fopen($filename,'rb+');
                         while($row=fgetcsv($handle)){
                    ?>
                    <li>
                    <!-- inject the id into the url -->
                       <a href="manage_pages.php?id=<?php
                             //output the title of the page
                             echo $row[0]; 
                        ?>"><?php echo $row[1]; } ?></a>
                    </li>
                </ul> 
                <br />
                <a href="new_pages.php">Add New Pages</a>
            </div>
            <div id="page">
                
                <?php echo pageMessage()?>
                <h2>Manage Content</h2>
                <?php
                    foreach($rows as $line){
                        if($line[0] == $selected_id){
                            echo "<h2>{$line[1]}</h2>";
                            echo $line[2];
                        }
                    //break the reference in the last element
                    unset ($line);    
                    }
                ?>
                
                <a href="admin.php">Go Back</a>
                
            </div>
        </div>
	</body>
    <div id="footer">Powered by Neo Lu</div>
</html>
