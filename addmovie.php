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
  <title>Add Movie</title>
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
                        <a class="nav-link" href="index.php">Movie List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="addmovie.php">Add Movie</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Add Movie Section -->
    <div class="container">
      <div class="row">
        <div class="col">
          <form action="addmovie.php" method="post">
            <div class="form-group">
              <label for="name">Movie Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-row">
              <div class="col">
                <label for="rating">Rating</label>
                <input type="number" name="rating" class="form-control">
              </div>
              
              <div class="col">
                <label for="date">Watch Date</label>
                <input type="date" name="date" id="date" class="form-control">
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="genre">Genre</label>
                <select class="form-control" name="genre">
                  <option value="" selected disabled></option>
                  <option value="Action">Action</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Animation">Animation</option>
                  <option value="Biography">Biography</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Crime">Crime</option>
                  <option value="Drama">Drama</option>
                  <option value="Horror">Horror</option>
                  <option value="Musical">Musical</option>
                  <option value="Mystery">Mystery</option>
                  <option value="Romance">Romance</option>
                  <option value="Sci-Fi">Sci-Fi</option>
                  <option value="Thriller">Thriller</option>
                </select>
              </div>
              <div class="col">
              <label for="mood">Mood</label>
                <select class="form-control" name="mood">
                  <option value="" selected disabled></option>
                  <option value="Feel-Good">Feel-Good</option>
                  <option value="Dark">Dark</option>
                  <option value="ThoughtFull">Thoughtfull</option>
                  <option value="Romantic">Romantic</option>
                  <option value="Depressed">Depressed</option>
                  <option value="Inspired">Inspired</option>
                  <option value="Fear">Fear</option>
                  <option value="Depressed">Depressed</option>
                  <option value="Family">Family</option>
                  <option value="Excited">Excited</option>
                  <option value="Confused">Confused</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="review">Write Your Review Here</label>
              <textarea name="review" id="review" rows="4" class="form-control" maxlength="280"></textarea>
            </div>
            <input type="button" class="btn btn-danger float-left" value="Delete Movie">
            <input type="submit" class="btn btn-success float-right" name="add" value="Add Movie">
          </form>
        </div>
      </div>
    </div>

    <?php
      if(isset($_POST['add'])){
        //Get the ALl Value
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $rating = mysqli_real_escape_string($conn,$_POST['rating']);
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        $genre = mysqli_real_escape_string($conn,$_POST['genre']);
        $mood = mysqli_real_escape_string($conn,$_POST['mood']);
        $review = mysqli_real_escape_string($conn,$_POST['review']);
        if(empty($name)|empty($rating)|empty($date)|empty($genre)|empty($mood)|empty($review)){
          echo "fill all the  field";
        }
        else{
          $sql = "Insert into Movie(name,rating,wdate,genre,mood,review) values ('$name',8,'$date','$genre','$mood','$review')";
          $result = mysqli_query($conn,$sql);
          if(!$result){
            echo "Cannot Insert ".mysqli_error($conn);
          }

        }
        
      }
     
    ?>
    


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    
  </script>
</body>

</html>