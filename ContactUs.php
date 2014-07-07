<!DOCTYPE html>
<html>

   <head>
   <!--
      
      My Chau Vietnamese Restaurant
      Author: My chau Tu
      Date:   2014/05/20

      Filename:         ContactUs.php
      Supporting files: diners.png, discover.png, formsubmit.js,
                        go.png, master.png, modernizr-1.5.js, payment.css, 
                         sb.css, sbback.png, sblogo.png,
                         stop.png, visa.png
   -->

      <meta charset="UTF-8" />
      <title>My Chau Vietnamese Restaurant</title>
      <script src="modernizr-1.5.js"></script>
      <script src="formsubmit.js"></script>
      <link href="common.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="contactus.css">

   </head>


   <body>
      <div id="container">   
        <?php 
          include "header.php"; 
          include "horizontal_menu.php"; 
          include "vertical_menu.php"; 
		  require "vendor/autoload.php";
          require_once("./include/db.php");
        ?>

         <section id="main">
            <h1>Contact Us</h1>        
                  <fieldset id="address">
                     <legend>Location</legend>
                     <p>                      
                        Address: 4800 Boulevard Decarie, Montreal, QC  H3X 2H5 <br/>
                        Phone: (514) 488 - 2161 <br/><br/>

                      </p>
                        <table width="600" border="0" cellspacing="0" cellpadding="1">
                          <th>Opening Hours</th>
                          <tr align="center"><td>Sundays   : 10:00 ~ 21:00</td></tr>                            
                          <tr align="center"><td>Saturdays : 10:00 ~ 21:00</td></tr>  
                          <tr align="center"><td>Fridays   : 10:00 ~ 21:00</td></tr>  
                          <tr align="center"><td>Thursdays : 10:00 ~ 21:00</td></tr>  
                          <tr align="center"><td>Wednesdays: 10:00 ~ 21:00</td></tr>  
                          <tr align="center"><td>Tuesdays  : 10:00 ~ 21:00</td></tr>  
                          <tr align="center"><td>Mondays   : Close</td></tr>  
                        </table>                                     
                     
                  </fieldset>
 
                  <form ation="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">                 
                     <fieldset id="info">
                        <legend>Question/Suggestion/Complaint?</legend>
                           <label for="name">Your Name:</label><input type="text" name="name" required="required"><br/>
                           <label for="email">Your Email:</label><input type="text" name="email" required="required"><br/>
                           <label for="message">Your Message:</label>
                           <textarea rows="7" cols="100" name="message" required="required"></textarea> <br/>
                       </fieldset>      
                  
                           <p>
                              <input type="submit" name="submit" value="Send Email"/>         
                           </p>
                 </form>

                 <?php                    
                 
                     if(isset($_POST["submit"]))
                     {
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $message = $_POST["message"];
                        if (($name=="")||($email=="")||($message=="")) 
                        {
                           echo "All fields are required, please fill the form again.";
                        }
                        else
                        {
                            
                           $to="chautm@gmail.com";
                           $from ="From: $name<$email>";
                           $subject="Message from the web My Chau Vietnamese Restaurant";   
                           // In case any of our lines are larger than 70 characters, we should use wordwrap()
                            $message = wordwrap($message, 70, "\r\n");                                                                         
                            
							$SENDGRID_USERNAME="app26775163@heroku.com";
							$SENDGRID_PASSWORD = "14e2o9ga";
							
							$sendgrid = new SendGrid($SENDGRID_USERNAME,$SENDGRID_PASSWORD);
							$email    = new SendGrid\Email();
							$email->addTo($to)->
							setFrom($email)->
							setSubject($subject)->
							setText($message)->
							setHtml('<strong>Hello World!</strong>');

							$sendgrid->send($email);
							
                           // $ok=mail($to, $subject, $message); //the mail service is not working in school.
						   
                            send_sms($to,$from." ".$message);
                            echo "<h1> Mail Sent</h1>";                                
                        }                    
                      }
                      
                  ?>  
          </section>

        <?php include "footer.php"; ?>
      </div>
   </body>
</html>

