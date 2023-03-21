<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <div class="row my-2">
        <?php 
                        for ($j=1;$j<=5;$j++){ 
                        ?>
            <div class="col-md-6 my-2 ">
            <div class="card">
                <div class="card-header">
                    <h4>Class <?php echo $j; ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">


                        <?php 
                        for ($i=1;$i<=3;$i++){ 
                        ?>
                        <div class="col-md-4">
                          
                            <div class="card">
                                <div class="card-header">
                                    <h4>section <?php echo $i; ?></h4>
                                </div>
                                <div class="card-body">
                                    <ol>
                                        <?php 
                                        for ($k=1;$k<=10;$k++){ 
                                        ?>
                                        <li> student <?php echo $k ?></li>
                                        <?php }?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <?php  }?> 
                    </div>
                </div>
            </div>
         </div>
         <?php }?>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>