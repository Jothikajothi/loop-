<?php  
for ($i=1; $i<=10;$i++) {
    echo $i  ."<br>";
}
echo "<hr>";
echo "<hr>";
$tables=4;
for ($j=1;$j<=10;$j++){
    echo $tables ."x".$j."=".$tables*$j ."<br>";
}
echo "<hr>";
echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> for loop/card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
    .card{
       color:  white; 
       text-align: center;
    }
    .card-header {
        background-color:darkmagenta;
    
    }
    .card-body {
        background-color: hotpink;
    }
</style>
</head>
<body>
<div class="container ">
    <div class="row mt-2">
        <?php
        for ($o=1;$o<=12;$o++){ 
        ?>
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-header">card-header <?php echo$o ?></h4>
                </div>
                <div class="card-body">
                    <p>card body <?php echo$o?></p>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>
 
 
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

