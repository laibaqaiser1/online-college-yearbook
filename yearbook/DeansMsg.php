<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>
                University of Engineering and Techlogy ,Lahore
            </title>
            <link href="images/uetlogo.png" rel="icon" type="image/png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="style/event.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
<?php
if(isset($_POST["submit"])) 
{
    $Msg = $_POST["DeansMessage"];
    $fh = fopen( 'DeansMsg.txt', 'w' );
    $fp = fopen('DeansMsg.txt', 'a');
    fwrite($fp, $Msg);
    echo "successfully added";
    fclose($fp);

}
?>
            <nav class="navbar navbar-expand-md sticky-top navbar-dark "id="customColour">
                    <div class="navbar-brand" id="textColor">
                            
                            <h5 class="h5">
                                 <img src="images/uetlogo.png" width="40vh">
                             UET Lahore Yearbook
                            </h5> 
                    </div>
                         <div class="collapse navbar-collapse">
                         <ul class="navbar-nav ml-auto" >
                         <li class="nav-item" >
                                            <a href="Admin.html" class="nav-link" id="textColor">Home</a>
                                        </li>
                                        <li class="nav-item" >
                                            <a href="Home.php" class="nav-link" id="textColor">Logout</a>
                                        </li>
                                </ul>  
                         </div>                               
            </nav>
                 
            <form method="post" id="addevent">
            <div class="form-group"id="form">
                    <label for="DeansMessage">Dean's Message</label>
                    <input type="text" class="form-control" id=event name="DeansMessage" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
            </body>
            </html>            