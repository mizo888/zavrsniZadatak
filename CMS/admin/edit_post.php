<?php

//Query to get post p_id from viewAllPosts to be updated and edited

if(isset($_GET['p_id'])){
    
$get_post_id = $_GET['p_id'];
    
    
}

$query = "SELECT * FROM posts WHERE post_id = $get_post_id ";
        $select_posts_by_id = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_posts_by_id)){
           $post_id = $row['post_id'];          
           $post_author = $row['post_author'];
           $post_title = $row['post_title'];
           $post_date = $row['post_date'];
           $post_tags = $row['post_tags'];
           $post_content = $row['post_content'];

        }

if(isset($_POST['update_post'])){   // Changing values in edit post page
    
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
 
    
    $query = "UPDATE posts SET ";
    $query .= "post_title = '{$post_title}', ";
    $query .= "post_author = '{$post_author}', ";
    $query .= "post_tags = '{$post_tags}', ";
    $query .= "post_content = '{$post_content}' ";
    $query .= "WHERE post_id = '{$get_post_id}' ";
    
    $result = mysqli_query($connection, $query);
    
}

?>
 

<!-- Form for updating posts-->
 
 <div class="add_post_form">
  <form action="" method="post">
    
    <label for="title">Title</label>
    <input value="<?php echo $post_title; ?>" type="text" id="" name="title" placeholder="Title ..">

    <label for="author_name">Author</label>
    <input value="<?php echo $post_author; ?>" type="text" id="" name="author" placeholder="Author name ..">
    
    
    <label for="post_tags">Tags</label>
    <input value="<?php echo $post_tags; ?>" type="text" id="" name="post_tags" placeholder="Add tags.." name="post_tags">

    

    <label for="post_content">Content</label>
    <textarea id="" name="post_content" placeholder="Write .." style="height:200px" cols="30" rows="10">
<?php echo $post_content; ?>
    </textarea>

    <input  type="submit" value="Publish Post" name="update_post">
  </form>
</div>