<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Alpha.</title>
        <script src="https://kit.fontawesome.com/5297cac556.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="stylec.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
<body>
<header>
        <a href="#" class="logo anim">Alpha <span>.</span></a>
        <ul class="navigation">
            <li> <a href="#">Home</a></li>
            <li> <a href="#about">About us</a></li>
            <li> <a href="service.php">Service</a></li>
            <li> <a href="portfolio.php">Portfolio</a></li>
            <li> <a href="#" onclick="open_close()">Log in</a></li>
            <li> <a href="#"  onclick="open_close_2()">Sign Up</a></li>
            <li> <a href="contact.php">Contact us</a></li>
        </ul>
    </header>
    <div class="back-page"  id="login_nav">
        <div class="login_nav">
            <form action="#" method="post">
                <i  id="close-icon" onclick="open_close()" class="fa-solid fa-xmark"></i>
                <h2 class="input-element">Login</h2>
                <input type="text" name="name" placeholder="Username">
                <input type="password" name="pass" placeholder="password">
                <button id="login-bt" type="submit">Login</button>
            </form>

        </div>
    </div>

    <div class="back-page-2"  id="signup_nav">
        <div class="signup_nav">
            <form action="page-2.php" method="post" name="fs" onsubmit="return validate_form()">
             <i id="close-icon" onclick="open_close_2()" class="fa-solid fa-xmark"></i>
                <h2 class="input-element">sign up</h2><span class="al-error"></span>
              <input type="text" onkeyup="v_name()" name="name" placeholder="Username" required><span  id='v-name'></span>
                <input type="date" name="date"  required>
                <input type="email"onkeyup="v_email()" name="email" placeholder="Email" required><span id="v_email"></span>
               <input type="tel"  onkeyup="v_phone()" name="phone"placeholder="phone" ><span id="v-phone"></span>
              <input type="password" onkeyup="v_pass()" name="password" placeholder="password" required><span id="v-password"></span>
                <button id="login-bt" type="submit">Sign up</button><span id="v-submit"></span>
            </form>

        </div>
    </div>


  <section class="banner" id="banner">
    <div class="content">
        <h2 class="anim">Better <span> digital</span> experience <br>with Alpha <span>.</span></h2>
        
        <a href="#ser" class="btn anim">View more</a>
    </div>
    
  </section> 

  <div class="chatbox-wrapper">
        <div class="chatbox-toogle">
            <i class='bx bx-message-dots'></i>
        </div>
        <div class="chatbox-message-wrapper">
            <div class="chatbox-message-header">
                <div class="chatbox-message-profile">
                    <img src="profile1.jpg" alt="" class="chatbox-message-image">
                    <div>
                        <h4 class="chatbox-message-name">Alpha <span>.</span></h4>
                        <p class="chatbox-message-status">online</p>
                    </div>
                </div>

                <div class="chatbox-message-dropdown">
                    <i class="fa-solid fa-ellipsis-vertical chatbox-message-dropdown-toggle"></i>
                    <ul class="chatbox-message-dropdown-menu">
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Report</a></li>
                    </ul>
                </div>
            </div>
            <div class="chatbox-message-content">
                <h4 class="chatbox-message-no-message">
                    You don't have message yet!
                </h4>
               <!-- <div class="chatbox-message-item send">
                    <span class="chatbox-message-item-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, aut?
                    </span>
                    <span class="chatbox-message-item-time">
                        08:30
                    </span>
                </div>
                <div class="chatbox-message-item recieved">
                    <span class="chatbox-message-item-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, aut?
                    </span>
                    <span class="chatbox-message-item-time">
                        08:30
                    </span>
                </div> -->

            </div>
            <div class="chatbox-message-bottom">
                <form action="#" class="chatbox-message-form">
                    <textarea rows="1" class="chatbox-message-input" placeholder="Type message..."></textarea>
                    <button type="submit" class="chatbox-message-submit"><i class='bx bx-send'></i></button>
                </form>
            </div>
        </div>
    </div>
    <script src="chatjs.js"></script> 
  <section class="sec" id="about">
    <div class="content">
        <div class="mxw800p">
            <h3>Who We Are</h3>
            <p class="text1"> <b> Alpha <span>.</span></b> is an Indian multinational technology corporation headquartered in Chennai, TamilNadu, with operations 
                in over 171 countries. The company began in 1911, founded in Kumbakonam, TamilNadu, by trust businessman Mr Vishnuvasan M. <b> Alpha <span>.</span></b> is one of 30 companies 
                included in the Dow Jones Industrial Average and one of the world's largest employers, with over 282,100 employees as of December 2021.
            </p>
            <a href="service.php" class="btn1">Read our story</a>
        </div>
    </div>
  </section>
  <section class="sec1" id="ser">
    <div class="content">
        <div class="mxw800p">
            <h3>What We Do</h3>
            <p class="text1">Inventions by <b> Alpha <span>.</span></b> include the automated teller machine (ATM), the floppy disk, the hard disk drive, 
                the magnetic stripe card, the relational database, the SQL programming language, the UPC barcode, and dynamic random-access memory (DRAM).
                 The <b> Alpha <span>.</span></b> mainframe, exemplified by the System/360, was the dominant computing platform during the 1960s and 70s.
            </p>
            
        </div>
    </div>
    <!--service-->
