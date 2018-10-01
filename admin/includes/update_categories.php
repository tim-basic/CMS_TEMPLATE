 <?php
    // **UPDATE STUFF**

    // checks if there is anything in $_GET['update']
    if (isset($_GET['update'])) {

        // cat_id is found in ?
        $cat_id = $_GET['update'];
        // loads $query to Select all from categories
        // where cat_id is equal to the value above
        $query = "SELECT * FROM categories WHERE cat_id = $cat_id";

        // loads var with with what?
        $select_categories = mysqli_query($connection, $query);

        // while loop to fetch cat_id cat_title from database
        // $row becomes an associative array with fetch_assoc()
        while ($row = mysqli_fetch_assoc($select_categories)) {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            ?>
            <form action="" method="post">
            <label for="cat-title">Update category</label>
            <!-- html is printing to the page inside this while loop -->
            <input value="<?php if (isset($cat_title)) echo $cat_title; ?>" type="text"
                   class="form-control" name="cat_title">

            <div class="form-group">
            </div>

            <div class="form-group">
                <input class="btn btn-info" type="submit" name="update_category" value="Update category">
            </div>
            </form>
        <?php }
    }
    //update mysql
    if (isset($_POST['update_category'])) {
        // store cat_id sent across and set query
        $the_cat_title = $_POST['cat_title'];
        $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id}";
        //UPDATE query and reload page with header()
        $update_query = mysqli_query($connection, $query);
        if (!$update_query){
            die("Fatal Error " . mysqli_error($connection));
        }

    }


    ?>



