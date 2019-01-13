<html>
<head>
	
	<title>PSI-PHI</title>
	
	<style type="text/css">
	body{
		background-color: black;
		font-family:'courier new';
		/*background-image: url('1.jpg') ;*/
		background-size: cover;
		background-position: center;

	}
::-webkit-scrollbar{
	display: none;
}
	.mainBorder{
		width: 92%;
		height: 83%;
		border-radius: 5px;
		border-color: #4c9051;
		border-style: solid;
		border-width: 1px;
		margin: 2%;
		padding: 2%;
		color: #4c9051;
		box-shadow: 0 0 10px #4c9051;
	}

	.circle_300_300{
		width: 300px;
		height: 300px;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: #4c9051;
		background-color: #012e0b;
		opacity: 0;
		/*box-shadow: 0 0 6px #4c9051;*/
	}

	.circle_250_250{
		width: 250px;
		height: 250px;
		border-radius: 50%;
		border-width: 8px;
		/*border: 10px dashed #4c9051;*/
		border-style: dashed;
		border-color: #4c9051;	
		background-color: #012e0b;	
		opacity: 0;
		/*box-shadow: 0 0 6px #4c9051;*/
		
	}

	.circle_200_200{
		width: 200px;
		height: 200px;
		background-color: #012e0b;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: #4c9051;	
		opacity: 0;	
		/*box-shadow: 0 0 6px #4c9051;*/
		
	}

	.circle_150_150{
		width: 150px;
		height: 150px;
		background-color: #012e0b;
		border-radius: 50%;
		border-width: 4px;
		border-style: dashed;
		border-color: #4c9051;	
		opacity: 0;	
		/*box-shadow: 0 0 6px #4c9051;*/
		
	}

	.circle_100_100{
		width: 100px;
		height: 100px;
		background-color: #012e0b;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: #4c9051;	
		opacity: 0;	
		/*box-shadow: 0 0 6px #4c9051;*/
		
	}

	.circle_40_40{
		width: 40px;
		height: 40px;
		background-color: #4c9051;
		border-radius: 50%;
		border-width: 1px;
		border-style: dashed;
		border-color: #4c9051;		
		box-shadow: 0 0 15px #4c9051;
		opacity: 0;
	}

	.center{
		position: absolute;
		top:0;
		bottom: 0;
		left: 0%;
		right: 25%;
		margin: auto;
	}

	.rotateLinear{
	-webkit-animation-name: rotateA; 
    -webkit-animation-duration: 4s; 
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-name: rotate; 
    -moz-animation-duration: 4s; 
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;	
	}

	.rotateEaseIn{
	-webkit-animation-name: rotate; 
    -webkit-animation-duration: 4s; 
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in;
    -moz-animation-name: rotate; 
    -moz-animation-duration: 4s; 
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: ease-in;	
	}

	.rotateEaseOut{
		
	-webkit-animation-name: rotate; 
    -webkit-animation-duration: 10s; 
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function:ease-in-out;
    -moz-animation-name: rotate; 
    -moz-animation-duration: 10s; 
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: ease-in-out;	
	}


@-webkit-keyframes rotate {
    from {-webkit-transform: rotate(0deg);}
    to {-webkit-transform: rotate(360deg);}
}

@-moz-keyframes rotate {
    from {-moz-transform: rotate(0deg);}
    to {-moz-transform: rotate(360deg);}
}


@-webkit-keyframes rotateA {
    from {-webkit-transform: rotate(360deg);}
    to {-webkit-transform: rotate(0deg);}
}

@-moz-keyframes rotateA {
    from {-moz-transform: rotate(360deg);}
    to {-moz-transform: rotate(0deg);}
}
.title{
	color:#4c9051;
	font-size: 50px;
	margin-top: 1%;
	text-align: center;
	text-shadow: 0 0 15px #4c9051;
	position: absolute;
	top:5%;
	left:0;
	right: 25%;
}
.utitle,.ptitle
{
  color:#4c9051;
	font-size: 30px;
	
	text-align: center;
	text-shadow: 0 0 15px #4c9051;	
}
fieldset{
	border-color: #4c9051;
	box-shadow: 0 0 5px #4c9051;
	color:#4c9051;
	font-size: 20px;
	border-radius: 10px;
	border-style: solid;
	border-width: 2px;
}

