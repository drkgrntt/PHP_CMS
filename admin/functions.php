<?php

// ==========================
//         CATEGORIES        
// ==========================
  function createCategory() {
    global $connection;

    if (isset($_POST['submit'])) {
      $title = $_POST['cat_title'];

      if ($title == '' || empty($title)) {
        echo "<em>This field should not be empty.</em>";
      } else {
        $query = "INSERT INTO categories(cat_title) ";
        $query .= "VALUE('{$title}')";
        $create_category_query = mysqli_query($connection, $query);

        if (!$create_category_query) {
          die(mysqli_error($connection));
        }
      }
    }
  }

  function fetchAllCategories() {
    global $connection;

    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_categories)) {
      $id = $row['cat_id'];
      $title = $row['cat_title'];

      echo '<tr>
              <td>'.$id.'</td>
              <td>'.$title.'</td>
              <td><a href="categories.php?update='.$id.'">Edit</a></td>
              <td><a href="categories.php?delete='.$id.'">Delete</a></td>
            </tr>';
    }
  }

  function fetchCategory() {
    global $connection;
    global $cat_id;

    $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
    $select_cat_id = mysqli_query($connection, $query);
    
    while ($row = mysqli_fetch_assoc($select_cat_id)) {
      $title = $row['cat_title'];

      if (isset($title)) {
        echo '<input 
                class="form-control" 
                type="text" 
                name="cat_title" 
                value="'.$title.'"
              >';
      }
    }
  }

  function updateCategory() {
    global $connection;
    global $cat_id;

    if (isset($_POST['update'])) {
      $updated_title = $_POST['cat_title'];

      if ($updated_title == '' || empty($updated_title)) {
        echo "<em>This field should not be empty.</em>";
      } else {
        $query = "UPDATE categories SET cat_title = '{$updated_title}' ";
        $query .= "WHERE cat_id = {$cat_id} ";
        $update_query = mysqli_query($connection, $query);
        header("Location: categories.php");

        if (!$update_query) {
          die(mysqli_error($connection));
        }
      }
    }
  }

  function deleteCategory() {
    global $connection;

    if (isset($_GET['delete'])) {
      $deleted_id = $_GET['delete'];
      $query = "DELETE FROM categories WHERE cat_id = {$deleted_id}";
      $delete_query = mysqli_query($connection, $query);
      header("Location: categories.php");
    }
  }

// ==========================
//           POSTS        
// ==========================
  function fetchAllPosts() {
    global $connection;

    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts)) {
      $id = $row['post_id'];
      $author = $row['post_author'];
      $title = $row['post_title'];
      $category_id = $row['post_category_id'];
      $status = $row['post_status'];
      $image = $row['post_image'];
      $tags = $row['post_tags'];
      $comment_count = $row['post_comment_count'];
      $date = $row['post_date'];

      echo '<tr>
              <td>'.$id.'</td>
              <td>'.$author.'</td>
              <td>'.$title.'</td>
              <td>'.$category_id.'</td>
              <td>'.$status.'</td>
              <td>'.$image.'</td>
              <td>'.$tags.'</td>
              <td>'.$comment_count.'</td>
              <td>'.$date.'</td>
              <td><a href="porsts.php?update='.$id.'">Edit</a></td>
              <td><a href="porsts.php?delete='.$id.'">Delete</a></td>
            </tr>';
    }
  }
?>
