<?php include "includes/header.php";?>





  



<!-- Page Content -->
    

            <!-- Blog Entries  -->
            <div >
<section id="field1">
     
                         
               
               
               <?php
    
    
    if(isset($_GET['p_id'])){
        
        $get_post_id = $_GET['p_id'];
    }
  
    
//    Fetching data from 'posts' table and dynamically applying to blog posts
    
                $query = "SELECT * FROM posts WHERE post_id = {$get_post_id}";
                $select_all_posts = mysqli_query($connection, $query);
    
    while($post_row = mysqli_fetch_assoc($select_all_posts)){
        $post_title = $post_row['post_title'];
        $post_author = $post_row['post_author'];
        $post_date = $post_row['post_date'];
        $post_content = $post_row['post_content'];
        
        ?>
        
        <h1 class="page-header">
                    
                    <small></small>
                </h1>

                <!-- Blog Posts -->
                <h2>
                    <p> <?php echo $post_title ?></p>
                </h2>
                <p class="lead">by: <?php echo $post_author ?>
                    
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <img class="img-post" src="images/road-with-yellow-lines_1112-907.jpg" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                
                <hr>
        
        
<!--    end the while loop      -->
  <?php  }  ?>
 
                <hr>

                
             </section>
            </div>
     
            <!-- Blog Sidebar  -->
<div>
<?php include "includes/sidebar.php"?>

   </div>        
<?php include "includes/footer.php";?> 


