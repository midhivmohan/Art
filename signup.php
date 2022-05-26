<?php
 session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
   
    <title>signup</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="signup.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    
  
  </head>
  
 

  
  
  <body class="u-body"><header class="u-clearfix u-header u-palette-1-base u-header" id="sec-7e32"><a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="131" data-image-height="150">
        <img src="images/tempsnip.png" class="u-logo-image u-logo-image-1">
      </a><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
          
        </div>
		
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
		  <li class="u-nav-item">
		  <a href="index.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a href="About.php" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a  href="blog/blog.html" style="padding: 10px 0px;">Blog</a>
</li><li class="u-nav-item"><a href="contact.php"style="padding: 10px 0px;">Contact</a>
</li><li class="u-nav-item"><a  href="signup.php" style="padding: 10px 0px;">Signup</a>
</li><li class="u-nav-item"><a  href="login.php" style="padding: 10px 0px;">Login</a>
</li></ul>
        </div>
		

        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              
          </div>
          
      <h4>
        <span style="font-size: 1.5rem;">Artspace</span>
        <span style="font-size: 1.5rem;"></span>
      </h4></header>
	  
    <section class="u-clearfix u-section-1" >
      <div class="u-clearfix u-sheet u-sheet-1">
       <div class="u-form u-form-1">
        
		  
		  
		<form name="Form" action="insert.php"onsubmit="return sample()" method="post">			
					
					
		           <p class="u-custom-font u-font-merriweather u-text u-text-custom-color-4 u-text-default u-text-1">Signup </p>
		   
<div class="u-clearfix u-form-spacing-7 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 3px;">
           
     <div class="u-form-group u-form-name ">
          
 
      <input type="text" class="u-input u-input-rectangle u-white form-control" name="uname" placeholder="Username"
	  pattern="^[A-Z a-z]+$" title="Use alphabets Only" required autocomplete="off">
	  
      </div>
           
             

            <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-2">
             
                     <input type="date" placeholder="MM/DD/YYYY" name="udate" class="u-input u-input-rectangle u-white form-control"required>
            </div>
                  <div class="u-form-email u-form-group u-form-partition-factor-2">

             
			
			
		   <input type="email" name="uemail" class=" u-input u-input-rectangle u-white form-control"
		   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" required autocomplete="off">
		      		
      
	  
	  
                  </div>
  <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-4">
  
  
   <input type="phone"  placeholder="Phone" name="phone" class=" u-input u-input-rectangle u-white form-control"
   required pattern="[789][0-9]{9}" title="Must Number Having 10 Digits"
   autocomplete="off" >
  
   
   
   </div>
   <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
              
       <input type="text" placeholder="place" name="txtplace" class=" u-input u-input-rectangle u-white form-control"
	  pattern="^[A-Z a-z]+$" title="Use alphabets Only" required autocomplete="off">
    </div>
       <div class="u-form-group u-form-address">
              
            <textarea placeholder="address" rows="4" cols="50" id="address" name="addrss" class=" u-input u-input-rectangle u-white
			form-control"required autocomplete="off" >
</textarea>
        </div>
		
		
		
		
		
         <div class="u-form-group u-form-group-7">
		 
            
        
 
	<input type="password" id="password" name="txtpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"class="u-input u-input-rectangle u-radius-43 u-white form-control"
		 placeholder ="Password"  required>		 
				 
	
				
          
<br>         
         </div>
		 <input type="submit"value="Submit" name="subbtn" />
				
            
								<input type="reset" value="Clear" >
    </section>
    
<script>

function sample() {
		var name = document.forms["Form"]["uname"];
		var email = document.forms["Form"]["uemail"];
		var phone = document.forms["Form"]["phone"];
		var password = document.forms["Form"]["txtpass"];
		var address = document.forms["Form"]["addrss"];
		
		

		if (name.value == "") {
			window.alert("Please enter your name.");
			name.focus();
			return false;
		}

		if (address.value == "") {
			window.alert("Please enter your address.");
			address.focus();
			return false;
		}

		if (email.value == "") {
			window.alert(
			"Please enter a valid e-mail address.");
			email.focus();
			return false;
		}

		if (phone.value == "") {
			window.alert(
			"Please enter your phone number.");
			phone.focus();
			return false;
		}

		if (password.value == "") {
			window.alert("Please enter your password");
			password.focus();
			return false;
		}

		
	}

</script>


    
						<footer class="u-align-center u-clearfix u-footer u-palette-1-base u-footer" id="sec-1d2c"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        
      </div>			</footer>
    
  </body>
</html>