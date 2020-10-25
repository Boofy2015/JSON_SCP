<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">




        

        <title> SCP Index - SCP Foundation </title>

    </head>

    <body class=" bg-light text-dark" >
        
        

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" >SCP Foundation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    
    <button type="button" onclick="TextToSpeech()" class="btn btn-info" style="margin-left: 1%;"> Text To Speech </button>
    

    


        </ul>

     </div>
    </nav>

    
    
    <?php $files = json_decode(file_get_contents('scp_files.json')) ?>

    <br><br>
    

    <?php foreach($files as $display): ?>
    <main  class ='container-md' style='max-width:1300px;'>
      
    <h1 id="text"> Name: <?php echo $display->name; ?> </h1>
    <h2> Class: <?php echo $display->class; ?> </h2>
    <p><img src='<?php echo $display->image; ?>' style='width: 50%; max-width:100%; display: block; margin-left: auto; margin-right: auto;'></p>
    <h3> Containment </h3> <p> <?php echo $display->containment; ?> </p>
    <h3> Description </h3> <p> <?php echo $display->description; ?> </p>
    
    <h4> <?php echo $display->h1; ?> </h4> 
    <p> <?php echo $display->p1; ?> </p>
    
    <h4> <?php echo $display->h2; ?> </h4> 
    <p> <?php echo $display->p2; ?> </p>
    
    <h4> <?php echo $display->h3; ?> </h4> 
    <p> <?php echo $display->p3; ?> </p>
    
    <h4> <?php echo $display->h4; ?> </h4> 
    <p> <?php echo $display->p4; ?> </p>
    
    <h4> <?php echo $display->h5; ?> </h4> 
    <p> <?php echo $display->p5; ?> </p>
    
    </main>    
    <div style='margin-bottom: 10%;'></div>
    
    <?php endforeach; ?>


 

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="speech.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    </body>

</html>