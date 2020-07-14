<?php
function db_init($host, $duser, $dpw, $dname)
{
  $conn = mysqli_connect($host, $duser, $dpw);
  mysqli_select_db($conn, $dname);
  return $conn;
}

function db_conn($host, $duser, $dpw, $dname)
{
  $conn = new mysqli($host, $duser, $dpw);
  if ($conn->connect_errno) {
    echo "Fail to Connect Mysql: " . $conn->connect_errno;
    exit();
  }
  $conn->select_db($dname);
  return $conn;
}

function print_list($result)
{
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<li><a href="./index.php?id=' . $row['id'] . '">' . htmlspecialchars($row['title']) . '</a></li>' . "\n";
    }
  }
}

function print_topic($conn)
{
  if (empty($_GET['id']) === false) {
    $sql =
      "SELECT topic.id
                    ,title
                    ,name
                    ,description 
            FROM topic 
            LEFT JOIN user ON topic.author = user.id 
            WHERE topic.id=" . $_GET['id'];
    $result = $conn->query($sql);
    // mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    // mysqli_fetch_assoc($result);
    echo '<h2>' . htmlspecialchars($row['title']) . '</h2>';
    echo '<p>' . htmlspecialchars($row['name']) . '</p>';
    echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
  }
}