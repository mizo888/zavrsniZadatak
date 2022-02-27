<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
<!--    Java script code to add pop up for delete post-->
    
    <script language="javascript" type="text/javascript">

    function getConfirmation()
    {
        var retVal = confirm("Are you sure you want to delete this post ?");
        if (retVal == true)
        {
            
            return true;
        } 
        else
        {
            
            return false;
        }
    }
</script>
    
    
</head>
<body>
    
</body>
</html>
   


   
   
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Author</th>
            <th>Title</th>
            <th>Date</th>
            <th>Tags</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    
<!--       Selecting all from 'posts' table and aplying it to rows in our table-->
             
    <?php
        
        
        $query = "SELECT * FROM posts";
        $select_posts = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_posts)){
           $post_id = $row['post_id'];          
           $post_author = $row['post_author'];
           $post_title = $row['post_title'];
           $post_date = $row['post_date'];
           $post_tags = $row['post_tags'];
 

        
        echo "<tr>";
            echo "<td>{$post_id}</td>";
            echo "<td>{$post_author}</td>";
            echo "<td>{$post_title}</td>";
            echo "<td>{$post_date}</td>";
            echo "<td>{$post_tags}</td>";
            echo "<td><a href='postOptionsTable.php?source=edit_post&p_id={$post_id}'>edit</a></td>"; // echoing update button on each row so we can access update page
            echo "<td><a onclick=\"return getConfirmation();\" href='postOptionsTable.php?delete={$post_id}'>delete</a></td>"; // echoing delete button on each row. Using delete button will delete posts from database by id.
            
            
                        
        echo "</tr>";
      
        }
        
        ?>
   
</tbody>
    
</table>




<!--Deleting posts query-->

<?php
if(isset($_GET['delete'])){

    if(isset($_SESSION['password'])){
        
        if($_SESSION['role'] == 'admin'){      // stopping mysql injection unless user has admin role
    
    
    $post_delete = $_GET['delete'];
    
    $query = "DELETE FROM posts WHERE post_id = {$post_delete} ";
    $delete_query = mysqli_query($connection, $query);
    header("Location:postOptionsTable.php");

     
    }
    
    }
    
    
    }
?>





