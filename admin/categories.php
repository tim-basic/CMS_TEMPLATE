<!-- started as a copy of index -->

<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

<?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>

                    <div class="col-xs-6">


                        <!-- code to chuck things into categories database -->
                        <?php
                        require_once "functions.php";
                        insert_categories();
                        ?>




                        <form action="#" method="post">
                            <label for="cat-title">Add category</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-info" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>


                        <?php // update
                        if (isset($_GET['update']))
                            $cat_id = $_GET['update'];
                            include "includes/update_categories.php";
                        ?>



                    </div>
                    <div class="col-xs-6">

                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled">


                                </ul>
                            </div>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                // See categories
                                // loads
                                findAllCategories();

                                delete_category();

                                ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php require_once "includes/admin_footer.php"; ?>