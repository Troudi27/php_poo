<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>EDIT</title>
</head>
<body>
    
<?php
    include 'create.class.php';
    $student = new students;
    $listetu =$student->readAllSt();
    $data=$listetu->fetch();
    ?>



    <div class="container py-3">
        
            <div class="jumbotron">
          <h1 class="text-center">Modify Student</h1>  
            </div>
            <form action="update.php" method="post">
            <div class="form-group">
              <label> firstname</label>
              <input type="text" name="firstname"   class="form-control" value="<?= $data['firstname'] ?>">
            </div>

            <div class="form-group">
              <label> firstname</label>
              <input type="text" name="lastname"   class="form-control" value="<?= $data['lastname'] ?>">
            </div>

            <div class="form-group">
              <label> firstname</label>
              <input type="text" name="email"   class="form-control" value="<?= $data['email'] ?>">
            </div>

            <div class="form-group">
              <label> firstname</label>
              <input type="text" name="phone"   class="form-control" value="<?= $data['phone'] ?>">
            </div>

                <input type="number" name="id" id='id' value="<?=$_GET['id']?>" hidden>

                <center><button type="submit" class="btn btn-outline-success">Change</button></center>
            </form>
        
    </div>
</body>
</html>