<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OptiFlex-Maroc</title>
    
    <style>
        body, html {
            height: 100%;
            margin: 0;
            animation: fadeInAnimation ease 1.5s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
        }

        .bgimg {
            background-image: url('Assets/images/bg-image.jpg'); 
          
            height: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
            color: white;
            font-family: "Courier New", Courier, monospace;
            font-size: 40px;
            mix-blend-mode: darken;
            
            
        }

       
      
        .middle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;

        
        }
        h1{
            font-family:Jaramond;
        }

        hr {
            margin: auto;
            width: 40%;
        }

    
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: Navy;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .button:hover {
            background-color: Teal;
        }
        @keyframes fadeInAnimation {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
     }
}
#logo{ 
	position:fixed; 
	top:0px; 
	left:0px; 
    height:0.5px;
    width:0.5px
} 
    </style>
</head>
<body>
<div id="logo"> 
	<img  height ="150px " width="150px" src="Assets/images/logo.png" alt="logo"> 
</div> 
<div class="bgimg">
    
    <div class="middle">
        <h1>OptiFleet-Maroc</h1>
        <h2>BIENVENUE</h2>
        <hr>
        <br>
        <button class="button" onclick="location.href='Assets/Pages/Id-admin.php'">Administrateur</button>
        <button class="button" onclick="location.href='Assets/Pages/Id-employe.php'">Employee</button>
    </div>
    
</div>

</body>
</html>
