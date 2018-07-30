<form action="" method="post">
  <div class="form-group">
    <label for="cat_title">Update Category</label>

    <?php
      // FETCH CATEGORY TO UPDATE
      fetchCategory();
      // UPDATE LOGIC
      updateCategory();
    ?>

  </div>
  <div class="form-group">
    <input 
      class="btn btn-primary" 
      type="submit" 
      name="update" 
      value="Update Category"
    >
  </div>
</form>
