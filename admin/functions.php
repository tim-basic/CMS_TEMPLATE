<?php

// refactored code

function insert_categories(){
    // requires global connectino
    global $connection;

    if(isset($_POST['submit'])){
        $cat_title = $_POST['cat_title'];
        if (empty($cat_title)){
            // if field is empty
            echo "You have entered an empty field!!";
        } else {
            // store query to insert category
            $query = "INSERT INTO categories(cat_title)";
            $query .= "VALUE('{$cat_title}')";

            // store query result
            $create_category_query = mysqli_query($connection, $query);

            // if nothing in query
            if (!$create_category_query){
                // kill process and display error message
                die('QUERY FAILED: ' . mysqli_error($connection));
            }

        }
    }
}

function findAllCategories()
{
    global $connection;
    // SENDS QUERY TO RETURN DATABASE VALUES
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);

    while (
    $row = mysqli_fetch_assoc($select_categories)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<td>$cat_id</td>";
        echo "<td>$cat_title</td>";
        echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?update={$cat_id}'>Update</a></td>";
        echo "<tr>";
    }
}

function delete_category(){
    global $connection;

    // Delete function for categories
    // check if there is entry for delete
    if (isset($_GET['delete'])){
        // store cat_id sent across and set query
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
        //delete query and reload page with header()
        $delete_category_query = mysqli_query($connection, $query);
        header("Location: categories.php");
    }
}
?>