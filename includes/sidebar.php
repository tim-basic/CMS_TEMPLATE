<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <!-- form action="" directs url
        method="" sets which arrays are being used -->
        <form action="search.php" method="post">
            <!-- not sure what this does -->
            <div class="input-group">
                <!-- input name="" sets name of cell in $_POST[] (post method array)-->
                <input name="search" type="text" class="form-control">
                <!-- not sure what span class ="" does -->
                <span class="input-group-btn">
                    <!-- $_POST['submit] set, boolean YES/NO response set by type="submit" -->
                    <button name="submit" class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form><!--search form-->
        <!-- /.input-group -->
    </div>


    <!-- Blog Categories Well -->
    <div class="well">

        <?php

        $query = "SELECT * FROM categories";
        $select_categories_sidebar = mysqli_query($connection, $query);


        ?>




        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">

                    <?php
                    while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                        $cat_title = $row['cat_title'];
                        echo "<li><a href='#'>{$cat_title}</a></li>";
                    }
                    ?>
                </ul>
            </div>

            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <?php include "widget.php"; ?>
</div>
