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
			  }); 






$(document).ready(function(){
		       $('#signup-box').click(function(){
		       	  $('#error1').html("");
		          var username = $('#susername').val();
		          var email = $('#semail').val();
		          var phoneno = $('#sphonoeno').val();
		          var address = $('#saddress').val();
		          var institute = $('#sinstiname').val();
		          var password = $('#spassword').val();
		          if(institute  !='' or email != '' or phoneno != '' or address != '' or username != '')
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
		          	      	console.log(data);
		               	 console.log(response);
		               if(response == "success")
		               {

		               	 $("#error").html("<div style="\color:#00ff00; height:15px;\">Successfully Registered");
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