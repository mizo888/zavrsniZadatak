
<?php

//Select all from categories table
function selectAllCategories(){
    
    global $connection;
    $query = "SELECT * FROM categories";
    $select_all_cat = mysqli_query($connection, $query);
    
    while($cat_row = mysqli_fetch_assoc($select_all_cat)){
        $cat_title = $cat_row['cat_title'];
        
        echo "<li><a href='#'>{$cat_title}</a></li>";
        
    }
}


//Checking if the user role is admin, if not, redirecting to index page

function checkingSession(){
    
    global $connection;
    if(isset($_SESSION['password'])){
    
    if($_SESSION['role'] != 'admin'){
        
        header("Location: ../index.php ");
    }
    }  
    else if(!isset($_SESSION['password'])){  // used for not allowing un-logged users to access admin page
        header("Location: ../index.php ");
        
    }       
}








?>