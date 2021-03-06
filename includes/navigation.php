<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/cms">CMS Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php
          $query = "SELECT * FROM categories";
          $select_all_categories = mysqli_query($connection, $query);

          while ($category = mysqli_fetch_assoc($select_all_categories)) {
            $title = $category['cat_title'];
            $id = $category['cat_id'];

            echo "<li key={$id}><a href='#'>{$title}</a></li>";
          }
        ?>
        <li key="admin"><a href='admin'>Admin</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->

  </div>
  <!-- /.container -->

</nav>