legend{
	box-shadow: 0 0 5px #4c9051;
	text-shadow: 0 0 5px #4c9051;
	border-radius: 25px;
	border-style: solid;
	border-width: 2px;
	padding: 3px 20px 3px;
	color: #4c9051;
	background-color: #012e0b; 
}
.login-box{
 box-shadow: 0 0 5px #4c9051;
	text-shadow: 0 0 5px #4c9051;
	border-radius: 25px;
	border-style: solid;
	border-width: 2px;
	padding: 3px 20px 3px;
	color: #4c9051;
	background-color: #012e0b; 
	font-size: 27px;
	border-color:#4c9051;	
}
.auth{
	width: 33%;
	float: right;
	position: absolute;
	top:33%;
	opacity: 0;
	right: -3%;
	color: #4c9051;
	background-color:transparent;
}

.authform {
	color: #4c9051;
	width: 50%;
}

.authform_forgot {
	color: #4c9051;
	text-shadow: 0 0 5px #4c9051;
}


input{
	background-color: #4c9051;
	color: white;
	border: none;
	height: 30px;
	padding:10px;
	border-radius: 10px;
}
.ubox,.pbox{
background-color: transparent;
	color: #4c9051;
	font-size: 25px;
	border: none;
	text-align: center;
	width: 70%;
	padding:10px;
	border-radius: 10px;
			border-color: #4c9051;
		border-style: solid;
		border-width: 1px;
		box-shadow: 0 0 10px #4c9051;

}
.ubox,.pbox:focus{
	outline: none;
	font-family:'courier new';
}

.button{
	width: 50%;
	color:#4c9051;
	border-radius: 25px;
	box-shadow: 0 0 5px #4c9051;
	padding:5px;
	text-align: center;
	float: right;
}

.menu{
	position: absolute;
	top: 25%;
	left: 0%
	transform-origin: left;
	transform: translate(-25px,0);
}

.sidebar{
	color:#4c9051;
	width: 180px;
	font-size: 20px;
	border-radius: 0 25px 0;
	box-shadow: 0 0 5px #4c9051;
	padding:15px 15px 15px 35px;
	margin-top: 16%;
	text-align: center;
	background-color: #012e0b;
	transition: all .2s ease-in-out;
	opacity: 0;
}

.sidebar:hover{
	background-color: #4c9051;
	color:#012e0b;
    -moz-box-shadow: inset 0 0 10px #012e0b;
	-webkit-box-shadow: inset 0 0 10px #012e0b;
	box-shadow: inset 0 0 10px #012e0b;
    cursor: hand;

}

.sideDisp{
	text-align: justify;
}

#home-show{
	font-size: 13px;
}
.right
{
top: 0%;

 position: absolute;

	right: 0%;
	transform-origin: left;	
}
.left
{
top: 0%;

 position: absolute;

	left: 0%;
	transform-origin: left;		
}
.btn-left
{
 bottom: 0%;

 position: absolute;

	left: 0%;
	transform-origin: left;	
}
.btn-right
{
 bottom: 0%;

 position: absolute;

right: 0%;
	transform-origin: right;	
}
.serve
{
	margin-top: 10%;
	margin-left: 5%;
	margin-right: 5%;
	margin-bottom: 5%;
}
</style>

