<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>BULA HORA Portal</title>

  
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  
  <link href="css/style.scss" rel="stylesheet" />
  
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
	<fieldset>
	<table width="1444" height="245" border="0">
<tr>
    <td height="239" colspan="6"><img src="img/bhu.jpg" width="1128" height="219" alt=""/>&nbsp;</td>
</tr>
	</table>
  <div class="hero_area">
   
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="fhome.php">Home <span class="sr-only"></span></a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  <a class="nav-link" href="reg.php"> REGESTER </a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  <a class="nav-link" href="Contact_us.php">Contact us</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <li class="nav-item">
                  <a class="nav-link" href="#" >View Dorm</a>
                </li>
              </ul>
				
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
						<br>
<form id="form1" name="login" method="POST" action="viewdorm.php" onsubmit="return validateForm()">
<p style="font-size:14px;color:blue;" ><h6>You can see Your Dormitory Placement  information by entering your id number.</h6></p>
   <table width="399px" valign="top" align="center">
  <tr>

         <td class='para1_text' width="220px"><font color="red">*</font> Student ID No.</td><td><input type="text" name="idno" required x-moz-errormessage="Enter Your ID No." ></td>
       
    
  
    <td><input type="submit" name="submitlogin" class="button_example" value="Submit" /></td>
  </tr>
</table>
  </form>
<br>
<br>
  <?php  
  error_reporting(0);
  if (isset($_POST['submitlogin'])){ 
  $idno=$_POST['idno'];
      $view=mysql_query("select * from students where stud_id='$idno'");
          $rowCheck = mysql_num_rows($view);
if($rowCheck<1)
{
echo'<p class="wrong">The ID no is not found</p>';
echo' <meta content="5;viewdorm.php" http-equiv="refresh" />';
}
else
{
      while($row = mysql_fetch_array($view))
            {
      $fname=$row['fname'];
      $mname=$row['mname'];
            $dorm=$row['room_no'];
            $block=$row['block_no'];
            }
      echo"<table align='center' style='border-radius:15px;border:1px solid #336699;' width='250px' height='100px'>";
      echo"<tr>";
      echo"<th colspan='2' bgcolor='#336699'><font color='white' size='2'>".$fname."&nbsp;".$mname."</font><a href='viewdorm.php'><img align='right' src='img/close_icon.gif'></a></th>";
      echo"</tr><tr>";
  echo"<td><font face='Times New Roman' size='3' color='green'>Block No:</td><td>".$block.'</td></tr>';
  echo"<td><font face='Times New Roman' size='3' color='green'>Room No:</td><td>".$dorm.'</td></tr>';
  echo"</font></table>";
  }
  }
?>
						
						<button style="color: coral;text-align: center;border: double">
                         <h1>
                        Welcome To  Bula Hora <br>
                        <span>
						  Portal
						  </span>
                            </h1>
							<img src="img/1.jpg"></a>
							</button>
							</center>
						<br><br>
					     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>               
                    Login Here                  
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    
  </div>

  

   <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
             Bule Hora University is one of the Ethiopia universities located 470 km south of Addis Ababa in Bule Hora town, West Guji Zone, Oromia Regional State. The university was officially established by proclamation No213/2011 (2003 E.C.) as one of the Ethiopian government higher education institutions (HEIs). This university is located at a distance of 467 km south of Addis Ababa, Oromia Regional State, and West Guji Zone at Bule hora town.
             Bule Hora University is devoted to provide relevant and quality education to produce competent graduates; conducts problem-based researches, gives demand driven community services, and also introduces modern scientific innovation and technology results that contribute to the sustainable development of the country.
            </p><br><img src="img/im.jpg"></a><br><br>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/1.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
 
 
  <div class="body_bg layout_padding">

  <section class="info_section layout_padding">
	 
    <div class="footer_contact">
      <div class="heading_container">
		  
        <h2>
          Contact Us
        </h2>
			  
      </div>
      <div class="box">
        <a href="" class="img-box">
          <img src="img/call-o.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="img/call.png" alt="" class="img-2">
        </a>
        <a href="" class="img-box">
          <img src="img/location-o.png" alt="" class="img-1">&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="img/location.png" alt="" class="img-2">
        </a>
        <a href="" class="img-box">
          <img src="img/envelope-o.png" alt="" class="img-1">&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="img/envelope.png" alt="" class="img-2">
        </a>
      </div>
    </div>
		


  </section>
</center>

  <center>
  <section class="container-fluid footer_section;">
    <p>
     &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1 style="border: medium;color: burlywood">Group 3 WebSite </h1>
	  <ul style="color: darkgrey;border: double">Group Mamber<br>
	  1.Henok<br>
	  2.Anduamlak<br>
	  3.Dani Melaku<br>
      4.Bela Coster<br>
     
    </p>
  </section>
  </center>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</fieldset>
</html>