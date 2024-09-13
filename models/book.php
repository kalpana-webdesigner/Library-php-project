<?php

include_once('../config/config.php');
include_once('../config/database.php');


//validation for formfields : add-books
function storeBook($conn, $pram)
{
  extract($pram);
  //validation start
  if (empty($title)) {
    $result =  ['error' => "Title is required"];
    return  $result;
  } else if (empty($isbn_no)) {
    $result = ['error' => 'Isbn no is required'];
    return $result;
  } else if (isIsbnUnique($conn, $isbn_no)) {
    $result = ['error' => 'Isbn is already register'];
    return $result;
  } else if (empty($publication_year)) {
    $result = ['error' => 'Filed is required'];
    return $result;
  } else if (empty($category_id)) {
    $result = ['error' => 'Please select the category'];
    return $result;
  } elseif (empty($author)) {
    $result = ['error' => 'Author Name is required'];
    return $result;
  }

  /*Validation end*/

  $sql = "INSERT INTO books(title, isbn_no, publication_year, category_id, author)
  VALUES ('$title','$isbn_no', '$publication_year',
  '$category_id','$author')";

  $res['successMessage'] = $conn->query($sql);
  return $res;
}

/*function for get the books data*/
function getBookData($conn)
{
  $sql = "SELECT b.*, c.name AS cat_name
            FROM books b
            LEFT JOIN categories c ON c.id = b.category_id
            ORDER BY b.id DESC";
  $result = $conn->query($sql);
  return $result;
}


//Book update function : validation 
function updateBook($conn, $pram)
{
  extract($pram);
  //validation start
  if (empty($title)) {
    $result =  ['error' => "Title is required"];
    return  $result;
  } else if (empty($isbn_no)) {
    $result = ['error' => 'Isbn no is required'];
    return $result;
  } else if (isIsbnUnique($conn, $isbn_no, $id)) {
    $result = ['error' => 'Isbn is already register'];
    return $result;
  } else if (empty($publication_year)) {
    $result = ['error' => 'Filed is required'];
    return $result;
  } else if (empty($category_id)) {
    $result = ['error' => 'Please select the category'];
    return $result;
  } elseif (empty($author)) {
    $result = ['error' => 'Author Name is required'];
    return $result;
  }

  /*Validation end*/

  $sql = "UPDATE books SET 
  title = '$title',
  isbn_no = '$isbn_no', 
  publication_year = '$publication_year',
  category_id = '$category_id',
  author = '$author'
  WHERE id = $id";

  $res['successMessage'] = $conn->query($sql);
  return $res;
} //validation end 

//get update book id
function getBookupdateId($conn, $id)
{
  $sql = "SELECT * FROM books Where id = $id";
  $result = $conn->query($sql);
  return $result;
}

// Function to update status
function status_update($conn, $id, $status)
{
  $sql = "UPDATE books SET status = '$status' WHERE id = $id";
  $result = $conn->query($sql);
  return $result;
}

//function for delete the books data
function deleteBooks($conn, $id)
{
  $sql = "DELETE FROM books where id = $id";
  $result = $conn->query($sql);
  return $result;
}
// Function to check isbn no
function isIsbnUnique($conn, $isbn_no, $id = NULL)
{
  $sql = "select id from books where isbn_no = '$isbn_no'";
  if ($id) {
    $sql .= " and id != $id";
  }
  $result = $conn->query($sql);
  if ($result->num_rows() > 0)
    return true;
  else return false;
}
// Function to get the categories from DB
function getCategories($conn)
{
  $sql = "SELECT id, name FROM categories";
  $result = $conn->query($sql);
  return $result;
}
