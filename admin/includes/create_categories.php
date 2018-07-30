<?php
  createCategory();
?>
<form action="categories.php" method="post">
  <div class="form-group">
    <label for="cat_title">Add Category</label>
    <input class="form-control" type="text" name="cat_title" placeholder="Category">
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
  </div>
</form>
