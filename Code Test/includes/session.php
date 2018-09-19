<?php

session_start();

function titleInfo(){
    if(isset($_SESSION['titleInfo'])){
        $output ="<div class=\"message\">";
        $output .= htmlentities($_SESSION['titleInfo']);
        $output .= "</div>";
        
        
        $_SESSION['titleInfo'] = null;

        return $output;
    }    
}

function pageMessage(){
    if(isset($_SESSION['pageMessage'])){
        $output ="<div class=\"message\">";
        $output .= htmlentities($_SESSION['pageMessage']);
        $output .= "</div>";
        
        
        $_SESSION['pageMessage'] = null;

        return $output;
    }    
}

?>