<?php 
session_start();
if (!isset($_SESSION['id'])) {
  header("Location:home.php");
} ?>
<!DOCTYPE html>

<html>
    <head>
        <title>NSBM LMS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="lms.css" rel="stylesheet" type="text/css" >
        
    </head>
    <body >

        <div class="transbox2 divnew" >

            <img src="nsbm.GIF" align="left" width="220px" height="130px" />
            <h1  style="color:#FFFFFF;" ><b><center>National School Of Business Management</center></b></h1> 
            <h2  style="color:#FFFFFF;" ><b><center>e-Learning System</center></b></h2>


        </div>

    <center>
        <div class="main transbox divnew">
            <div class=" nav "> 
                <div class=" nav_wrapper ">

                    <ul>

                        <li><a href="index.html"><img src="Home.png" width="50" height="21" alt="" style="padding-left: 0px;"/></a></li>
                        <li><a href="menu.html">Menu</a>
                      
                        </li>
                        <li><a href="schedule.html">Courses</a>
                            <ul>
                                <li><a href="computing.html">School of Computing</a></li>
                                <li><a href="management.html">School of Management</a></li>
                                <li><a href="engineering.html">School of Engineering</a></li>
                            </ul>
                        </li>
                        <li><a href="">Events</a>

                        </li>
                        <li> <a href=""> Clubs </a> </li>
                        <li><a href="contactUs.html">Contact Us</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                    </ul>

                </div>
            </div>
        </div>

    </center>

<div style="margin-left: 1050px" class="logininfo">You are logged in as<a href="#"></a>
(<a href="logout.php">Logout</a>)</div><br>
</div>

    <h2>Latest Updates</h2>

     <table width="1300"> 
        <tr>
            <td> <div class="slideshow-container" style="margin-left: 200px">

                    <div class="mySlides fade">
                        <div class="numbertext">Green University Opening</div>
                        <img src="u.jpg" style="width:475px" "height:268px">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">Green University Opening</div>
                        <img src="a.jpg" style="width:475px" "height:268px">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="c.jpg" style="width:475px" "height:268px">
                        <div class="text"></div>
                    </div>

                </div>
                <br>

                <div style="margin-left: 400px" >
                    
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    
                </div>
            <script>
                                  var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 5000); 
                    }
               </script>
              
            </td>
            
            <td>
                <div style="margin-left: 300px">
                    <h3>Upcoming Events</h3>
                    <p> *No events right now </p>
                <script language="javascript" type="text/javascript">
            var day_of_week = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
                    var month_of_year = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

                   
                    var Calendar = new Date();

                    var year = Calendar.getFullYear();     
                    var month = Calendar.getMonth();    
                    var today = Calendar.getDate();    
                    var weekday = Calendar.getDay();    

                    var DAYS_OF_WEEK = 7;    
                    var DAYS_OF_MONTH = 31;    
                    var cal;    

                    Calendar.setDate(1);    
                    Calendar.setMonth(month);    



                    var TR_start = '<TR>';
                    var TR_end = '</TR>';
                    var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
                    var highlight_end = '</CENTER></TD></TR></TABLE></B>';
                    var TD_start = '<TD WIDTH="30"><CENTER>';
                    var TD_end = '</CENTER></TD>';

               

                    cal = '<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=15 BORDERCOLOR=green><TR><TD>';
                    cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=3>' + TR_start;
                    cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
                    cal += month_of_year[month] + '   ' + year + '</B>' + TD_end + TR_end;
                    cal += TR_start;

                    
                    for (index = 0; index < DAYS_OF_WEEK; index++)
                    {

                        
                        if (weekday == index)
                            cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

                        
                        else
                            cal += TD_start + day_of_week[index] + TD_end;
                    }

                    cal += TD_end + TR_end;
                    cal += TR_start;

                    
                    for (index = 0; index < Calendar.getDay(); index++)
                        cal += TD_start + '  ' + TD_end;

                    
                    for (index = 0; index < DAYS_OF_MONTH; index++)
                    {
                        if (Calendar.getDate() > index)
                        {
                            
                            week_day = Calendar.getDay();

                            
                            if (week_day == 0)
                                cal += TR_start;

                            if (week_day != DAYS_OF_WEEK)
                            {

                                
                                var day = Calendar.getDate();

                                
                                if (today == Calendar.getDate())
                                    cal += highlight_start + day + highlight_end + TD_end;

                                
                                else
                                    cal += TD_start + day + TD_end;
                            }

                            
                            if (week_day == DAYS_OF_WEEK)
                                cal += TR_end;
                        }

                        
                        Calendar.setDate(Calendar.getDate() + 1);

                    }

                    cal += '</TD></TR></TABLE></TABLE>';

                    
                    document.write(cal);



                    </script>

               
                </div>
            </td>
        </tr>

    </table>

    <div class="box1">
        <center>
         
            <br><h6 class="h6">Find us on</h6>
             <a href="https://www.facebook.com/nsbm.lk"> <img src="facebook.png" width="50px" height="50px" /> </a>
             <a href=""> <img src="google.gif" width="50px" height="50px" /> </a>
             <a href=""> <img src="youtube.png" width="50px" height="50px" /> </a>
             <a href="https://twitter.com/nsbm_srilanka"> <img src="twitter.jpg" width="50px" height="50px" /> </a>
            

            <img src="banner.png" align="center" width="1120px" height="90px">
            
           
            <i><h6>Copyright @ National School of Business Management No 309, High Level Road, Colombo 05, Sri Lanka.</h6></i>
        </center>


    </div>

</body>
