
<!DOCTYPE html>
<html>

   <head>
   <!--
      My Chau Vietnamese Restaurant
      Author: MY CHAU TU
      Date:   2014/05/20

      Filename:        index.php
      Supporting files: modernizr-1.5.js, notice.png, rblogo.png,
                        redbar.png, slice.png, toppings.png
      
   -->

      <meta charset="UTF-8" />
      <title>My Chau Vietnamese Restaurant</title>
      <script src="./js/modernizr-1.5.js"></script>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <link rel="stylesheet" type="text/css" href="common.css">
      <link rel="stylesheet" type="text/css" href="main.css">

   </head>

   <body>
      <div id="container">         
         <?php include "header.php"; ?>
         <?php include "horizontal_menu.php"; ?>
         <?php include "vertical_menu.php"; ?>

         <section id="main">         
            <img src="./img/main.jpg" alt="" />
            <p>Vietnamese cuisine doesn't win any points for complexity. 
               Many of the most popular dishes can be made just as well on the side of the road as in a top-end restaurant.
            </p>
            <p>             
               But it’s precisely this simplicity, the subtle variations by region and the fresh 
               ingredients that keep us pulling up a plastic stool for more.
            </p>

            <div class="coupon">
               <h1>Classic Combo</h1>
               <p>1 - Rice Noodle Soup
                  &amp; a 2-Liter of Your Choice
                  For Only $14.99
               </p>
               <p>Expires 3/14</p>
            </div>
            <div class="coupon">
               <h1>Beef &amp; Noodle</h1>
               <p>16" Specialty Pizza
                  Reg. Cheese Stix &amp; a 2-Liter
                  For Only $21.99
               </p>
               <p>Expires 3/14</p>
            </div>
            <div class="coupon">
               <h1>1/2 Price</h1>
               <p>Buy any Special House
                  at Reg. Price &amp; Get a 2nd
                  dish For Half Price
               </p>
               <p>Expires 3/14</p>
            </div>
            <div class="coupon">
               <h1>Chicken &amp; Wings</h1>
               <p>14" 2-Topping Pizza 
                  &amp; 12 Wings
                  For Only $15.99
               </p>
               <p>Expires 3/31</p>
            </div>
            <div class="coupon">
               <h1>$3.00 Off</h1>
               <p>Get $3.00 Off
                  any combo at
                  Menu Price
               </p>
               <p>Expires 3/31</p>
            </div>
            <div class="coupon">
               <h1>Sub Dinner</h1>
               <p>1 Vietnamese &amp; Sandwiches
                  &amp; 1 20oz Soda
                  For Only $6.99
               </p>
               <p>Expires 3/31</p>
            </div>
         </section>

         <?php 
          include 'aside.php';
          include 'footer.php';
         ?>

      </div>

   </body>

</html>