
<?php 
include('../config/conn.php');
session_start();

if (isset($_SESSION['idst']) && isset($_SESSION['fnamest'])) {


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
   <style>
    :root {
  --header-height: 3rem;

  /*========== Colors ==========*/
  --first-color:  #d0a1ff;
  --first-color-alt: #539bde;
  --first-color-send: #a7c6ed;
  --title-color: #161212;
  --text-color: #5B5757;
  --text-color-light: #8F8A8A;
  --body-color: #FEFBFB;
  --container-color: #FFF;

  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --biggest-font-size: 2rem;
  --h2-font-size: 1.25rem;
  --h3-font-size: 1.125rem;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;

  /*========== Font weight ==========*/
  --font-semi-bold: 600;
  --font-bold: 700;

  /*========== Margenes ==========*/
  --mb-1: .5rem;
  --mb-2: 1rem;
  --mb-3: 1.5rem;
  --mb-4: 2rem;
  --mb-5: 2.5rem;
  --mb-6: 3rem;
  /*========== z index ==========*/

  --z-tooltip: 10;
  --z-fixed: 100;
}
#password{

    width: 900px;
}


.wrapper {
    position: relative;
    width: 900px;
    height: 420px;
    margin-right: 1cm;
    background:#cfb7ffc0;
    box-shadow: 0 8px 32px rgba(206, 206, 209, 0.37);
    border: 1px solid rgba(255, 255, 255, .18);
border-radius: 20px;
display: flex;
justify-content: center;
align-items: center;
margin-left: 1cm;
margin-top: 0.7cm;

}
h2 { font-size: 2em;
color:#fff;
text-align: center;

}
.input-box {
    position: relative;
   width: 320px; 
   margin: 30px 0;
   border-bottom: 2px solid #fff;
}
.input-box label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1.4em;
    pointer-events: none;
    color:#fff;
    transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top: 5px;




}
.input-box input {
width: 100%;
height: 50px;
background-color: transparent;
outline: none;
border: none;
font-size: 1em;
color: #fff;
padding: 0 35px 0 5px;

}

.input-box .icon {

  position: absolute;  
  right: 8px;
  color: #fff;
  font-size: 1.2em;
  line-height:57px;
}
.remember-forgot{
    margin: -15px 0 15px;
    font-size:1.3em ;
    color: #fff;
    display: flex;
justify-content: space-between;

}
.remember-forgot a{

  color :#fff;
  text-decoration: none; 
}
.remember-forgot a:hover {
    text-decoration: underline;
}
.remember-forgot label input{
 accent-color:var(--first-color);  
 margin-right: 3px; 
}
.pass{
    display: inline;
    margin-left: 0.5cm;
}
button {
    width : 40%;
    height: 45px;
    background: var(--purple4);
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1.3em;
    color: #fff;
    font-weight: 500;
}
button:hover{
    background: var(--purple3);
}
.home__img2{
    width: 280px;
    justify-self: center;
  }
  
  .home__img img{
   width: 300px;
   margin-left: 2cm;
  }
