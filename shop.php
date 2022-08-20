<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <style>
*{
    margin: 0 ;
    padding: 0  ;
    font-family: 'Times New Roman', Times, serif;
    font-size: 25px;
    
}
body{
    background-color: #eee;
    
}

/* Create two equal columns that floats next to each other */
.column1 {
  float: left;
  width: 33.33%;
  padding: 10px;
}
.column2 {
  float: left;
  width: 33.33%;
  padding: 10px;
  border-left: 6px solid green;


}
.column3 {
  float: left;
  width: 33.33%;
  padding: 10px;
  border-left: 6px solid green;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.menu{
    width: 100%;
    background-color:  #7ece16;
    color: white;
    height: 60px;
}
.menu #logo{
    float: left;
    height: 30px;
    padding: 19px 30px;
    font-size: 1.2em;
    line-height: 30px;
    font-weight: 700;
    font-style: oblique;
}
.menu #logo:hover{
    color: rgb(235, 167, 22);
}
.menu  ul{
    margin: 0;
    padding: 0;
    float: left;
    list-style: none;
}

.menu ul  li{
    float: left;
    
}
.menuItem{
    display: inline-block;
    padding: 21px 30px;
    height: 30px;
    text-decoration: none;
    color: #fff;
}
.menuItem:hover,.subDrop ul li:hover{
background-color:   rgb(235, 167, 22);
}
img{
    width: 100%;
    height: 500px;
}
.subContent{
    position: absolute;
    top: 60px;
    overflow: hidden;
    background-color:  rgb(235, 167, 22);
    max-height: 0;

}
.subContent a{
    color: white;
    text-decoration: none;
    
    
}
.subDrop ul{
    width: 100%;
    padding:0;
    margin: 0;
    list-style-type: none;


}
.subDrop ul li a{
    display: inline-block;
    padding: 10px 30px;
    margin-right:20px ;


}
.menu li:hover .subContent{

    max-height: 400px;
}

#rmenu{
    float: right;
}
#home{
    padding:15px;  ;

}
#home #homee{
    font-size: 50px;
    font-weight: bold;
    
}
 h1{
    float: left 100%;

    
}
#texttop{
    position: absolute;
    top: 90px;
    padding-top: 10%;
    padding-left: 35%;
    font-size: 40px;
    color:  #7ece16;
    text-decoration: orchid;
    font-weight: 700;

}
#texttop:hover{
    color:rgb(235, 167, 22);
}
.shopimages{
    width: 50%;
    height: 50%;
    margin-top: 5px;
    display: block;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    border-radius: 13px;
}


.divis{background-color: black;

}
.h1{
    color: rgb(5 205 21);
    padding: 15px;
    text-align: center;
    font-style: oblique;
    font-size: 40px;
}
.size{
    color: black;
    text-align: center;

}
.button {
    border: none;
    color: white;
    padding: 20PX 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    margin-left: 10px;
    opacity: 0.5;
    position: relative;
    margin-bottom: 20px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    border-radius: 8px;
    margin-left: 60px
}
    
    .button1 {background-color:  green;}
    
    .button1:hover{opacity:1;}
    .button2 {background-color:  green;
        margin-left: 40px;
}
    
    .button2:hover{opacity:1;}

.p{font-style: oblique;
text-align: center;}

.span{color:blanchedalmond;
    font-size: 1.2em;
    line-height: 30px;
    font-weight: 700;
    font-style: oblique;}

#href{color: white;
    text-decoration: none;}

    #li{color:blanchedalmond;
    text-decoration: none;}

    #aaa {font-size: 30px;
font-weight: bold;}

#session2{

background-color: blanchedalmond;

}
#welcome{
margin-left: 75%;
color: saddlebrown;
}
#aaa{
margin-left: 95%;
text-decoration: none;
color: lightslategray;
}

table{
  margin-top: 40px;
  margin-left: 20px;
  margin-bottom: 40px;
}
.imgbtn1{
  margin-right: 30px;
  margin-left: 50px;
    width: 100%;
    height: 300px;
}
.imgbtn2{
  margin-right: 20px;
  margin-left: 110px;
    width: 85%;
    height: 300px;
}
#small{
  background-color: rgb(218, 245, 218);}

  #all{
  margin-left: 10%;
  margin-right: 10%;
}  
.vl {
  margin-top: 575px;
  border-left: 6px solid green;
  height: 3300px;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 0;
}
</style>

</head>
<body>
<?php
include "header.php"
?>

<div id="top"><img width="100%"  src="images/shopbanner2.png" alt="img"></div>    
<div style="display:<?php if(isset($_SESSION["showAlert"]))
    {echo $_SESSION["showAlert"];} else { echo "none"; } unset($_SESSION["showAlert"])?>" class="alert">
    
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong><?php if(isset($_SESSION["message"])){echo $_SESSION["message"];} unset($_SESSION["showAlert"]);?></strong> 
    
</div>
<div class="row">
  <div class="column1">

  
  <?php
