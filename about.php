<html>
        
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon" />
    
    <style>
    
  	   @import url(https://fonts.googleapis.com/css?family=Roboto:300);
           #myVideo {
                position: fixed;
                right: 0;
                bottom: 10;
                min-width: 100%; 
                min-height: 100%;
                z-index:-1;
            }
            
            .content {
                position: fixed;
                bottom:0;
                background: rgba(0, 0, 0, 0.5);
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
            }
            
            
            
            *{
                font:'Roboto', sans-serif;
            }
            
            
            .learn-more{
                margin-top:300px;
                background-color:#a95401;
                font-family:"Roboto", sans-serif;
                color:white;
                font-size:25px;
                padding-bottom:5%;
            }
            
            
            
            .mytab{
                border:3px solid white;
                
            }
             
            @media screen and (min-width: 600px) {
             
            
            .jumbotron{
                margin-top:15px;
                margin-bottom:15px;
                height:500px;
                width:auto;
                text-align:center;
                font-family:'Roboto', sans-serif;
                color:white;
                
            }
          
            .full{
                
                background: #a95401 ; /* fallback for old browsers */
                color:white;
                font-family:"Roboto", sans-serif;
                
                
                
            }
            #navtable{
               
                width:100%;
                
               
            }
            #navbar{
                
                width: 100%; 
                margin-left:auto;
                margin-right:auto;
                background-color:grey;
             
             
            }
            
            #navrow{
                background-color:#666699;
            }
            .navtr{
                padding:0;
                text-align:center;
                height:100%;
                padding-top:0.5%;
                padding-bottom:0.5%;
            }
            .navtr:hover{
                background-color:yellow;
            }
            .navtr:active{
                background-color:Red;
            }
            html{
               height:100%;
               font-family:'Roboto';
               
           }
          
            
            body{
                background: linear-gradient(-45deg, #8080ff, purple, #944dff, gray);
                animation: gradient 15s ease infinite;
                
            }
            
            @keyframes gradient {
            	0% {
            		background-position: 0% 50%;
            	}
            	50% {
            		background-position: 100% 50%;
            	}
            	100% {
            		background-position: 0% 50%;
            	}
            }
            a{
                width: 100%;
                display: block;
                color:black;
                text-decoration:none;
            }


    </style>
 
  <head>
    <title>About</title>
  </head>
  <body>
     
     <video autoplay muted loop id="myVideo">
        <source src="city.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    
      
    <div id = "navbar">
        <h1> Welcome To My Personal Website</h1>
        <table id="navtable">
              <tr id = "navrow">
                 <td class="navtr"><a href = "main.php">Home</a></td> 
                 <td class="navtr"><a href = "projects.php">Projects</a></td>
                <td class="navtr"><a href = "contact.php">Contact Me</a></td>
                 <td class="navtr"><a href = "about.php">About</a></td>
            </tr>
        </table>
    </div>
    
    <div class="jumbotron">
      <div class="container">
        <div style = "margin-top: 300px;">

            <h1>Welcome to my about me!</h1>
            <p>Scroll down to learn about me!</p>
            
        </div>
       
      </div>
    </div>
    <div>
    	<div id="about" class=" neighborhood-guides fade-in">
        
        	<div class=" full container">
            		<h2 style = "font-size:40px;"><center>Who am I?</center></h2>
            		<p style = "font-size:25px;">I am a university student currently studying at the University of Waterloo in engineering. I am intrested in programming and game development. You can check my projects page for more information on that. I am currently learning the Unity and Unreal game engines. I know a variety of programming languages like C/C++, HTML/CSS/JavaScript, Java, PHP, MySQL, Python. I am also intrested in computers and networking. I have a good understanding of Ubuntu Server and Kali Linux. 
            		</p>
            		<div class="row">
                		<div class="col-md-4">
                			<div class="thumbnail">
                    				<center><img style = "width:601px; height:400px; margin-bottom:15px;" src="https://www.brocksolutions.com/wp-content/uploads/2020/02/University-of-Waterloo.jpg"></center>
               				</div>
                
           			</div>
        		</div>
    		</div>
    <div class="learn-more">
			<h1 style = "font-size:39px;"><center>What am I intrested in?</center></h1>
			<center><table class = "mytab">
			    <tr>
			    <th>
			        <h3 style = "font-size:35px;">TV Shows and Movies</h3>
			       
			    </th>
			    <th >
			       <h3 style = "font-size:35px;">Video Games</h3>
			    </th>
			    </tr>
			    <tr>
			        <td style = "font-size:25px;">I mainly watch anything with superheroes. For instance, Marvel movies and the DC tv shows, like the Flash. In fact, my favourite superhero is Spiderman. I also like dramatic shows like Breaking Bad and Better Call Saul. I also watch comedy tv shows like Brooklyn 99. </td>
			        <td style = "font-size:25px;">Video games are basically the centre of my life. It is the only thing I know how to talk about. I am a PC gamer, obviously. I play games like CSGO, Rainbow Six Siege, Valorant and GTAV. I play most of the major strategic FPS games. I have also played DOTA 2 and League of Legends, but I am terrible at those games. I also play competitve Pokemon time to time.</td>
			    </tr>
			</table></center> 

        
    </div>
    
  </body>
</html>