.register-link{

  font-size: .9em;  
  text-align: center;
  color: #fff;
  margin: 25px 0 10px;
}
.register-link p a{
color:#fff;
text-decoration: none;
font-weight: 600;


}
.register-link p a:hover {
    text-decoration: underline;
}
.blob {
    position: absolute;
    width: 500px;
    height: 500px;
    background: linear-gradient(180deg, rgba(47, 184, 255, .42) 31.77% ,#ebb7b7 100% );
    border-radius: 24% 76% 35% 65% / 27% 36% 64% 73% ;
    transform: translate(-100px, -50px) rotate(-90deg);
    transition: 1s cubic-bezier(.07, .8, .16, 1);
    animation: animateBlob 20s infinite alternate;
}
.blob:hover {
 width: 520px; 
 height: 520px;
 filter: blur(30px); 
  box-shadow: 
  0 0 0 5px rgba(255, 255, 255, .6),
  inset 100px 100px 0 0 #FFB6C1,
   inset 200px 200px 0 0 #784ba8,
   inset 300px 300px 0 0 #2b86c5;
}
@keyframes animateBlob { 
    100% {
    transform: translate(100px, 50px) rotate(-10deg);
      border-radius: 76% 24% 33% 67% / 68% 55% 45% 32% ;  
    }

}


.password{

    font-size: 1.4em;  
    text-align: center;
    color: #fff;
    margin: 25px 0 10px;
  }
  .password p {
  color: #fff;
  text-decoration: none;
  font-weight: 600;
     }
     @media screen and (max-width: 1024px) {

        /* Styles for screens with max-width of 1024px */
    
        .wrapper {
            width: 800px;
            height: 360px;
        }
    
        h2 {
            font-size: 1.8em;
        }
    
        .input-box {
            width: 280px;
        }
    
        button {
            width: 80%;
        }
    }
    
    @media screen and (max-width: 768px) {
    
        /* Styles for screens with max-width of 768px */
    
        .wrapper {
            width: 600px;
            height: 350px;
        }
    
        h2 {
            font-size: 1.5em;
        }
    
        .input-box {
            width: 200px;
        }
    
        button {
            width: 70%;
        }
    
        .home__img {
            display: none;
        }
    
        .home__img2 {
            width: 200px;
        }
    
        .register-link {
            font-size: 0.8em;
        }
    }
    
    @media screen and (max-width: 480px) {
    
        /* Styles for screens with max-width of 480px */
    
        .wrapper {
            width: 320px;
            height: 360px;
            flex-direction: column;
        }
    
        h2 {
            font-size: 1.2em;
        }
    
        .input-box {
            width: 240px;
        }
    
        button {
            width: 80%;
            margin-top: 20px;
        }
    
        .home__img {
            display: none;
        }
    
        .home__img2 {
            width: 160px;
            margin-bottom: 20px;
        }
    
        .register-link {
            font-size: 0.7em;
        }
    }



    @media screen and (max-width: 359px){
        .home__img
        {
          width: 90%;
        }
      }
      
     
        
        .home__img{
          order: 1;
        }
      
        
      
        .home__img{
          width: 100%;
        }
        
        .share__img{
          order: -1;
        }
      }
      
      @media screen and (min-width: 768px){
        body{
          margin: 0;
        }
      
        .section{
          padding-top: 7rem;
        }
      
        .nav{
          height: calc(var(--header-height) + 1.5rem);
        }
      
        .nav__list{
          display: flex;
          align-items: center;
        }
      
        .nav__item{
          margin-left: var(--mb-5);
          margin-bottom: 0;
        }
      
        .nav__toggle{
          display: none;
        }
      
        .change-theme{
          position: initial;
          margin-left: var(--mb-4);
        }
      
        .home__container{
          padding: 7rem 2rem 0;
        }
      
        .share__container{
          padding: 0 2rem;
        }
      
        .accessory__container{
          grid-template-columns: repeat(3,224px);
          justify-content: center;
        }
      
        .accessory__content{
          padding: .5rem 1.5rem 1.5rem;
        }
      
        .accessory__img{
          width: 120px;
          margin-bottom: var(--mb-1);
        }
      
        .accessory__title, .accessory__category{
          text-align: initial;
        }
      
        .accessory__button{
          padding: .75rem;
        }
      
        .send{
          background: none;
        }
      
        .send__container{
          background-color: var(--first-color-send);
          padding: 2rem;
          border-radius: 1.5rem;
        }
      }
      
      @media screen and (min-width: 968px){
        .bd-container{
          margin-left: auto;
          margin-right: auto;
        }
      
        .home__img,
        .share__img,
        .send__img{
          width: 400px;
        }
      
        .home__container,
        .share__container,
        .send__container{
          column-gap: 5rem;
        }
      }
     .bgt88{
    display: inline-block;
    background-color:  #8B73FF;
    color: #fff;
    padding: 1rem 1.5rem;
    border-radius: .5rem;
    font-weight: 600;
    transition: .3s;
    border: none;
  }
  
  .bgt88:hover{
    background-color: #539bde;
  }
  
  .bgt88-link{
    background: none;
    padding: 0;
    color: #8B73FF;
  }
  
  .bgt88-link:hover{
    background-color: transparent;
    color: var(--first-color-alt);
  }
   </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

