<html>
    <head>
        <title>Contact Me!</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <style>
            *{
                margin:0;
                padding: 0;
                box-sizing: border-box;
                font-family:'Roboto';
            }
            html{
                height: 100%;
            }
            body{
                font-family: 'Segoe UI', sans-serif;;
                font-size: 1rem;
                line-height: 1.6;
                height: 100%;
            }
            .mainDiv {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                background: #fafafa;
                background-color:white;
            }
            .login-form{
                width: 50vh;
                height:45%;
                margin: 0 auto;
                border: 1px solid #ddd;
                padding: 2rem;
                background: #ffffff;
                text-align:center;
                position:relative;
                background-color:#FFFFFF;
            }
            #header{
                
                text-align:center;
                margin-bottom:10%;
                font-size:30px;
                position:relative;
                
            }
            #button{
                text-align:center;
                position:relative;
                margin-top:10%;
                height:10%;
                font-size:1vw; 
                width:30%;
                border-radius:7px;
          
                
            }
            .input{
                
                position:relative;
                margin:0 auto;
                margin-top:5%;
                height:10%;
                width:80%;
                font-weight:20px;
                
            }
            #Video{
                  position: fixed;
                  right: 0;
                  bottom: 0;
                  min-width: 100%;
                  min-height: 100%;
          
                  
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
            
            #back{
                position:relative;
                right:40%;
                text-align:center;
                display:inline;
            }
          
             
           

        </style>
    </head>
    <body>
       
        <video autoplay muted loop id="Video">
            <source src="video.mov">
        </video>
        
        <div class="mainDiv">
            
            <form class="login-form" action="/confirm.php" method="POST" target = "_blank">
                    <a href="main.php"><button id= "back" type = "button"><--</button></a>
                    <h3 id = "header">Contact Me</h3>
                    <input name = "subject" class = input type="text"  placeholder="Subject"><br>
                    <input name = "msg" class = input type="text" placeholder="Short message"><br>
                    <button id = "button"  type="submit">Send</button>
                </div>
            </form>
        </div>
    </body>
</html>
