<?php 
include('header.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/con.css" rel="stylesheet">

</head>
<body>
  <div class='contact-header'>
      <div class="container">
          <div class="contact-header-area">
        <div class=><img src="imgs/contact.jpg" class="tama"></div>          
          </div>
      </div>
  </div>

  <div class="form-wrapper">
      <div class="container">
          <div class="form-area">
            <form action="contactw.php"  method='post'>
            <div class='formBox'>
                <input type="text" name="name" placeholder='Name' class='formNav in'>
                <input type="text" name="mail"  Placeholder='Email' class='formNav in'>
                <textarea name="message" id="" rows="10" placeholder='Message' class='formNav'></textarea>
                <input type="submit" value='Send Message'class='sub'>
             </div>
            
            
            
            </form>
          </div>
      </div>
   </div>








</body>
</html>

<?php 
include('footer.php');
?>
