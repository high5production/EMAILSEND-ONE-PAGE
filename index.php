<form class="contact_form" action="" method="post">
     <?php  
if(isset($_POST['submit'])) {
$to = "md.shamimtpi@gmail.com";
$from = $_POST['email'];
$subject = $_POST['subject'];
$message = "Name: " . $_POST['name'] . "\r\n\r\n" . "Email: " . $_POST['email'] . "\r\n\r\n" . "Phone: " . $_POST['phone'] . "\r\n\r\n" . "SUBURB: " . $_POST['suburb'] . "\r\n\r\n" . "Message: " . $_POST['message'];

$headers = "From: $from.\r\n";
$headers .= "Reply-To: $from.\r\n";
$headers .= "Return-Path: $from.\r\n";

if ( mail($to,$subject,$message,$headers) ) {
   echo "<p style='text-align:center'>The email has been sent!</p>";
   } else {
   echo "The email has failed!";
   }
}

?>  

     <div class="row">
    <div class="first_row">
      <input type="text"  placeholder="NAME*" name="name" required>
       <input type="email" placeholder="EMAIL*" name="email" required>
    </div>
    
     <div class="second_row">
      <input type="text"  placeholder="PHONE NUMBER*" name="phone" required>
       <input type="text" placeholder="SUBURB*" name="suburb" required>
         <input type="text" placeholder="INQURING ABOUT*" name="subject" required>
    </div>
    
    <div class="last_row">
      <textarea class="" placeholder="MESSAGE*" name="message" required></textarea>
    </div>
    <div class="submit_shamim">
        <button type="submit" name="submit">SUBMIT</button>
    </div>
    
    </div>
   
  </form>