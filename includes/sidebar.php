<div class="col-md-4">

    <?php
        // isset function to check that 'submit' cell in $_POST is populated
        if (isset($_POST['submit']))
        {
            // if so, echo whatever is in 'search' cell of $_POST array
            echo $search = $_POST['search'];
        }

    ?>
    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <!-- form action="" directs url
        method="" sets which arrays are being used -->
        <form action="" method="post">
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
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>