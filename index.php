<?php
session_start();
include("includes/db.php");

include("functions/functions.php");
  ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMT Medical Store</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
  
 
</head>
<body>

<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="index.php" class="logo" > <img src="website/all/log2.png" alt="Logo image" class="hidden-xs">  </a>
                               
<div class="col-md-6 offer">
    <a href="#" class="btn btn-sucess btn-sm">
          <?php

        if (!isset($_SESSION['customer_email'])){
        echo "Welcome Guest";
      }else{
      echo "Welcome: " .$_SESSION['customer_email'] . "";
    }


        ?>
    </a>
<a id="pr" href="#"> Shopping Cart Total Price: ₹ <?php totalPrice(); ?>, Total Items <?php item(); ?></a>
</div>
  
</div>

<div class="header-2">
   

<nav class="navbar"> 


     <ul >
        <li>
            
            <li><a class="active" href="index.php">HOME</a></li>
             
            <li><a href="trimer.php">SHOP</a></li>
            <li><a href="#arrival">Pain Relief</a></li>
            <li><a href="#parlor">Allergies</a></li>
            <li><a href="#garment">Body Lotions</a></li>
            <li><a href="#use">Antiepileptics</a></li>
            <li><a href="#garments">Vitamis</a></li>
            <li><a href="contactus.php">Contact</a></li>
            <li><a href="#footer">ABOUT</a></li>
 
       <div class="col-md-6">
        <ul class="menu">
            <li>
                         <div class="collapse clearfix" id="search">
                             <form class="navbar-form" method="get" action="result.php">
                                 <div class="input-group">
                                     <input type="text" name="user_query" placeholder="search" class="form-control" required="">
                                     <button type="submit" value="search" name="search" class="btn btn-primary">
                                         <i class="fa fa-search"></i>
                                     </button>
                                 </div>
                             </form>
                         </div>
                   </li>



                <li>
                  <a href="cart.php" class="">
                    <i class="fa fa-shopping-cart"></i>
                      <span><?php item(); ?> items in cart</span>
                        </a>
                </li>
                   

                   <li>
                   <a  href="customer_registration.php"><i class="fa fa-user-plus"></i>Register</a></li>
                   <li>
                    <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>My Account</a>";

                         } else{
                    
                    echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                
                         }

                    ?>
                   </li> 

                   <li>
                   <a href="cart.php"><i class="fa fa-shopping-cart"></i>Goto Cart</a></li>
                    
                   <li>
                     <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";

                         } else{
                    
                    echo "<a href='logout.php'>Logout</a>";
                
                         }

                    ?></li>
             </ul>
       </div>
</ul>
    
    
           
    
       
    
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

<h1 class="heading"> <span>BEST OFFERS FOR YOU</span> </h1>

<div class="slideshow-container">
<!-- dynamic hairstyle images section starts  -->

<?php
$get_slider="select * from slider LIMIT 0,1";
$run_slider= mysqli_query($con,$get_slider);
while ($row= mysqli_fetch_array($run_slider)) {
  $slider_name= $row['slider_name'];
  $slider_image= $row['slider_image'];
   $slider_url= $row['slider_url'];

  echo "<div class='mySlides fade'>
  <a href='$slider_url'><img src='admin_area/slider_images/$slider_image'  width='1400' height='400'></a>

</div>
  ";
}

    ?>
<?php
$get_slider="select * from slider LIMIT 1,10";
$run_slider= mysqli_query($con,$get_slider);
while ($row= mysqli_fetch_array($run_slider)) {
  $slider_name= $row['slider_name'];
  $slider_image= $row['slider_image'];
   $slider_url= $row['slider_url'];
  echo "<div class='mySlides fade '>
  <a href='$slider_url'><img src='admin_area/slider_images/$slider_image' width='1400' height='400'></a>
        </div>";
}

    ?>


<!-- dynamic hairstyle images section End  -->

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div  style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  

</div>



</section>




<!-- home section ends -->
<!-- new this week section start -->
<!-- hot start -->

<div class="hot">    
    <div class="box">
        <div class="container">
            <div class="col-md-121">
                <h2>Latest this Week</h2>
           
          <!-- dynamic latest this week images section start  -->
          <div class=" col-sm-4" >
          <div class="row">
                   <?php

                   getPro();


                     ?>
 </div>
</div><!-- hot End -->
 </div>
         </div>
    </div>
