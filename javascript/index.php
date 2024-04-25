<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>javascript</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <style>
    body{
      background-color:black;
    }
  nav {
    background-color: #333;
    padding: 10px 0;
  }
  
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
  }
  
  li {
    display: inline;
    margin: 0 10px;
  }
  
  a {
    color: white;
    text-decoration: none;
  }
</style>
</head>
<body>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Menu</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <ul>
      <h1><li><a href="#" onclick="showAddForm()">Add Book</a></li>
      <li><a href="#" onclick="showSearchForm()">Search by Author</a></li></h1>
</ul>

  <div id="addForm" style="display:none;">
    <h2>Add Book</h2>
    <form id="addBookForm" action="add_book.php" method="post">
      Title: <input type="text" name="title"><br>
      Author: <input type="text" name="author"><br>
      <input type="submit" value="Add Book">
    </form>
  </div>

  <div id="searchForm" style="display:none;">
    <h2>Search by Author</h2>
    <form id="searchBookForm" action="search_book.php" method="post">
      Author: <input type="text" name="search_author"><br>
      <input type="submit" value="Search">
    </form>
  </div>
</body>
</html>
