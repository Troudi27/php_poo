<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Index</title>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron">
          <h1 class="text-center">Liste des etudiants</h1>  
        </div>
            <table class="table">
                <tr>
                    <th><a href="add.php" class="btn btn-primary">Add</a></th>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                <?php
                    include 'create.class.php';
                    $student = new students;
                    $listetu =$student->readAllSt();
                    while($data = $listetu->fetch())
                    {
                ?>

                         <tr>
                         <td></td>
                         <td><?=$data['ID']?></td>
                         <td><?=$data['firstname']?></td>
                         <td><?=$data['lastname']?></td>
                         <td><?=$data['email']?></td>
                         <td><?=$data['phone']?></td>
                         
            
                        <td>
                            <a href="edit.php?id=<?php echo $data['ID'];?>" class="btn btn-primary">Edite</a>
                            <a href="delete.php?id=<?php echo $data['ID'];?>" class="btn btn-primary">Delete</a>

                        </td>
                        </tr>
                        
                        <?php
                        }
                        ?>
            </table>
            
            
    </div>
</body>
</html>