<script src="js/particles.js"></script>
<!-- <script src='https://code.responsivevoice.org/responsivevoice.js'></script> -->
</head>
<body>
	<div id="particles-js" >
		
	</div>
	<div class="left" >
			<img src="images/bgAnim1.png" alt="img">
		</div>
	<div class="soundCont"></div>
    <div class="soundCont1"></div>
	<div class="">
		<div class="title">[ SYNAPSE ]</div>
		<div class="center rotateEaseIn circle_300_300"></div>
		<div class="center rotateEaseout circle_250_250">
				
		</div>
		<div class="center rotateEaseIn circle_200_200">
			<img src="images/bgAnim1.png" alt="img">
		</div>
		

	</div>
   <div class="right">
   	<img src="images/bgAnim1.png" alt="img">
   </div>
	<div class="auth">
		<fieldset id="display-board">
			<legend id="display-tit">
				Authentication
			</legend>

			<div id="home-show" class="sideDisp">
				<p style="font-size:1.9em;"><strong>The world has lots of problems, and we as human being are the major contributors to these. So it is our responsibility to give back solutions, to make this world a better place to live in. Introducing this nationwide hackathon PSI-PHI, where you use all your coding skills and algorithmic approaches to help resolve major issues that the world faces. Gear up for that!
				</strong></p>
				</div>

			<div id="about-show" class="sideDisp">
				<p style="font-size:1.1em;"><strong>We are a group of engineering undergraduates from NIT ROUKELA. We represent some mathematics enthusiasts through an official mathematics club.1 AXIOM. We at AXIOM are committed to the mathematical blossoming in the hearts of young and adults. To remove and uproot the fear from base level related to mathematics is the sole aim that we carry forward. Making mathematics fun, making mathematics conquerable through tricks and techniques, is all that we are trying to culminate among the brains of the masses.
				</strong></p>
			</div>

			

				<div id="contact-show" class="sideDisp">
					 <strong><p style="font-size:1.4em;"> Email Us At: </p>	<p style="font-size:1.2em;">axiom.nitr@gmail.com</p><br><p style="font-size:1.4em;">  Call Us At</p><p style="font-size:1.2em;"> Sruti: (+91)7789908905 <br>
                            Akshat: (+91) 8280532397</p><br></strong>
				</div>
                <div id="login-show" class="sideDisp">
                   <center><div id="error" style="color:#ff8932;"></div></center>
                  
                	<div class="form-group" >
                		<div class="form-body1" style="text-align: center;">
                			<p class="utitle">Email </p>
                			<input type="text" name="lemail" id="lemail" class="ubox">
                			<p class="ptitle">Password </p>
                			<input type="password" name="lPassword" id="lPassword" class="pbox"><br><br>
                			<button id="login-box" class="login-box" >Login</button>
                		</div>
                	</div>
                	<div id="login-result"></div>
                </div>
                <div id="signup-show" class="sideDisp">
                    <center><div id="error1" style="color:#ff8932;"></div></center>       
                	<div class="form-group">
                		<div class="form-body" id="s1" style="text-align: center;">
                			<p class="utitle">Username </p>
                			<input type="text" name="susername" id="susername" class="ubox">
                			<p class="ptitle">Email </p>
                			<input type="Email" name="semail" id="semail" class="ubox"><br><br/>
                			<div class="serve">
                				 <div class="btn-right"><button id="r1" class="login-box" >Next</button></div>
                			 
                			</div>
                			
                			
                		</div>
                		<div class="form-body" id="s2" style="text-align: center;">
                			<p class="utitle">Address </p>
                			<input type="text" name="saddress" id="saddress" class="ubox">
                			<p class="ptitle">Phoneno </p>
                			<input type="tel" name="sphonoeno" id="sphonoeno" class="ubox"><br><br/>
                			<div class="serve">
                				 <div class="btn-right"><button id="r2" class="login-box" >Next</button></div>
                			 <div class="btn-left"><button id="l1" class="login-box" >Prev</button></div>
                			</div>
                			
                			
                		</div>
                		<div class="form-body" id="s3" style="text-align: center;">
                			<p class="utitle">Institutename </p>
                			<input type="text" name="sinstiname" id="sinstiname" class="ubox">
                			<p class="ptitle">Password </p>
                			<input type="password" name="spassword" id="spassword" class="ubox"><br><br/>
                			<div class="serve">
                				 <div class="btn"><button id="signup-box" class="login-box" >Signup</button></div>
                			 <div class="btn-left"><button id="l2" class="login-box" >Prev</button></div>
                			</div>
                			
                			
                		</div>
                	</div>
                </div>
				

			</fieldset>
		</div>

			
		

	<div class="menu">
		<li class="sidebar" id="home"><b>Home</b></li>
		<li class="sidebar" id="about"><b>About Us</b></li>
		<li class="sidebar" id="contact"><b>Contact Us</b></li>
		<li class="sidebar" id="login"><b>Login</b></li>
		<li class="sidebar" id="signup"><b>Signup</b></li>
	</div>
