 <?php
     session_start();
	
      ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
   
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <style>
	 input[type=submit]{
  background-color: #0000FF;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
    }
	
	</style>
    
    
  </head>
  <body class="u-body">
  <header class="u-clearfix u-header u-palette-1-base u-header" id="sec-7e32">
  <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="131" data-image-height="150">
        <img src="images/tempsnip.png" class="u-logo-image u-logo-image-1">
      </a><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
			<div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
          
			</div>
	<div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a href="index.php" style="padding: 10px 0px;">Home</a>
		</li><li class="u-nav-item"><a href="About.html" style="padding: 10px 0px;">About</a>
		</li><li class="u-nav-item"><a href="blog/blog.html" style="padding: 10px 0px;">Blog</a>
		</li><li class="u-nav-item"><a href="contact.php" style="padding: 10px 0px;">Contact</a>
		</li><li class="u-nav-item"><a href="signup.php" style="padding: 10px 0px;">Signup</a>
		</li><li class="u-nav-item"><a href="login.php" style="padding: 10px 0px;">Login</a>
		</li></ul>
		
	</div>
        
          
              
          
      </nav><h4 class="u-text  u-text-default u-text-1">
						<span style="font-size: 0.8rem;">Artspace</span>
						<span style="font-size: 1.5rem;"></span>
			</h4></header>
		<section class="u-align-left u-clearfix u-image u-shading u-section-1" src="" data-image-width="150" data-image-height="100" id="sec-2c82">
				<div class="u-clearfix u-sheet u-sheet-1">
				<div class="u-align-center u-container-style u-gradient u-group u-radius-50 u-shape-round u-group-1">
				<div class="u-container-layout u-container-layout-1">
		  
		  
												<br><br>
            
            
               <form name="form1"action="logincheck.php" method="POST">
			  
			   <h1 style="font-family:Bodoni MT Black;">Login</h1>
			   
			   
		<div class="end u-form-spacing-30 u-form-vertical " source="custom" style="padding: 10px;">
               <div class="mail">
						<div class="u-form-group u-form-name">
<input type="text" name="uemail" class="u-input u-input-rectangle u-radius-43 u-white form-control"
  placeholder="Email"autocomplete="off"/>
		      								
                  

						</div>
						<div class="u-form-group u-form-password">
                 
				 
				 
				 
 <input type="password" id="txtpass" name="txtpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"class="u-input u-input-rectangle u-radius-43 u-white form-control"
		 placeholder ="Password"  required>		 
				 
				 
				 
 



						</div>
                
                <div class="u-align-center u-form-group ">
                  
				 
					<input type="submit" value="Login"name="save"onclick="ValidateEmail(document.form1.uemail)"/> 
												
												
												
	
												
												
												</div>
<a href="signup.php"><div>Register </div></a>												
				</div>
				<div>
			<br>
                
              
            </form>
			
				</div>
        </div>
      </div>
    </section>
    <script>
	
	function ValidateEmail(inputText)
{
var mailformat = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$";
if(inputText.value.match(mailformat))
{
 
document.form1.uemail.focus();
return true;
}
else
{

document.form1.uemail.focus();
return false;
}
}
	
var myInput = document.getElementById("txtpass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");




myInput.onkeyup = function() {
  
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
    
    <footer class="u-align-center u-clearfix u-footer u-palette-1-base u-footer" id="sec-1d2c"><div class="u-clearfix u-sheet u-sheet-1">
        <p>© 2021 ArtSpace. All rights reserved ||</p>
      </div></footer>
    
  </body>
</html>