<style>
    .home__title{
  font-size: 3rem;
  font-weight: 800;
  margin-bottom:1rem;
  color: #5B5757;
}
.DROP-PROFIL {
      position: relative;
    }
    
    .dropdown-menu-pro4 {
      display: none;
      position: absolute;
      top: 100%;
      right: 0;
     
      width: 210px;
      background: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
      border-radius: 10px;
      z-index: 1;
      animation: slideDown 0.3s ease-in-out;
      animation-fill-mode: forwards;
      opacity: 0;
      transform: translateY(-10px);
    }
    
    .MY-PROF {
      display: flex;
      align-items: center;
      padding: 20px;
      transition: all 0.2s ease-in-out;
      border-bottom: .1rem solid #aaa7a717;
      cursor:pointer;
      border-radius: 10px;
    }
    
    .MY-PROF:hover {
      background-color:#af9ef875;
      
    }
    
    .MY-PROF i {
      font-size: large;
      color: #8041f5ab;
      border-radius: 50%;
      margin-right: 10px;
    }
    
    .MY-PROF-text {
      flex: 1;
    }
    
    .MY-PROF-text p {
      margin: 0;
      font-size: 14px;
      font-weight: bold;
      color: #000000b6;
    }
    
    .notification-text span {
      font-size: 11px;
      color: #7884f5;
    }
    
    .DROP-PROFIL:hover .dropdown-menu-pro4 {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }
    
    @keyframes slideDown {
      0% {
        opacity: 0;
        transform: translateY(-10px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
</style>
</head>
<body>
   <div class="container" id="top">
    <!--start sidebar///////////////////////////////////////////////-->
    <aside class="sidebar-wrapper">
            <div class="sidebar-header">
                <img src="send2.png" alt="Logo">
                <h4>Staget</h4>
                <div class="close-menu">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" data-section="home">
                            <i class="fas fa-home"></i>
                            <div class="title">Home  </div>
                           
                        </a></li>


                        <li>
                            <a href="#internship" class="dropdown-toggle">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <div class="title">internship Request</div>
                                <i class="fas fa-chevron-down dropdown-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li><a href="request.php"><i class='bx bx-send' style="font-size: 2rem;"></i>Request</a></li>
                                <li><a href="acc.php"><i class='bx bx-check-circle' style="font-size: 2rem;"></i>Accepted</a></li>
                                <li><a href="ref.php"> <i class='bx bx-x-circle' style="font-size: 2rem;"></i>Refused</a></li>
                            </ul>
                        </li>

                    <li><a href="offers.php" data-section="offers">
                        <i class="fa-solid fa-address-card"></i>
                            <div class="title">Offers</div>
                        </a></li>
                                      <li><a href="company.php" data-section="company">
                        <i class="fa-solid fa-briefcase"></i>
                            <div class="title">Internships</div>
                        </a></li>
                    <li ><a href="recycle.php" class="sidebar-link" data-section="trash">
                        <i class="fa-solid fa-trash-can"></i>
                            <div class="title">Recycle Bin</div>
                        </a></li>
                    <li><a href="contact.php"  data-section="contact">
                        <i class="fa-solid fa-message"></i>
                            <div class="title">Contact</div>
                        </a></li> 

                    
                  
                </ul>
            </nav>
        </aside>
    <!--end sidebar//////////////////////////////////////////////////-->
    <main class="content">
        <!--start header ////////////////////////////////////////////////-->
        <header>
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="toggle-icon">
                        <i class="fas fa-bars"></i>
                    </div>
                    <i class="fa-solid fa-magnifying-glass fa-beat" style="color: #537bc1;"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="header-right">

<div class="dropdown dt">
    <div class="star-container bell">
        <i class='bx bx-bell'></i>
        <span class="count" style="	position: absolute;
	top: -6px;
	right: -6px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	border: 2px solid white;
	background: #fe3232d8;
	color: white;
	font-weight: 700;
	font-size: 12px;
	display: none;
	justify-content: center;
	align-items: center;
    display: flex;"></span>
      </div>
    <div class="dropdown-content ">

    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		function load_unseen_notification(view = '') {
			$.ajax({
				url: "fetch.php",
				method: "POST",
				data: { view: view },
				dataType: "json",
				success: function(data) {
					$('.dropdown-content').html(data.notification);
					if (data.unseen_notification > 0) {
						$('.count').html(data.unseen_notification);
						$('.count').css('display', 'flex');
					} else {
						$('.count').html('');
						$('.count').css('display', 'none');
					}
				}
			});
		}

		load_unseen_notification();

		$(document).on('click', '.dt', function() {
			$('.count').html('');
			$('.count').css('display', 'none');
			load_unseen_notification('yes');
		});

		setInterval(function() {
			load_unseen_notification();
		}, 5000);
	});
</script>




                    <div class="star-container chat">
                    <a href="contact.php"><i class="fa-regular fa-comment-dots"></i></a>
                    </div>
                    
                    <div class="DROP-PROFIL">
                   <div class="photp-pro">
                   <img src="img/<?=$_SESSION['pst']?>" alt="avatar" style="height: 45px ;width:45px ;">
                    </div>
                    <div class="dropdown-menu-pro4">
                    
                      <div class="MY-PROF">
                        <a href="profile.php">
                        <i class='bx bx-user-circle'></i>
                        <div class="MY-PROF-text">
                            <p>My Profil</p>
                          </a>
                        </div></div>
                        <div class="MY-PROF">
                          <a href="security.php">
                          <i class='bx bxs-lock-alt'></i>
                          <div class="MY-PROF-text">
                              <p>Security</p>
                            </a>
                          </div></div>
                          <div class="MY-PROF">
                            <a href="../logout.php">
                            <i class='bx bx-log-out-circle'></i>
                            <div class="MY-PROF-text">
                                <p>Log Out</p>
                              </a>
                            </div></div>
                       
                    </div>
                  </div>
                </div>
            </div>
        </header>        
            <section id="home-section" class="page-section ">
   <div class="row">
    
                    <div class="home__container bd-container bd-grid">
                        <br><br><br><br><br>
    
                        
                            <div class="wrapper">
                                <div class="home__img">
                                    <img src="img/password.png" alt="">
                                </div>
            
                        <form action="">
                            <h2>Update Password</h2>
                            <div class="input-box">
                                <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                                <input type="password" required>
                                <label>Password</label>
                                    </div>
                           
                                    <div class="input-box">
                                        <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                                        <input type="password" required>
                                        <label>New Password</label>
                                            </div>
                                            <div class="input-box">
                                                <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                                                <input type="password" required>
                                                <label>Confirm  new Password</label>
                                                    </div>
                                                    <div class="remember-forgot">
                                                       
                                                        <a href="#" id="myOtherButton6">Forgot Password? </a>
                                                        </div> 
                                                        <br>  
                                                        <div class="pass">
                                                            <button type="submit" id="myOtherButton10"><i class='bx bx-arrow-back bx-tada' ></i>&nbsp; Cancel</button> &nbsp;&nbsp;
                                                            <button type="submit" id="myOtherButton10"><i class='bx bx-edit bx-tada' ></i>&nbsp; update</button> 
                                                        </div>
                                </form>
                        
                      
                        </div>
                        </div>   
                    </div>
                    </div>
               
              </section>
       
<br><br><br><br><br><br><br>
        <footer>
            <div class="copyright">
                copyright &copy; 2023 | Staget made with ❤️ by girls team | all right reserved.
            </div>
        </footer>


    </main>
   </div>

    <div class="switcher-container">
        <div class="switcher-icon">
            <i class="fas fa-cog"></i>
        </div>
        <div class="switcher-close">
            <i class="fas fa-times"></i>
        </div>
        <div class="switcher-header">
            <h3>theme customizer</h3>
            <h4>theme styles</h4>
        </div>
        <div class="switcher-body">
            <ul>
                <li data-color="#f7f7f7" class="active"></li>
                <li data-color="#212529"></li>
            </ul>
        </div>
    </div>
    <a href="#top" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>
    
    
   </div>



    

   <script>
const dropdownToggle = document.querySelector(".dropdown-toggle");

dropdownToggle.addEventListener("click", function (event) {
    event.preventDefault();
    const parentLi = this.parentElement;
    parentLi.classList.toggle("open");
});







</script>
   

</body>
</html>


 
<?php 
}else{
     header("Location: ../login.php?flindex");
     exit();
}
 ?>