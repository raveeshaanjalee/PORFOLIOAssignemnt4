<?php
$conn = mysqli_connect('localhost','root', '', 'contact_db') or die('connection failed');
if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM 'contact_form' WHERE name = '$name' AND $email = '$email AND message = 'message'") or die('query failed');

    if(mysqli_num_rows($select_message)>0){
        $message[] = 'message sent  already!';}
        else{
            mysqli_query($conn, "INSERT INTO `contact_form`(name, email, message) VALUES('$name', '$email', '$message' )") or die('query failed');
            $message[] = 'message sent succefully!';
        }
    }


?>

<!DOCType html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>MY PORTFOIO WEBSITE</title>
            <link rel="stylesheet" href="cover.css">
            <script src="https://kit.fontawesome.com/ea75e409c3.js" crossorigin="anonymous"></script>
        </head>

        <body>

       

        <?php 
        if(isset($$message)){
            foreach($$message as $$message ){
                echo ' <div class="message">
                <span> '.$message.' </span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
    </div>';
            }
        }
        ?> 
            <div id="header">
                <div class="container">
                
                <nav>
                    <img src="image/logo.jpg" class="logo">
                    <ul>
                        <li><a href="#header">Home</a></li>
                        <li><a href="#About">About</a></li>
                        <li><a href="#Services">Services</a></li>
                        <li><a href="#Portfolio">Portfolio</a></li>
                         <li><a href="#Contact">Contact</a></li>
                         <i class="fas fa-times" onclick="closemenu()"></i>


                        
                    </ul>
                    <i class="fas fa -bars" onclick="openmenu()"></i>
                   
                </nav>
                <div class="header-text">
                    <p>Architect</p>
                    <h1>Hi, I'm Raveesha Anjalee from Sri Lanka</h1>
                </div>
                </div>

            </div>
            <!---------------------about----------->

            <div id="About">
                <div class="container">
                    <div class="row">
                    <div class="about-col-1">
                        <img src="image/me.jpg">
                    </div>
                    <div class="about-col-2">
                        <h1 class="sub-title">About Me</h1>
                       
                     <p>Hello, I'm Ravisha Anjalee from Warakapola, Sri Lanka. i'm graduated from Rajarata University of Sri Lanka.</p>
                    <p> At my architectural practice, I offer a comprehensive range of services tailored to meet the unique needs of each client. With a deep understanding of design principles, construction techniques, and industry best practices, I strive to deliver exceptional architectural solutions </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('Skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('Experiences')">Experiences</p>
                        <p class="tab-links" onclick="opentab('Education')">Education</p>

                    </div>
                    <div class="tab-contents active-tab" id="Skills">
                        <ul>
                            <li><span>House Design</span><br>Designing the new houses related new trend</li>
                            <li><span>Garden Design</span><br>Designing the calm and looking pleasent garden</li>
                            <li><span>Furniture Design</span><br>Designing the furniture related new trend</li>
                        </ul>
                    </div>
                        <div class="tab-contents" id="Experiences">
                            <ul>
                                <li><span>2021-current</span><br>Owner of REALSTATE Architect </li>
                                <li><span>2019-2021</span><br>Senior designer at ABC Architect</li>
                                <li><span>2017-2019</span><br>Training at ABC Architect</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="Education">
                            <ul>
                                <li><span>2017</span><br>MSc, School of Architect, SLITT </li>
                                <li><span>2015</span><br>B.A Architect,Rajarata University of Sri Lanka</li>
                               
                            </ul>
                        </div>

                </div>
                    
                    </div>

                </div>
            </div>


                           

                
            <!------------------------services------------------------->
            <div id="Services">
                <div class="container">
                    <h1 class="sub-tittle">My services</h1>
                    <div class="services-list">
                        <div>
                            
                            <h2>House Design</h2>
                           
                            <p> House design services play a crucial role in creating functional and aesthetically pleasing homes that meet the unique needs and aspirations of homeowners.</p>
                        <a href="#">Learn more</a>
                        </div>

                        <div>
                            <i class="fa-solid fa-house-tree"></i>
                            
                            <h2>Garden Design</h2>

                           <p>Garden design services play a vital role in creating stunning and functional outdoor spaces that enhance the beauty and enjoyment of residential properties.</p>
                        <a href="#">Learn more</a>
                        </div>

                        <div>
                            <i class="fa-solid fa-loveseat"></i>
                            <h2>Furniture Design</h2>
                        
                           <p>Furniture design services play a pivotal role in creating innovative and functional pieces that enhance the aesthetic appeal and usability of interior spaces</p>
                        <a href="#">Learn more</a>
                        </div>


                    </div>

                </div>
            </div>

            <!--------------------------portfolio---------------------->
            <div id="Portfolio">
            <div class="container">
                <h1 class="sub-tittle">My Work</h1>
                <div class="work">
                    <img src="image/home.jpg">
                    <div class="layer">
                        <h3>House design</h3>
                        <p>This design is creative one. get design for you</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>

                <div class="work">
                    <img src="image/garden.jpg">
                    <div class="layer">
                        <h3>Garden design</h3>
                        <p>This design is very attraactive and calm one. get design for you</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>

                    </div>
                </div>

                <div class="work">
                    <img src="image/furni.jpg">
                    <div class="layer">
                        <h3>Furniture design</h3>
                        <p>This design is very attraactive and looking comfartable . get design for you</p>
                        <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>

                </div>
                <a href="#" class="btn">See more</a>

            </div>
            </div>

            <!-------------------Conatact---------------------->
           <div id="Contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-title">Contact Me</h1>
                        <p><i class="fas fa-paper-plane"></i>raveesha@gmail.com</p>

                        <p><i class="fas fa-phone-square-alt"></i>0786745182</p>
                         <div class="social-icons">
                            <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
                            <a href="https://facebook.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://facebook.com/"><i class="fab fa-linkedin "></i></a>

                         
                    </div>
                    
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type ="email" name="email" placeholder="Your email" required>
                        <textarea name="message"  rows="6" placeholder="Your Message"></textarea>
                        <input type="submit" value="send message" name="send" class="btn btn2"> Submit</button>
                    </form>
                </div>
            </div>


           </div> 
           
        </div>
            <script>
                var tablinks = document.getElementsByClassName("tab-links");
                var tabcontents= document.getElementsByClassName("tab-contents");
                function opentab(tabname){
                    for(tablink of tablinks){
                        tablink.classList.remove("active-link");
                    }
                    for(tabcontent of tabcontents){
                        tabcontent.classList.remove("active-tab");
                    }
                        event.currentTarget.classList.add("active-link");
                        document.getElementById(tabname).classList.add("active-tab");
                }
            </script>

            <script> 
            var sidemenu = document.getElementById("sidemenu");

            function openmenu(){
                sidemenu.style.right = "0";

            }
            function closemenu(){
                sidemenu.style.right = "-200px";
            }
            
            </script>


            

        </body>


</html>