<script src="js/app.js"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/transit.min.js"></script>



<script type="text/javascript">
	
 $(document).ready(function(){
      $("#lemail").focusout(function(){
       var email=$("#lemail").val();
       var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");  
       var link_email = "email="+email;
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
              $("#error").html("Not a valid Email address");
              return false;
          }
          else{
              $("#error").html("<div style=\"color:00ff00; height:15px;padding : 10px;\">Valid Email Id</div>");
          }
        });
     });

     $(document).ready(function(){
      $("#semail").focusout(function(){
       var email=$("#semail").val();
       var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");  
       var link_email = "email="+email;
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
              $("#error1").html("Not a valid Email address");
              return false;
          }
          else{
              $("#error1").html("<div style=\"color:00ff00; height:15px;padding : 10px;\">Valid Email Id</div>");
          }
        });
     });

 	 $(document).ready(function(){
      $("#sphoneno").focusout(function(){
       var phone=$("#sphoneno").val();
       if(phone.length != 10){
		   $("#error1").html("Not a valid phone number");
	   }
	   else{
		   $("#error1").html("<div style=\"color:#00ff00;height:15px;padding : 10px;\">Valid phone number</div>");
	   }
	   
		   
        
        });
     });

    $(document).ready(function(){
          
       $("#home-show").animate({display:"block"});
       $("#about-show").hide();
       $("#contact-show").hide();
       $("#login-show").hide();
       $("#signup-show").hide();
       $("#s2").hide();
       $("#s3").hide();
       //alert('hii');
       function talkBack(message){
	var voices = window.speechSynthesis.getVoices();
	var msg = new SpeechSynthesisUtterance();
	msg.voice = voices[10];
	msg.voiceURI = 'native';
	msg.volume = 1; // 0 to 1
	msg.rate = .8; // 0.1 to 10
	msg.pitch = 0; //0 to 2
	msg.text = message;
	msg.lang = 'en-US';	
	speechSynthesis.speak(msg);
}


       function showLeftMenu(){
			$(".menu").stop(true,true);
			$(".menu").animate({'left':'-0px'},400,function(){});
		}

		function hideLeftMenu(){
			$(".menu").stop(true,true);
			$(".menu").animate({'left':'-160px'},1000,function(){});
		}

		$(".menu").unbind('mouseleave').bind('mouseleave',function(){
			hideLeftMenu();
		});
		
		$(".menu").unbind('mouseenter').bind('mouseenter',function(){
				showLeftMenu();			
		});

       $(".sidebar").css({'display':'block'});

		     
	    		setTimeout(function(){
                
				playEventSound('sounds/slanesh__bip.mp3',$(".soundCont1"));

					$('.circle_40_40').animate({opacity:1});
					$('.circle_150_150').animate({opacity:1});
					$('.circle_200_200').animate({opacity:1});
					//console.log('second');
				},1200);

				setTimeout(function(){
					$('.circle_300_300').animate({opacity:1});
					$('.circle_250_250').animate({opacity:1});
					//console.log('third');
				},1400);
                 setTimeout(function(){
                 	$(".auth").animate({right:'-3%', opacity:0},200,function(){
					playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
					$(".auth").animate({right:'3%',opacity:'1'},100,function(){});
					//console.log('fourth');		
				});
                 },200);
				setTimeout(function(){
                   	$(".sidebar").each(function(i,e) {
			          var that = this;
			                 setTimeout(function(){

				             $(that).transition({ opacity : 1},function(){});
				
				                // console.log('first'+i);
			                  },750);
			                 });
                            setTimeout(function(){
                            	showLeftMenu();
                            },1500);

	                          setTimeout(function(){
                            	hideLeftMenu();
                            },2000);
        
	                        
				},1400);
			
 
                
			
	    	
	   		

       $("#home-show").animate({opacity:1});

       $('#display-tit').html('Home');

       var count =0;
       setInterval(function(){

       	 if(count%5 == 0){
       	 	$('.circle_40_40').css('box-shadow', '0px 0px 5px #4c9051');
       	 	$('.circle_150_150').css('box-shadow', '0px 0px 15px #4c9051');
       	 	$('.circle_250_250').css('box-shadow', '0px 0px 15px #4c9051');
       	 	$('#display-tit').css('box-shadow', '0px 0px 25px #4c9051');
       	 }else{
       	 	$('.circle_40_40').css('box-shadow', '0px 0px 45px #4c9051');
       	 	$('.circle_150_150').css('box-shadow', '0px 0px 35px #4c9051');
       	 	$('.circle_250_250').css('box-shadow', '0px 0px 35px #4c9051');
       	 	$('#display-tit').css('box-shadow', '0px 0px 25px #4c9051');
       	 }

       	 if(count%2 == 0){
       	 	$('#display-tit').css('box-shadow', '0px 0px 25px #4c9051');
       	 }else{
       	 	$('#display-tit').css('box-shadow', '0px 0px 25px #4c9051');
       	 }
       	 if(count%2 == 0){
       	 	$('#login-box').css('box-shadow', '0px 0px 15px #4c9051');
       	 }else{
       	 	$('#login-box').css('box-shadow', '0px 0px 25px #4c9051');
       	 }
       	  if(count%2 == 0){
       	 	$('.ubox').css('box-shadow', '0px 0px 15px #4c9051');
       	 }else{
       	 	$('.ubox').css('box-shadow', '0px 0px 25px #4c9051');
       	 }
       	  if(count%2 == 0){
       	 	$('.pbox').css('box-shadow', '0px 0px 15px #4c9051');
       	 }else{
       	 	$('.pbox').css('box-shadow', '0px 0px 25px #4c9051');
       	 }


       	 count++;
        //console.log('fifth');
         
       },300);

		var playEventSound = function(soundfile,elem){
			elem.html("");
			elem.html("<embed src='"+soundfile+"' hidden='true' />");
		}

     
        	
        
   
       $('#home').click(function(){
       		playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
       		$('#display-tit').html('Home');
        	$("#home-show").slideDown();
       });

        $('#about').click(function(){
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
       		$('#display-tit').html('About Us');
        	$("#about-show").slideDown();
       });

        $('#contact').click(function(){
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
        	$('#display-tit').html('Contact');
        	$("#contact-show").slideDown();
        });
        $('#login').click(function(){
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
        	$('#display-tit').html('Login');
        	$("#login-show").slideDown();
        });
         $('#signup').click(function(){
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.sideDisp').slideUp();
        	$('#display-tit').html('signup');
        	$("#signup-show").slideDown();
        });
          $('#r1').click(function(){
          	$('#error1').html("");
          	var username = $('#susername').val();
          	var email = $('#semail').val();
          	if(username !='')
          	{
              if(email !='')
              {
              	$.ajax({
              		url:'email-check.php',
              		type:'POST',
              		data:{'email':email},
              		success:function(data){
              		  if(data == "1")
              		  {
              		  	 $("#error1").html("Email Id already Exists.");
                         talkBack("This email is already registered");
                         $('#semail').val(null);
              		  }	
              		  else
              		  {
                          playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		               $('.form-body').slideUp();
        	
        	               $("#s2").slideDown();
              		  }
              		}
              	});
                
              }
              else
              {
              	$("#error1").html("Please Give your Email id");
              	talkBack("sir please fill the email");
              }
          	}
          	else
          	{
          		$("#error1").html("Please Give a username");
              talkBack("sir please fill the username");
          	}
        	
        });
           $('#l1').click(function(){
           	$('#error1').html("");
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.form-body').slideUp();
        	
        	$("#s1").slideDown();
        });
            $('#r2').click(function(){
            	$('#error1').html("");
            	var address = $('#saddress').val();
            	var phoneno = $('#sphonoeno').val(); 
            	if(address != '')
            	{
                  if(phoneno != '')
                  {
                    playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		        $('.form-body').slideUp();
        	
        	        $("#s3").slideDown();
                  }
                  else
                  {
                  	$("#error1").html("Give your phone number");
                    talkBack("sir please fill the phone number");
                  }
            	}
            	else
            	{
            		$("#error1").html("Fields can't be empty");
                  talkBack("sir please fill the address");
            	}
        	
        });
             $('#l2').click(function(){
             	$('#error1').html("");
        	playEventSound('sounds/servo_motor.mp3',$(".soundCont"));
       		$('.form-body').slideUp();
        	
        	$("#s2").slideDown();
        });


        

        $(".sidebar").hover(function(){
        			playEventSound('sounds/multimedia_rollover_046.mp3',$(".soundCont"));

        });
                setTimeout(function(){
        	// talkBack("sir please read the rules carefuly");
        	console.log('sixth');
        },12000);
            setInterval(function(){
                talkBack('sir any problem');
                talkBack('may i help you');
                showLeftMenu();
            },2000000);
       $('#login-box').click(function(){
       
       var email = $('#lemail').val();
       var password = $('#lPassword').val();
       
       if(email != '')
       {
          if(password != '')
          {
            $.ajax({
            	url: 'login-check.php',
            	type: 'POST',
            	data: {'email':email,'password':password},
            	success:function(response)
            	{
                      //console.log(response);
            		if(response=="success")
            		{
            			$("#error").html("<div style=\"color=#00ff00; height:15px;\">Login Successfully!</div>");
                        window.location="play.php";
            		}else if(response=="check")
            		{
            			$("#error").html("please check your details!");
                      talkBack("Please check your details.");
            		}
            		else
            		{
            			$("#error").html("please try after sometime!");
				        talkBack(" please try after sometime");
				    }
            	}
            });
          }
          else
          {
          	$("#error").html("Please give your password.");
          	
          	talkBack(" please fill the password");
          }
       }
       else
       {
       		$("#error").html("Please provide your Email id.");
            talkBack(" please fill the email");
       }

       });   

       $('#signup-box').click(function(){
       	  $('#error1').html("");
          var username = $('#susername').val();
          var email = $('#semail').val();
          var phoneno = $('#sphonoeno').val();
          var address = $('#saddress').val();
          var institute = $('#sinstiname').val();
          var password = $('#spassword').val();
          if(institute  !='' || email != '' || phoneno != '' || address != '' || username != '')
          {
          	  var atpos = email.indexOf("@");
              var dotpos = email.lastIndexOf(".");  
              var link_email = "email="+email;
              if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
                   $("#error1").html("Not a valid Email address");
                   return false;
              }
              if(phoneno.length != 10){
		          $("#error1").html("Not a valid phone number");
	          }
	         
              else if(password !='')
              {
                $.ajax({
             	  url: 'signup-check.php',
          	      type: 'POST',
          	      data: {'username':username,'email':email,'phoneno':phoneno,'address':address,'institute':institute,'password':password},
          	      success:function(response){
          	      	//console.log(response);
               	 //console.log(response);
               if(response == "success")
               {

               	 $("#error1").html("<div style=\"color:#00ff00; height:15px;\">Successfully Registered");
                 talkBack("You have successfully registered");
                 setTimeout(function(){
                   window.location="play.php";	
                 },1000);
                 
               }
               else if(response == "failure")
               {
               	$("#error1").html("Please Register Again.");
                talkBack("please register again");
               }
               else if(response == "Username exists")
               {
               	$("#error1").html("Username already exists");
                talkBack("please give another username");
               }
                else if(response == "Email already exists")
               {
               	$("#error1").html("Email already exists");
                talkBack("Email Id already exists");
               }
          	}
            });
            }
            else
            {
            	$("#error1").html("Please give your password.");
              	talkBack("sir please fill the password");
            }
          }
          else
          {
          	    $('#error1').html("Fields can't be empty");
            	talkBack("Please provide all fields");
          }
         

       });  

      
    });
</script>
</body>
</html>