</section>
<section id="ser1">
        <div class="services">
            <div class="box">
                <div class="iconBx">
                    <img src="icon1.png">
                </div>
                <div class="content">
                    <h2>Design</h2>
                    <p>The company has various designations for exceptional individual contributors such as Senior Technical Staff Member (STSM), 
                        Research Staff Member (RSM), Distinguished Engineer (DE), and Distinguished Designer (DD).
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="iconBx">
                    <img src="icon2.png">
                </div>
                <div class="content">
                    <h2>Delopement</h2>
                    <p><b> Alpha <span>.</span></b> has several leadership development and recognition programs to recognize employee potential and achievements. For early-career high potential employees, 
                    <br><b> Alpha <span>.</span></b> sponsors leadership development programs by discipline.
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="iconBx">
                    <img src="icon3.png">
                </div>
                <div class="content">
                    <h2>Branding</h2>
                    <p><b> Alpha <span>.</span></b> is nicknamed Big Blue in part due to its blue logo and color scheme,
                    and also partially since Alpha <span>.</span></b> once had a de facto dress code of white shirts with blue suits.
                    .The company also sponsored the Olympic Games from 1960 to 2000.

                    </p>
                </div>
            </div>
        </div>
    
    </section>
    <!--stats-->  
    <section class="sec stats">
      <div class="content">
          <div class="mxw800p">
              <h3>Our Achievement</h3>
              <p class="text1"><b> Alpha <span>.</span></b> ranked #1 in Covalence’s EthicalQuote Q1 2010 Ranking, besting 581 large companies across 18 sectors. Covalence, based in Switzerland, runs EthicalQuote, the ethical reputation scoring system and corporate social responsibility 
                news database tracking the world’s largest companies. It is one of the most influential rankings used by socially responsible investment funds.
              </p>
          </div>
          <div class="statsBox">
            <div class="box">
                <h2>1200+</h2>
                <h4>Project</h4>
            </div>
            <div class="box">
                <h2>800+</h2>
                <h4>Happy clients</h4>
            </div>
            <div class="box">
                <h2>150+</h2>
                <h4>Countries</h4>
            </div>
            <div class="box">
                <h2>50+</h2>
                <h4>Awards</h4>
            </div>
          </div>
      </div>
    </section>
    <!--footer-->
    <div class="footer">
            <div class="footer-s">
         <div class="f-head"><p>Alpha <span>.</span></h2></div>   
         <div class="f-content">
            <div class="f-col-1">
                    <p class="head">ABOUT Alpha</p>
                    <p>Who we are</p>
                    <p>Blog</p>
                    <p>Work with us</p>
                    <p>Invester Relations</p>
                    <p>Report Fraud </p>
            </div>           

