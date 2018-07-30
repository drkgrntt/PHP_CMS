<?php include "includes/admin_header.php"; ?>

<div id="wrapper">

  <!-- Navigation -->
  <?php include "includes/admin_navigation.php"; ?>
  <div id="page-wrapper">
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Admin View
            <small>Author</small>
          </h1>

          <!-- Category Form -->
          <div class="col-xs-6">

            <?php
              // CHOOSE 'CREATE' OR 'UPDATE' FORM
              if (isset($_GET['update'])) {
                $cat_id = $_GET['update'];

                include "includes/update_categories.php";
              } else {
                include "includes/create_categories.php";
              }
            ?>

          </div>
          <div class="col-xs-6">
            <table class="table table-bordered table-hover">

              <thead>
                <th>ID</th>
                <th>Categories</th>
              </thead>

              <tbody>

                <?php
                  // RENDER CATEGORY TABLE
                  fetchAllCategories();
                  // DELETE LOGIC
                  deleteCategory();
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

<?php include "includes/admin_footer.php"; ?>
