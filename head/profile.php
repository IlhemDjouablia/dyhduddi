<?php 
session_start();

if (isset($_SESSION['idhod']) && isset($_SESSION['fnamehod'])) {

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
    <link rel="stylesheet" href="css/profile.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
section#profil {
   
   height: 500px;
   padding: 30px;
 }
 
 @media screen and (max-width: 768px) {
   section#profil {
     height: 800px;
    
   }
 }
 
 
 .row{
   position: absolute;
 top: 190%;
   left: 60%;
   transform: translate(-50%,-50%);
   width: 76%;
   height: 100%;
   display: flex;
   box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
   background: #ffffff;
 }
 
 .row .left{
   width: 35%;
   height:700% ;
   font-family: 'Josefin Sans', sans-serif;
   background: #8041f5ab;
   padding: 30px 25px;
   border-top-left-radius: 5px;
   border-bottom-left-radius: 5px;
   text-align: center;
   color: #fff;
  ;
 }
 
 .row .left img{
   border-radius: 15px;
   margin-top: 70px;
   margin-bottom: 40px;
 }
 
 .row .left h4{
   margin-bottom: 30px;
   font-size: 20px;
   font-weight: bolder;
   color: #ffffff;
   font-family: 'Josefin Sans', sans-serif;
 }
 
 .left p{
   font-size: 18px;
   color: #ffffff;
   font-family: 'Josefin Sans', sans-serif;
 }
 
  .right{
   width: 65%;
 
   background: #ffffff;
   padding: 60px 40px;
   border-top-right-radius: 15px;
   border-bottom-right-radius: 15px;
 }
 
  .right .info,
  .right .projects{
   margin-bottom: 20px;
 }
 
  .right .info h3,
  .right .projects h3{
     margin-bottom: 10px;
     padding-bottom: 15px;
     border-bottom: 1px solid #e0e0e041;
     color: #8041f5ab;
   text-transform: uppercase;
   letter-spacing: 2px;
   font-size: 17px;
   font-family: 'Josefin Sans', sans-serif;
 }
 
  .right .info_data,
  .right .projects_data{
   display: grid;
   /* justify-content: space-between; */
 }
 
  .right .info_data .data,
  .right .projects_data .data{
   width: 75%;
 }
 
  .right .info_data .data h4,
 .right .projects2_data .data h4{
     color: #353c4e;
     margin-bottom: 5px;
     font-size: 18px;
 
 }
 .info-pro {
   display: flex;
   align-items: center;
   margin-right: 20px;
   margin-bottom: 10px;
   font-family: 'Josefin Sans', sans-serif;
 }
 
 .info-pro p {
   margin-left: 10px;
   font-size: 13px;
 font-style: oblique;
 font-family: 'Josefin Sans', sans-serif;
 }
 
 .info-pro img {
   width: 35px;
   height: 35px;
   margin-right: 10px;
 }
 .data p span{
     font-family: 'Josefin Sans', sans-serif;
   color: #393c44b0;
   
 }
 .data {
 margin-bottom: 4px;
 }
 .data p span i{
     color: #8041f5ab;
 }
 
  .right .info_data .data p,
  .right .projects_data .data p{
   font-size: 17px;
   margin-bottom: 8px;
   color: #7c848bd3;
   font-weight: 400;
   margin-bottom: 0.3;
   font-style: oblique;
   font-family: 'Josefin Sans', sans-serif;
 }
 
  .button-PRO ul{
   display: flex;
  
 }
 
  .button-PRO ul li{
   margin-top: 12px;
   width: 150px;
   height: 43px;
   background: #8041f5ab;
   margin-right: 10px;
   border-radius: 9px;
   text-align: center;
   line-height: 45px;
  
 }
  .button-PRO ul li:hover{
   background-color: #8041f5da;
 }
  .button-PRO ul li a{
   color :#fff;
   display: block;
   font-size: 16px;
   text-decoration: none;
   
 }
  .button-PRO ul .up-pro{
 
   margin-left: 2cm;
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
                    <li class="active"><a href="index.php" data-section="home">
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
                                <li ><a href="ref.php"> <i class='bx bx-x-circle' style="font-size: 2rem;"></i>Refused</a></li>
                            </ul>
                        </li>
                    <li><a href="intern.php" data-section="company">
                        <i class="fa-solid fa-briefcase"></i>
                            <div class="title">List Of intern</div>
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
                    <i class="fa-solid fa-magnifying-glass fa-beat" style="color: #8041f5ab;"></i>
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
<a href="contact.php">
                    <div class="star-container chat">
                    <i class='bx bx-message-detail'></i>
                    </div></a>
                    <div class="DROP-PROFIL">
                   <div class="photp-pro">
                   <img src="img/<?=$_SESSION['phod']?>" alt="avatar" style="height: 45px ;width:45px ;">
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
        <section id="main" >


        <section  >
            
         
            <div class="row">
                           
                           <div class="left">
                               <img src="img/<?=$_SESSION['phod']?>" 
                               alt="user" width="150">
                               <h4><?=$_SESSION['fnamehod']." ".$_SESSION['lnamehod']?></h4>
                                <p><?=$_SESSION['dephod']?> head Of Departement</p>
                           </div>
                           <div class="right">
                               <div class="info">
                                   <h3><i class="fa-sharp fa-solid fa-user-graduate"></i>  Personal Information</h3>
                                   <div class="info_data">
                                        <div class="data">
                                        <p><span><i class='bx bx-user bx-tada' ></i>&nbsp; Full Name:</span> <?=$_SESSION['fnamehod']." ".$_SESSION['lnamehod']?></p>
                              </div>
                                     <div class="data">
                                       
                                        <p><span><i class='bx bx-envelope bx-tada' ></i> &nbsp; Email: </span><?=$_SESSION['emailhod']?></p>
                                     </div>
                                     
                                  <div class="data">
                                 
                                     <p><span><i class='bx bxs-calendar bx-tada' ></i>&nbsp; Birthday:</span> <?=$_SESSION['bdhod']?></p>
                               </div>
                                   </div>
                               </div>
                             
                             <div class="projects">
                                   <h3><i class="fa-sharp fa-solid fa-book"></i>  University Information</h3>
                                   <div class="projects_data">
                                   <div class="data">
                                   <span class="info-pro" >  <img src="img/ifa.png"> <p><span>   university: </span> Abdelhamid Mahri Constantine2</p></span>
                                     </div>
                                     <div class="data">
                                     <span class="info-pro" >  <img src="img/ifa.png"> <p><span>  Faculty: </span> NTIC</p></span>
                                  </div>
                                        <div class="data">
                                        <span class="info-pro" >  <img src="img/ifa.png"> <p><span>  Departement: </span> <?=$_SESSION['dephod']?></p></span>
                                        </div>
            
                             
                                 
                                   </div>
                               </div>
                             
                               <div class="button-PRO">
                       <ul>
                         <li><a href="index.php" class="sidebar-link btn-home" data-section="home"><i class='bx bx-arrow-back bx-tada' ></i>&nbsp;Back</a></li>
                         <li><a href="update.php" class="sidebar-link btn-home" data-section="edit"><i class='bx bx-edit bx-tada' ></i>&nbsp; Update</a></li>
                     </ul>
                 </div>
                           </div>
                       </div>
                       </div>
              
                     </section>    
<br><br><br>
        <footer style=" margin-top:20cm;">
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
    
    
 


<script>
    const dropdownToggle = document.querySelector(".dropdown-toggle");
    const activeListItem = document.querySelector(".submenu li.active");

    dropdownToggle.addEventListener("click", function (event) {
        event.preventDefault();
        const parentLi = this.parentElement;
        parentLi.classList.toggle("open");
    });

    // Check if there is an active list item and keep the dropdown open
    if (activeListItem) {
        const parentDropdown = activeListItem.closest(".submenu");
        const parentLi = parentDropdown.parentElement;
        parentLi.classList.add("open");
    }
</script>




    

    
   

<script>


let btnMenu = document.querySelector('.toggle-icon i');
let menu = document.querySelector('.sidebar-wrapper');
let closeBtn = document.querySelector('.close-menu i');
let switcherBtn = document.querySelector('.switcher-icon i');
let switcherContainer = document.querySelector('.switcher-container');
let switcherClose = document.querySelector('.switcher-close i');

//Function add Class
function addClass(button, containerName, className) {
    button.addEventListener('click', () => {
        containerName.classList.add(className);
    });
}

//Function remove Class
function removeClass(button, containerName, className) {
    button.addEventListener('click', () => {
        containerName.classList.remove(className);
    });
}

addClass(btnMenu, menu, 'active');
removeClass(closeBtn, menu, 'active');
addClass(switcherBtn, switcherContainer, 'open');
removeClass(switcherClose, switcherContainer, 'open');

//Change Color
let colorsBtn = document.querySelectorAll('.switcher-body ul li');

colorsBtn.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        colorsBtn.forEach((btn) => {
            btn.classList.remove('active');
        });
        btn.classList.add('active');
        if (e.target.dataset.color === "#212529") {
            document.documentElement.style.setProperty('--lightGray', e.target.dataset.color);
            document.documentElement.style.setProperty('--whiteColor', '#2b3035');
            document.documentElement.style.setProperty('--textColor', '#9ca2a8');
            //Set Colors in local storage
            let colors = [e.target.dataset.color, '#2b3035', '#9ca2a8'];
            localStorage.setItem("colors-options", JSON.stringify(colors));
        } else {
            document.documentElement.style.setProperty('--lightGray', e.target.dataset.color);
            document.documentElement.style.setProperty('--whiteColor', '#ffffff');
            document.documentElement.style.setProperty('--textColor', '#4c5258');
            //Set Colors in local storage
            let colors = [e.target.dataset.color, '#ffffff', '#4c5258'];
            localStorage.setItem("colors-options", JSON.stringify(colors));
        }
    });
});

//Read Colors From LocalStorage
let colorsStorage = JSON.parse(localStorage.getItem('colors-options'));
//Check If Local Storage is not empty
if (colorsStorage !== null) {
    document.documentElement.style.setProperty('--lightGray', colorsStorage[0]);
    document.documentElement.style.setProperty('--whiteColor', colorsStorage[1]);
    document.documentElement.style.setProperty('--textColor', colorsStorage[2]);
}
</script>



</body>
</html>
                <?php 
               }else{
                    header("Location: ../login.php");
                    exit();
               }
                ?>