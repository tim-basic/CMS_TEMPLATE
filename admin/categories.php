<!-- started as a copy of index -->

<?php include "includes/header.php"; ?>

    <div id="wrapper">

<?php include "includes/navigation.php"; ?>

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

                    <form action="">
                        <label for="cat-title">Add category</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="cat_title">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-info" type="submit" name="submit" value="Add Category">
                        </div>
                    </form>

                    </div>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php require_once "includes/footer.php"; ?>