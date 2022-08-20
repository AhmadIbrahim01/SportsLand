<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<img src="images/Capture2.png" height=505px; style="float:left; margin-left:440px">

</body>
</html>


<?php





include 'connect.php';

    if(isset($_POST["btnticket1"]) && isset($_SESSION["xyz"]))
    {
        $id = $_POST["idticket1"];
        $stad = $_POST["stadticket1"];
        $price = $_POST["priceticket1"];
        $description = $_POST["descriptionticket1"];
        $image = $_POST["imageticket1"];
        $username = $_SESSION["xyz"];
        
        $insert_stmt = "INSERT INTO `ticketbought`(`id`, `stad`, `price`, `description`, `image`, `user_username`) VALUES ('$id', '$stad', '$price', '$description', '$image', '$username')"; 					

        mysqli_query($con, $insert_stmt);

        echo '<div class="text-center">
                    <h2>Your ticket is waiting for you!</h2>
                    <h4 class="">Items Purchased : Ticket '.$stad.'</h4>				
                    <h4>Price: '.$price.' $ </h4>			
                    <button id="button"><a href="index.php" class="button">Done</a></button>
                </div>';
                
    }
    else{
        echo "<a href='index.php' id='back'>
        Back
       </a>.<h1 id = 'guest'>Please login first to buy anything</h1>"."<img src='images/capture2.png' style='display:block; margin-left:auto; margin-right:auto;'>";
    };


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
background-color: #4caf50;
        }
        #back{
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: green;
    text-align: center;
    cursor: pointer;
    text-decoration: none;
    width: 98%;
    font-size: 18px;
   }
   #back:hover{
    background-color: black;
    color: green;   }
   

#guest{
    margin-top: 10px;
    padding: 7px;
    text-align: center;
    font-size: 60px;
    align-items: center;
    color:white;
    background-color: green;
}
#button {
    text-align: center;
    display: inline-block;
    font-size: 16px;
    position: relative;
    margin-left: 39%;
    margin-bottom: 20px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    text-decoration: none;

    background-color: green;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    width: 100px;
    opacity: 0.9;
}
        .text-center{
            background-color: #e2ddd3;
            text-align: center;
            margin-top: 150px;
            margin-right: 300px;
            margin-left: 500px;
            padding-top: 15px;
            border-radius: 1px;
            height: 490px;
            width: 700px;
        }
        h2{
            margin-top: 140px;
        }
    </style>
</head>
<body>
    
</body>
</html> 