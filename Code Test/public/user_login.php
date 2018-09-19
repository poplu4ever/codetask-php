<?php require_once('../includes/functions.php');?>
<?php require_once('../includes/session.php');?>
<?php session_start();?>

<?php
// comapre the username and password 
// if they are match, switch to admin page
if(isset($_POST['login'])){
    if($_POST['username'] === $_POST['password']){
        
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    
    redirect_to('admin.php');
    } 
}else{
    //can send a notification
    $_SESSION['username']=null;
    $_SESSION['password']=null;
    
    redirect_to('user_login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
    
<body>
    <div class="content">
        <form class="login-table" name="login" id="login-form" action="user_login.php" method="post">
             <p>Page Title:
		          <input type="text" name="username" value="" />
             </p>
                  
            <p>Page Content:
		          <input type="textarea" name="password" value="" />
		    </p>
            <div class="login-btn">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>   
</body>
<div id="footer">Powered by Neo Lu</div>

    
    
</html>