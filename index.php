<!DOCTYPE html>
<html lang="en">
<?php include "config.php" ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>My Buzz</title>
</head>

<body>
  <!-- START HERE -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">MyBuzz</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Movie List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addmovie.php">Add Movie</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <!-- Movie List  -->
  <div class="container">
    <div class="row">
      <h2>All Your Movies Are Here...</h2>
    </div>
    <div class="row">
      

      
      <!-- Fetch the Movie Data -->
      <?php

        $sql = "SELECT * from Movie order by wdate desc";
        $result = mysqli_query($conn,$sql);

        while($res = mysqli_fetch_array($result)){
          echo "<div class=\"col-12\">\n";
          echo "            <div class=\"card\">\n";
          echo "              <div class=\"card-body\">            \n";
          echo "                <div class=\"row\">\n";
          echo "                <div class=\"col-2\">\n";
          echo "                  <h3> $res[rating]</h3>\n";
          echo "                </div>\n";
          echo "                <div class=\"col-7\">\n";
          echo "                  <h2>$res[name]</h2>\n";
          echo "                  <p>$res[review]</p>\n";
          echo "                </div>\n";
          echo "                <div class=\"col-2\">\n";
          echo "                  <p>$res[wdate]</p>\n";
          echo "                  <p>$res[genre]</p>\n";
          echo "                  <p>$res[mood]</p>\n";
          echo "                </div>\n";
          echo '<div class="col-1">';
          echo '<a class="btn btn-warning" href="addmovie.php?id='.$res['id'].'"><i class="fas fa-edit"></i></a>';
          echo '<a class="btn btn-danger" href="delete.php?id='.$res['id'].'"><i class="fas fa-trash-alt"></i></a>';
          echo '</div>';
          echo "              </div>\n";
          echo "              </div>\n";
          echo "            </div>\n";
          echo "          </div>";

        }
        

       ?>
      
    </div>
  </div>
  
    



  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>