<div class="f-col-2">
                <p class="head">Alphaverse</p>
                <p>Feeding India</p>
                <p>Hyperpure</p>
                
                <p>Alphaland </p>
            </div>
            <div class="f-col-3">
                <div class="f-col-3-1">
                    <p class="head">FOR Brands</p>
                    <p>Partner with us</p>
                    <p>Apps For You</p>
                
                </div>                

<div class="f-col-3-2">
                    <p class="head">FOR ENTERPRISES</p>
                    <p>Alpha for work</p>
                   
                </div>

            </div>
            <div class="f-col-4">
                <p class="head">LEARN MORE</p>
                <p>Privary</p>
                <p>Security</p>
                <p>Terms</p>
                <p>Sitemap</p>
            </div>
            <div class="f-col-5">
                <p class="head">SOCIAL LINKS</p>
                <p><a href="https://www.instagram.com/accounts/emailsignup/"><i class="fa-brands fa-instagram"></i></a></p>
                <p><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a></p>
                <p><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></p>
                <p><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></p><br><br>
                <h2 id="time" class="time"></h2>
            </div> </div> <div class="line"> <p></p></div>
<div class="f-bottom">By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies.

    All trademarks are properties of their respective owners.<br><span> 2008-2022 © Alpha.™ Ltd. All rights reserved.</span></div>

</div> </div>


    <script type="text/javascript">
        window.addEventListener('scroll',function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
        function open_close(){
            var loginbtn= document.getElementById("login_up")
var loginpage = document.getElementById('login_nav')
var closebtn =document.getElementById("close-icon");

       if(loginpage.style.display=="none"){
              loginpage.style.display="flex";
             }
             else{
              loginpage.style.display="none";
             }
}

function open_close_2(){
    var signpage= document.getElementById('signup_nav');
       if(signpage.style.display=="none"){
              signpage.style.display="flex";
             }
             else{
              signpage.style.display="none";
             }
}function v_name(){
var name= fs.name.value;
var name_error =document.getElementById("v-name");
if(name.match(/^(?=.*[A-Z])[a-zA-Z]*\s[a-zA-Z]+$/)){
       name_error.innerHTML="<i class='fa-solid fa-circle-check'></i>";
       return true;
}else{
       name_error.innerHTML="Invalid";
       return false;
}

}

function v_pass(){
       var pass= fs.password.value;
var pass_error =document.getElementById("v-password");
       if(pass.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9@#$%^&*]{6,16}$/)){
              pass_error.innerHTML="<i class='fa-solid fa-circle-check'></i>";
              return true;
       }else{
              pass_error.innerHTML="Invalid";
              return false;
       }

}function v_phone(){
       var phone= fs.phone.value;
var phone_error =document.getElementById("v-phone");
       if(phone.match(/^[+]{1}[0-9]{10,12}$/)){
              phone_error.innerHTML="<i class='fa-solid fa-circle-check'></i>";
              return true;
       }else{
              phone_error.innerHTML="Invalid";
              return false;
       }

}

function v_email(){
       var email= fs.email.value;
var email_error =document.getElementById("v_email");
       if(email.match(/^[a-zA-Z0-9]*@[a-z]*\.[a-z]{2,3}$/)){
              email_error.innerHTML="<i class='fa-solid fa-circle-check'></i>";
              return true;
       }else{
              email_error.innerHTML="Invalid";
              return false;
       }

}
function validate_form(){
       var sub_error=document.getElementById("v-submit");
       if(!v_name() || !v_pass() || !v_email() || !v_phone()){
              sub_error.style.display="inline-block";
              sub_error.innerHTML="*Please fix the error";
              setTimeout(function(){sub_error.style.display="none";},3000);
              return false;
       }
}
 let time = document.getElementById("time");
  
 setInterval(() => {
    let d = new Date();
    time.innerHTML = d.toLocaleTimeString();
 }, 1000);
      </script>
</body>
</html>                                            