<?php
    session_start();

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $con=mysqli_connect("localhost","root","","login");
        $localun=$_POST["Uname"];
        $localpw=$_POST["Pword"];
        
        if (mysqli_connect_error())
            echo "connection error";
        else
        {
            $sqlquery1="SELECT Username from login_details WHERE Username='$localun'";
            $resultset1=mysqli_query($con,$sqlquery1);
            if($row = mysqli_fetch_array($resultset1))
            {
                $sqlquery2="SELECT Username,PASSWORD from login_details WHERE Username='$localun' AND PASSWORD ='$localpw'";
                $resultset2=mysqli_query($con,$sqlquery2);
                if($row2 = mysqli_fetch_array($resultset2))
                {
                    $_SESSION["status"] = "valid";
                    $_SESSION['display'] ="LOGIN SUCCESSFUL.";  
                    header('location:menu.php');
                    exit();
                }   
                else
                {
                    $_SESSION["status"] = "invalid";
                    $_SESSION['display'] ="INVALID PASSWORD."; 
                }

            }
            else
            {
                $_SESSION["status"] = "invalid";
                $_SESSION['display'] ="INVALID USERNAME."; 
            }
       
        }
    }
    
    if (isset($_SESSION['display']))
    {
        echo $_SESSION['display'];
         $_SESSION['display'] =""; 
    }
?>
<html>
    <head>
        <title> Login Page </title>
        <style>
            .loginbox {text-align:center; width:50%; border-radius:8px; margin:0 auto; top:18%; 
                position:absolute; left:0; right:0; background:snow; color:teal; font-size:1.3em;
                box-shadow:-2px 2px 50px teal; }
            .loginhead{float:left; width:100%;text-align:center;font-size:1.8em;line-height:150%;
                background:white;color:teal;border-radius:8px 8px 0 0; border-bottom:3px solid teal; 
                padding:3px 0 3px 0;font-weight: bold }
            .logindetails{ padding:15% 0 6% 0;font-weight: bold}    
            .logindetails div{line-height:150%;margin-left:18%;text-align:left;}
            .logindetails input{border-radius:5px;font-size:90%;width:50%;line-height:160%;
                border:1px solid silver}
            .btn{margin:30px 0 0 15%; border-radius:9px;background:teal;color:white;padding:1% 5%;
                border:1px solid brown ;font-size:1.6em;font-family:"Times New Roman",Times,Serif;}
            .btn:hover{background:white;color:green;}
            .hero-image {
                        background-image: url("dd.jpg"); 
                        background-color: #cccccc; 
                        height: 400px;
                        background-position: center;
                        background-repeat: no-repeat; 
                        background-size: cover;
                        display:block;
                        
                        }
            .c{margin:0 auto;color:teal;text-align:center;font-weight: bold}
        </style> 
    </head>
    <body>
        <form action="login.php" method="POST">
        <div class="loginbox hero-image ">
            <label class="loginhead"> Login </label>
            <div class="logindetails">
                
                <div>
                    <label> Username </label>
                    <input type="text" name="Uname"/>  
                </div>
                <div style="margin-top:7%;">
                    <label> Password </label>
                    <input type="Password" name="Pword"/>  
                </div>
        </form>
                <div>
                    <input type="Submit" value="Login" class="btn"/>
                </div>   
            </div>
        </div>
    </body>
</html>