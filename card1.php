 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>card ///  loop </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

 <style>
    .card-header {
        background-color:palevioletred;
    }
    .card {
        background-color: burlywood;
        color:  black;
    }
     
 </style>
</head>
 <body>
 <div class="container text-center">
    <div class="row justify-content-center my-4">
        <?php 
        for ($l=1;$l<=5;$l++){ 
        ?>
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-header">
                    <h4>class <?php echo$l?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php 
                        for($k=1;$k<=3;$k++){ 
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4>section  <?php echo$k?></h4>
                                </div>
                                <div class="card-body">
                                    <ol>
                                        <?php 
                                        for ($i=1;$i<=10;$i++){
                                            ?>
                                        <li>student <?php  echo $i?></li>
                                        <?php }?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <?php }?>
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