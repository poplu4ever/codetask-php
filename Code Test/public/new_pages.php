<?php  include_once('../includes/session.php'); ?>
<?php  echo $_SESSION['titleInfo'];?>

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
    //create a dynamic array to store page data
    $rows=[];
    while($row=fgetcsv($handle)){
        $rows[]=$row;
    }
//    print_r($rows);
//    echo count($rows);

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
            </div>
            <div id="page">
                
                <?php echo titleInfo(); ?>
                <?php echo pageMessage(); ?>

             	<h2>Add New Pages</h2>

		      <form action="create_pages.php" method="post">
		          <p>Page Title:
		              <input type="text" name="pageTitle" value="" />
		          </p>
                  
                  <p>Page Content:
		              <input type="textarea" name="pageContent" value="" />
		          </p>
                  
                   <p>Position:
		              <select name="position">
				        <?php
                            $count = count($rows)+1;
//                            for($i=1;$i<=($count+1);$i++){                            
//                                echo "<option value=\"{$i}\">{$i}</option>";
//                            }
                            //can only select the latest position as the id 
                            echo "<option value=\"{$count}\">{$count}</option>";
                        ?>
		              </select>
		          </p>

                  <input type="submit" name="submit" value="Create Pages" />
		      </form>
		      <br />
		      <a href="manage_pages.php">Cancel</a>
            </div>
        </div>
	</body>
    <div id="footer">Powered by Neo Lu</div>
</html>