include 'connect.php';

$sql = "select store.id, store.name, store.size, store.price, store.description, store.image 
from store where store.type='shoes'";
if ($result = mysqli_query($con,$sql))
  {
   
  
   while($row =mysqli_fetch_assoc($result))
      {
        
          echo "
          <div id='all'>
        <form class='form' method='POST' action='cart.php'>
        
        <div ><img class='shopimages' src='shop/".$row['image']."'></div>
        <h1 class='h1'>".$row['name']."</h1>
        <h1 class='size'>".$row['size']."</h1>
        <div><p class='p' id='1'>".$row['price']."<span>$</span></p></div>
        <p class='p'>".$row['description']."</p>

        <input type='hidden' name='itemId' value=".$row['id']."><bt>
        <input type='hidden' name='itemName' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription' value=".$row['description']."><bt>
      
        <table>
        <tr>
          <td>
        <button type='submit' id='addItem'  name='btn1'  class='button button1' >Add </button>
        </td>
        </form>
        <td>
        <form method='POST' action='checkoutbuy.php' >
        <input type='hidden' name='itemId1' value=".$row['id']."><bt>
        <input type='hidden' name='itemName1' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice1' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage1' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription1' value=".$row['description']."><bt>
        <button type='submit' id='addItem'  name='buyBtn1'  class='button button2' >Buy </button>
        </form>
        </td>
        </tr>
      </table>

        
        <hr>
    </div>";
      }

   
  }
  


?>
 <!-- <div class="vl"></div>
-->

  </div>

  <div class="column2">

  <?php
include 'connect.php';

$sql = "select store.id, store.name, store.size, store.price, store.description, store.image 
from store where store.type='shoes1'";
if ($result = mysqli_query($con,$sql))
  {
   
  
   while($row =mysqli_fetch_assoc($result))
      {
        
          echo "
          <div id='all'>
        <form  class='form' method='POST' action='cart.php'>
        
        <div ><img class='shopimages' src='shop/".$row['image']."'></div>
        <h1 class='h1'>".$row['name']."</h1>
        <h1 class='size'>".$row['size']."</h1>
        <div><p class='p' id='1'>".$row['price']."<span>$</span></p></div>
        <p class='p'>".$row['description']."</p>

        <input type='hidden' name='itemId' value=".$row['id']."><bt>
        <input type='hidden' name='itemName' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription' value=".$row['description']."><bt>
      
        <table>
        <tr>
          <td>
        <button type='submit' id='addItem'  name='btn1'  class='button button1' >Add </button>
        </td>
        </form>
        <td>
        <form method='POST' action='checkoutbuy.php' onClick='return confirm('Are you sure you want to clear you cart?');' >
        <input type='hidden' name='itemId1' value=".$row['id']."><bt>
        <input type='hidden' name='itemName1' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice1' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage1' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription1' value=".$row['description']."><bt>
        <button type='submit' id='addItem'  name='buyBtn1'  class='button button2' >Buy </button>
        </form>
        </td>
        </tr>
      </table>

        
        <hr>
    </div>";
      }

   
  }
  


?>


  
  </div>
  <div class="column3">

  <?php
include 'connect.php';

$sql = "select store.id, store.name, store.size, store.price, store.description, store.image 
from store where store.type='shoes2'";
if ($result = mysqli_query($con,$sql))
  {
   
  
   while($row =mysqli_fetch_assoc($result))
      {
        
          echo "
          <div id='all'>
        <form  class='form' method='POST' action='cart.php'>
        
        <div ><img class='shopimages' src='shop/".$row['image']."'></div>
        <h1 class='h1'>".$row['name']."</h1>
        <h1 class='size'>".$row['size']."</h1>
        <div><p class='p' id='1'>".$row['price']."<span>$</span></p></div>
        <p class='p'>".$row['description']."</p>

        <input type='hidden' name='itemId' value=".$row['id']."><bt>
        <input type='hidden' name='itemName' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription' value=".$row['description']."><bt>
      
        <table>
        <tr>
          <td>
        <button type='submit' id='addItem'  name='btn1'  class='button button1' >Add </button>
        </td>
        </form>
        <td>
        <form method='POST' action='checkoutbuy.php' onClick='return confirm('Are you sure you want to clear you cart?');' >
        <input type='hidden' name='itemId1' value=".$row['id']."><bt>
        <input type='hidden' name='itemName1' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice1' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage1' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription1' value=".$row['description']."><bt>
        <button type='submit' id='addItem'  name='buyBtn1'  class='button button2' >Buy </button>
        </form>
        </td>
        </tr>
      </table>

        
        <hr>
    </div>";
      }

   
  }
  


?>


  
  </div>
</div>
<img src="images/shopbanner1.jpg">

<div class="row">
  <div class="column1">

  
  <?php
include 'connect.php';

