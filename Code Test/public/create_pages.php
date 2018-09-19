<?php include_once("../includes/functions.php"); ?>
<?php echo $_POST; ?>
<?php session_start(); ?>

<?php
    
    function checkTitle($title){
        
        $filename = '../includes/data.csv';
        $handle=fopen($filename,'ab+');
        $rows=[];
        while($row=fgetcsv($handle)){
            $rows[]=$row; //create a new dynamic to store new page info
        }
        
        if($title){ //check if title exsits
            foreach( $rows as $line){
                if($title === $line[1]){ //check whether the title has been used
                    $_SESSION['titleInfo']="Page title already exists";
                    return false;
                    exit();
                }
            }
        }else {return false; }
        
        return true;
    }

    
    if(isset($_POST['submit']) && checkTitle($_POST['pageTitle'])){
        //process the new page info
        $id = $_POST['position'];
        $title = $_POST['pageTitle'];
        $content = $_POST['pageContent'];
        //write the data into the file
        $newPage=[$id,$title,$content];
        fputcsv($handle,$newPage);
        fclose($handle);
        
        $_SESSION["pageMessage"] = "Page Created Successfully";
        redirect_to('manage_pages.php');
        
    }else{
        
        $_SESSION["pageMessage"] = "Page Created Failed";
        redirect_to('new_pages.php');
    }

?>