<?php include "includes/admin_header.php";?>
<?php 
//include "../includes/db.php";
?>  

<?php
   
//Query to add new posts into my table
   if(isset($_POST['create_post'])) {
   
       
       
            $post_title = $_POST['title'];
            $post_author = $_POST['author'];
            $post_tags = $_POST['post_tags'];
            $post_content = $_POST['post_content'];
            $post_date = date('d-m-y');

       
       $query = "INSERT INTO posts(post_title, post_author, post_date, post_tags, post_content) ";
       $query .= "VALUES('{$post_title}','{$post_author}',now(),'{$post_tags}','{$post_content}' ) ";

       $create_post_query = mysqli_query($connection, $query);
       
       
   }

?>






<div class="add_post_form">
  <form action="" method="post">
    
    <label for="title">Title</label>
    <input type="text" id="fname" name="title" placeholder="Title ..">

    <label for="author_name">Author</label>
    <input type="text" id="lname" name="author" placeholder="Author name ..">
    
    
    <label for="post_tags">Tags</label>
    <input type="text" id="lname" name="post_tags" placeholder="Add tags.." name="post_tags">

    

    <label for="post_content">Content</label>
    <textarea id="" name="post_content" placeholder="Write .." style="height:200px" cols="30" rows="10"></textarea>

    <input type="submit" value="Publish Post" name="create_post">
  </form>
</div>