</div>
          <!-- dynamic latest this week images section End  -->


                   
      


<!-- new this week section End -->


<!--saloon product section starts  -->

<!-- Trimer Start  -->
<section class="arrival" id="arrival">

<h1 class="heading"> <span>Pain Relief</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=22"> <img src="website/all/hydro_cream.jpeg"  alt="" width="350"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=22"><h3>Cream</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=23">  <img src="website/all/Pseudoephedrine (Sudafed).jpeg" alt="" width="250" ></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=23">  <h3>Pseudoephedrine (Sudafed) </h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=24"> <img src="website/all/Omeprazole (Prilosec).jpeg" alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=24"> <h3>Omeprazole (Prilosec)</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=25"><img src="website/all/Ranitidine (Zantac).jpeg" alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=25"><h3>Ranitidine (Zantac)</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=26"> <img src="website/all/Loperamide (Imodium).jpeg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=26"><h3>Loperamide (Imodium)</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=27"> <img src="website/all/Amoxicillin.jpeg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=27"><h3>Amoxicillin</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=28"> <img src="website/all/Azithromycin.jpeg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=28"><h3>Azithromycin</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=29"> <img src="website/all/Fluconazole.png"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=29"><h3>Fluconazole</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=30"> <img src="website/all/Clotrimazole.jpeg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=30"><h3>Clotrimazole</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=31"> <img src="website/all/Metformin.jpeg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=31"><h3>Metformin</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=32"> <img src="website/all/Atorvastatin.jpeg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=32"><h3>Atorvastatin</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=33"> <img src="website/all/Hydrocortisone cream.jpeg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=33"><h3>Hydrocortisone cream            </h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=34"> <img src="website/all/Bacitracin.jpeg"  alt=""></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=34"><h3>Bacitracin</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=35"> <img src="website/all/Cough syrup (Dextromethorphan).jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=35"><h3>Cough syrup (Dextromethorphan)            </h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=36"> <img src="website/all/Probiotic supplements.jpeg"  alt=""width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=36"><h3>Probiotic supplements</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=37"> <img src="website/all/Naproxen.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=37"><h3>Naproxen</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

    </div>
</section>

<!-- saloon products section ends -->
<!-- parlor products section starts -->

<section class="parlor" id="parlor">

<h1 class="heading"> <span>Allergies</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=38"> <img src="website/all/Cetirizine (Zyrtec).jpeg"  alt="" width="300"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=38"><h3>Cetirizine (Zyrtec)            </h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=39">  <img src="website/all/Guaifenesin (Mucinex).jpeg" alt="" width="250"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=39">  <h3>Guaifenesin (Mucinex)</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=40"> <img src="website/all/Miconazole (Monistat).jpeg" alt="" width="300"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=40"> <h3>Miconazole (Monistat)            </h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=41"><img src="website/all/Dexamethasone.jpeg" alt=""width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=41"><h3>Dexamethasone</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=42"> <img src="website/all/Prednisone.jpeg"  alt=""width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=42"><h3>Prednisonee</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=43"> <img src="website/all/Furosemide (Lasix).jpeg"  alt=""width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=43"><h3>Furosemide (Lasix)</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=44"> <img src="website/all/Levothyroxine.jpeg"  alt=""width="330"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=44"><h3>Levothyroxine</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>


    </div>
</section>
<!-- parlor products section ends -->
<!-- garment products section start -->
<section class="garment" id="garment">

<h1 class="heading"> <span>Body Lotions</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=45"> <img src="website/all/Vaseline Intensive Care Body Lotion.jpeg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=45"><h3>Vaseline Lotion</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=46">  <img src="website/all/Lotus Herbals Almond Nourish Body Lotion.jpeg" alt="" width="250"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=46">  <h3>Lotus Lotion</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=47"> <img src="website/all/Dove Nourishing Body Care Lotion.jpeg" alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=47"> <h3>Dove Nourishing Body Care Lotion</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=48"><img src="website/all/Palmer's Olive Oil Formula Body Lotion.jpeg" alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=48"><h3>Palmer's  Body LotioN</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>


    </div>
</section>

<section class="use" id="use">