$sql = "select store.id, store.name, store.size, store.price, store.description, store.image 
from store where store.type='t-shirt'";
if ($result = mysqli_query($con,$sql))
  {
   
  
   while($row =mysqli_fetch_assoc($result))
      {
        
          echo "
          <div id='all'>
        <form  class='form' method='POST' action='cart.php'>
        
        <div ><img class='shopimages' src='shop/".$row['image']."'></div>
        <h1 class='h1'>".$row['name']."</h1>
        <h1 class='size'>".$row['size']."</h1>
        <div><p class='p' id='1'>".$row['price']."<span>$</span></p></div>
        <p class='p'>".$row['description']."</p>

        <input type='hidden' name='itemId' value=".$row['id']."><bt>
        <input type='hidden' name='itemName' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription' value=".$row['description']."><bt>
      
        <table>
        <tr>
          <td>
        <button type='submit' id='addItem'  name='btn1'  class='button button1' >Add </button>
        </td>
        </form>
        <td>
        <form method='POST' action='checkoutbuy.php' onClick='return confirm('Are you sure you want to clear you cart?');' >
        <input type='hidden' name='itemId1' value=".$row['id']."><bt>
        <input type='hidden' name='itemName1' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize1' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice1' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage1' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription1' value=".$row['description']."><bt>
        <button type='submit' id='addItem'  name='buyBtn1'  class='button button2' >Buy </button>
        </form>
        </td>
        </tr>
      </table>

        
        <hr>
    </div>";
      }

   
  }
  


?>
 <!-- <div class="vl"></div>
-->

  </div>

  <div class="column2">

  <?php
include 'connect.php';

$sql = "select store.id, store.name, store.size, store.price, store.description, store.image 
from store where store.type='t-shirt1'";
if ($result = mysqli_query($con,$sql))
  {
   
  
   while($row =mysqli_fetch_assoc($result))
      {
        
          echo "
          <div id='all'>
        <form  class='form' method='POST' action='cart.php'>
        
        <div ><img class='shopimages' src='shop/".$row['image']."'></div>
        <h1 class='h1'>".$row['name']."</h1>
        <h1 class='size'>".$row['size']."</h1>
        <div><p class='p' id='1'>".$row['price']."<span>$</span></p></div>
        <p class='p'>".$row['description']."</p>

        <input type='hidden' name='itemId' value=".$row['id']."><bt>
        <input type='hidden' name='itemName' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription' value=".$row['description']."><bt>
      
        <table>
        <tr>
          <td>
        <button type='submit' id='addItem'  name='btn1'  class='button button1' >Add </button>
        </td>
        </form>
        <td>
        <form method='POST' action='checkoutbuy.php' onClick='return confirm('Are you sure you want to clear you cart?');' >
        <input type='hidden' name='itemId1' value=".$row['id']."><bt>
        <input type='hidden' name='itemName1' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize1' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice1' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage1' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription1' value=".$row['description']."><bt>
        <button type='submit' id='addItem'  name='buyBtn1'  class='button button2' >Buy </button>
        </form>
        </td>
        </tr>
      </table>

        
        <hr>
    </div>";
      }

   
  }
  


?>
  </div>
  <div class="column3">

  <?php
include 'connect.php';

$sql = "select store.id, store.name, store.size, store.price, store.description, store.image 
from store where store.type='t-shirt2'";
if ($result = mysqli_query($con,$sql))
  {
   
  
   while($row =mysqli_fetch_assoc($result))
      {
        
          echo "
          <div id='all'>
        <form  class='form' method='POST' action='cart.php'>
        
        <div ><img class='shopimages' src='shop/".$row['image']."'></div>
        <h1 class='h1'>".$row['name']."</h1>
        <h1 class='size'>".$row['size']."</h1>
        <div><p class='p' id='1'>".$row['price']."<span>$</span></p></div>
        <p class='p'>".$row['description']."</p>

        <input type='hidden' name='itemId' value=".$row['id']."><bt>
        <input type='hidden' name='itemName' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription' value=".$row['description']."><bt>
      
        <table>
        <tr>
          <td>
        <button type='submit' id='addItem'  name='btn1'  class='button button1' >Add </button>
        </td>
        </form>
        <td>
        <form method='POST' action='checkoutbuy.php' onClick='return confirm('Are you sure you want to clear you cart?');' >
        <input type='hidden' name='itemId1' value=".$row['id']."><bt>
        <input type='hidden' name='itemName1' value=".$row['name']."><bt>
        <input type='hidden' name='itemSize1' value=".$row['size']."><bt>
        <input type='hidden' name='itemPrice1' value=".$row['price']."><bt>
        <input type='hidden' name='itemImage1' value=".$row['image']."><bt>
        <input type='hidden' name='itemDescription1' value=".$row['description']."><bt>
        <button type='submit' id='addItem'  name='buyBtn1'  class='button button2' >Buy </button>
        </form>
        </td>
        </tr>
      </table>

        
        <hr>
    </div>";
      }

   
  }
  


?>

  
  </div>
</div>





</body>
</html>
<?php
include "footer.php"
?>