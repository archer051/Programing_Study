<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="./style.css">

  <link href="./bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="target">
  <div class="container">

    <header class="jumbotron text-center">
      <img src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩" class="img-circle"
        id="logo">
      <h1><a href="./index.php">JavaScript</a></h1>
    </header>
    <div class="row">

      <nav class="col-md-3">
        <ol class="nav nav-pills nav-stacked">
          <?php
          print_list($result);
          ?>
          </ ol>
      </nav>
      <div class="col-md-9">

        <article>
          <?php
          print_topic($conn);
          ?>
        </article>
        <hr>
        <div id="control">
          <div class="btn-group" role="group" aria-label="...">
            <input type="button" value="white" onclick="document.getElementById('target').className='white'"
              class="btn btn-default  btn-lg" />
            <input type="button" value="black" onclick="document.getElementById('target').className='black'"
              class="btn btn-default btn-lg" />
          </div>
          <a href="./write.php" class="btn btn-success  btn-lg">쓰기</a>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="./bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>

</html>