<h1 class="heading"> <span> Anticonvulsants/ Antiepileptics</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=49"> <img src="website/all/Carbamazepine.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=49"><h3>Carbamazepine</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=50">  <img src="website/all/Diazepam.jpeg" alt="" width="200"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=50">  <h3>Diazepam</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=51"> <img src="website/all/Sodium Valproate.jpeg" alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=51"> <h3>Sodium Valproate</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=52"><img src="website/all/Lorazepam.jpeg" alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=52"><h3>Lorazepam </h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=53"> <img src="website/all/Phenytoin Sodium.png"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=53"><h3>Phenytoin Sodium</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=54"> <img src="website/all/Phenobarbitone.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=54"><h3>Phenobarbitone </h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=55"> <img src="website/all/Magnesium sulphate.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=55"><h3>Magnesium sulphate</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=56"> <img src="website/all/anticonvulsant.jpeg"  alt="" width="300"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=56"><h3>anticonvulsant</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=57"> <img src="website/all/Albendazole.jpeg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=57"><h3>Albendazole</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=58"> <img src="website/all/Cephalexin.jpeg"  alt=""  height="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=58"><h3>Cephalexin</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=59"> <img src="website/all/Ampicillin.jpeg"  alt="" width="200"> </a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=59"><h3>Ampicillin</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=60"> <img src="website/all/Cefixime.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=60"><h3>Cefixime</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=61"> <img src="website/all/Hydrochloride.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=61"><h3>Hydrochloride</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=62"> <img src="website/all/Niacin.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=62"><h3>Niacin            </h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

     <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=63"> <img src="website/all/Chondroitin.jpeg"  alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=63"><h3>Chondroitin</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>

    </div>
</section>


<!-- gallery section ends -->




<!-- Vitamis starts -->
<section class="garment" id="garment">

<h1 class="heading"> <span>Vitamis</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=45"> <img src="website/all/vitamic c.jpeg"  alt="" width="250"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=45"><h3>Vitamin D3</h3></a>
            
        </div>
        <div class="overlay">
          
        </div>
    </div>
<!-- Trimer End  -->
    
    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=46">  <img src="website/all/vitamin.jpeg" alt="" width="250"></a>
        </div>
        <div class="info">
          <a href="trimer.php?p_cat=46">  <h3>Vitamin C</h3></a>
           
        </div>
        <div class="overlay">
        
        </div>
    </div>

    <div class="box">
        <div class="image">
           <a href="trimer.php?p_cat=47"> <img src="website/all/Omega 3.jpeg" alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=47"> <h3>Omega 3</h3></a>
           
        </div>
        <div class="overlay">
    </div>
</div>

    <div class="box">
        <div class="image">
            <a href="trimer.php?p_cat=48"><img src="website/all/Calcium.jpeg" alt="" width="200"></a>
        </div>
        <div class="info">
            <a href="trimer.php?p_cat=48"><h3>Calcium</h3></a>
        
        </div>
        <div class="overlay">
    </div>
    </div>


    </div>
</section>
<!-- vitamis ends -->

<!-- deal section starts  -->



<!-- deal section ends -->

<!-- newsletter section starts  -->



<!-- newsletter section ends -->

<!-- footer section starts  -->

<!-- footer section starts  -->



  <footer class="footer" id="footer">
     <div class="cuntainer">
        <div class="wolf">
           
            <div class="footer-ol">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li><br><br>
                    <li><a href="#">our services</a></li><br><br>
                    <li><a href="#">privacy policy</a></li><br><br>
                    <li><a href="#">affiliate program</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li><br><br>
                    <li><a href="#">shipping</a></li><br><br>
                    <li><a href="#">returns</a></li><br><br>
                    <li><a href="#">order status</a></li><br><br>
                    <li><a href="#">payment options</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">Vitamins</a></li><br><br>
                    <li><a href="#">Antibiotics</a></li><br><br>
                    <li><a href="#">Body Lotions</a></li><br><br>
                    <li><a href="#">Others</a></li><br><br>
                </ul>
            </div>
            <div class="footer-ol">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f fa-x" style="color: #3b5998;"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-x" style="color: #0084b4;"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-x" style="color:   #E1306C;"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in fa-x" style="color:  #0077B5 ;"></i></a>

                </div>
            </div>
            <div class="pal">
                
            </div>
            <p class="credit">Copyright &copy; <span>2015-2024</span> | all rights reserved. | <span>Designed By GWS Tutor</span></p>
        </div>
     </div>
  </footer>

<!-- footer section ends -->
<!-- footer section ends -->

  </nav></div></header>  


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="main/js.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";

}
</script>



</body>
</html>

