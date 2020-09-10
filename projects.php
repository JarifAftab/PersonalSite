<!DOCTYPE html>
<html>
    <head>
        <title>Jarif's Personal Website</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <style>
           html{
               height:100%;
               font-family:'Roboto';
               
           }
           h1{
                text-align:left;
                font-size:27px;
            }
            
            body{
                background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
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
            
            
            #navtable{
               
                width:100%;
               
            }
            #navbar{
                
                width: 100%; 
                margin-left:auto;
                margin-right:auto;
             
             
            }
            
            #navrow{
                background-color:#45CEEB
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
            
            #body{
                display: inline-block;
                height:70vh;
                width: 100%;
                background: green;
                position: relative;
                background-image:url("https://i.pinimg.com/originals/07/83/23/0783232b011f7d24f6fc11e4904070cd.jpg");
                background-size:cover;
                background-repeat:no-repeat;
                text-align:center;
              
            }
            #bodyheader{
                
                text-align:center;
                font-size:40px;
               padding-top:5%; 
               
                
            }
            
            .bodybutton{
                
                text-align:center;
                display:inline;
                background-color: #45CEEB; /* Green */
                border: none;
                color: white;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 1vw;
                cursor: pointer;
                margin: 0;
                position: relative;
                top: 10%;
                left: 0%;
                border-radius: 30px;
                width:12%;
                
            }
            
            .bodybuttonh{
                
                text-align:center;
                display:inline;
                background-color: #45CEEB; /* Green */
                border: none;
                color: white;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 1vw;
                cursor: pointer;
                margin: 0;
                position: relative;
                top: 10%;
                left: 0%;
                border-radius: 30px;
                width:12%;
                
            }
            
            
            #one{
                display: inline-block;
               
                width: 100%;
                background: skyblue;
                position: relative;
                background-image:url("https://www.ecopetit.cat/wpic/mpic/181-1814005_free-awesome-nature-images-high-resolution-nature-backgrounds.jpg");
                background-size:cover;
                background-repeat:no-repeat;
                font-size:25px;
                text-align:center;
              
            }
            
            #onep{
                
                position:relative;
                top:2%;
                
            }
            
            #two{
               display: inline-block;
             
                width: 100%;
                background:#87CEEB;
                position: relative; 
                text-align:center;
                overflow:hidden;
                
            }
            #twop{
                vertical-align:middle;
                top:50%;
                 -webkit-transform: translate(-50%,-50%);
                  transform: translate(-50%,-50%);
                  position: relative;
                  top: 35%;
                  left: 50%;
            }
            #Video{
                position:relative;
                width:50%;
                height:50%;
                margin-top:5%;
                margin-bottom:5%;
            }
            a{
                width: 100%;
                display: block;
                color:black;
                text-decoration:none;
            }
            
        #tablebody {
            /*margin-top:2%;*/
            background-color:white;
            text-align:center;
        
        }
        
        #table{
            width:100%;
        }
        
            
            
        </style>
    </head>
    
    <body>
        <div id = "navbar">
            <h1> Welcome To My Personal Website</h1>
            <table id="navtable">
               <tr id = "navrow">
                   <td class="navtr"><a href = "main.php">Home</a></td> 
                   <td class="navtr"><a href = "projects.php">Projects</a></td>
                    <td class="navtr"><a href = "contact.php">Contact Me</a></td>
                   <td class="navtr">About</td>
                </tr>
            </table>
        </div>
        <div id = "tablebody">
              
              <table id = "table">
                  <tr>
                      <th>Project Title</th>
                      <th>Date Completed</th>
                      <th>Description</th>
                      <th>Technologies Used</th>
                      <th>Link</th>
                  </tr>
			 <?php
                    
                    $db_host = "";
                    $db_user ="";
                    $db_pass = "";
                    $db_name ="";
                    
                    $dbc = @mysqli_connect($db_host, $db_user, $db_pass, $db_name) OR die("Could not connect to database".mysqli_connect_error());
                    
                    if(!$dbc){
                        ?>
                        <script>
                            alert("Could not connect!");
                        </script>
                        <?php
                    }
                    else{
                        ?>
                        <script>
                            alert("Connected succesfully");
                        </script>
                        <?php
                        $query = "SELECT projectTitle, dateComplete, summary, techUsed, link FROM Students";
                        $response = @mysqli_query($dbc,$query);
                        
                        while($row = @mysqli_fetch_array($response)){
                           
                           echo "<tr><td>". $row["projectTitle"]. "</td><td>". $row["dateComplete"] . "</td><td>". $row["summary"]. "</td><td>" .$row["techUsed"]. "</td><td>". $row["link"]."</td></tr>";
                            
                        }
                    }
                    
                  
                  ?>
                  
		</table>
                        
              
        </div>
        
        
    </body>
    
</html>
