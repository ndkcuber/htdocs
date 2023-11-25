<?php

include "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['q'])) {
  $searchTerm = filter_var($_GET['q'],FILTER_SANITIZE_SPECIAL_CHARS);

  // Get search query from form input
  if (isset($_GET['q'])) {
      $search_query = $_GET['q'];
  } else {
      $search_query = "";
  }

  // Define SQL query to retrieve search results
  $sql = "SELECT * FROM sach WHERE bookname LIKE '%" . $search_query . "%' LIMIT 3";

  // Execute SQL query
  $result = $con->query($sql);

  // Display search results
  $results = array();
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $item = array(
          'title' => $row['bookname']
        );
        array_push($results, $item);
      }
  } else {
      $results[] = array('title' => '');
  }

  // Close database connection
  $con->close();

  // Return the search results as JSON
  header('Content-Type: application/json');
  echo json_encode($results);
  exit;
}
?>