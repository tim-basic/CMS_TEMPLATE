<?php
require_once('includes/db.php');
require_once('includes/header.php');

?>

<!-- Navigation -->
<?php
    require_once('includes/navigation.php');
?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php

            // isset function to check that 'submit' cell in $_POST is populated
            if (isset($_POST['submit']))
            {
                $search = $_POST['search'];

                // set query to find posts with post tags with $search somewhere in the string
                $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
                // search the query
                $search_query = mysqli_query($connection, $query);

                //check that the search_query went through
                if(!$search_query)
                {
                    // kill program and display the mysqli error message
                    die("QUERY FAILED" . mysqli_error($connection));
                }

                $count = mysqli_num_rows($search_query);

                if ($count == 0)
                {
                    // if count of rows = 0, returned by mysqli_num_rows()
                    echo "<h1>NO RESULT</h1>";
                }else
                {

                    while ($row = mysqli_fetch_assoc($search_query))
                    {
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                        $post_tags = $row['post_tags'];
                        $post_comment_count= $row['post_comment_count'];

            ?>

                        <h1 class="page-header">
                            Page Heading
                            <small>Secondary Text</small>
                        </h1>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?php echo $post_title ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $post_author ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo "$post_image" ?>" alt="">
                        <hr>
                        <p> <?php echo $post_content ?> </p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
             <?php      }

                }

            } ?>
             </div>


        <!-- Blog Sidebar Widgets Column -->
       <?php require_once('includes/sidebar.php'); ?>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>