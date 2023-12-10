<?php  
    require("connect.php");
    session_start();

    if (isset($_POST['login'])) 
    {
        $query="SELECT * FROM 'registered_user' WHERE'email'='$_POST[email_username]' or 'username'='$_POST[email_username]'"; 
        $result=mysqli_query($conn, $query);
        if($result)
        {
            if(mysqli_num_rows($result)==1)
            {
                $result_fetch+=mysqli_fetch_assoc($result);
                if(password_verify($_POST['password'],$result_fetch['password']))
                {
                    $_SESSION['logged_in'] == true;
                    $_SESSION['username'] = $result_fetch['username'];
                    header("location: index.php");
                }
                else
                {
                    echo"
                <script>
                    alert('Password is incorrect');
                    window.location.herf='index.php';
                </script>
            ";
                }
            }
            else{
                echo"
                <script>
                    alert('Email or username is not registered');
                    window.location.herf='index.php';
                </script>
            ";
            }
        }
        else
        {
            echo"
                    <script>
                        alert('cannot run query');
                        window.location.herf='index.php';
                    </script>
                ";
        }
    }




    if (isset($_POST['register'])) 
    {
        $user_exist_query="SELECT * FROM 'registered_user' WHERE'username'='$_POST[username]' or 'email'='$_POST[email]'";
        $result=mysqli_query($con, $user_exist_query);

        if($result)
        {
            if(mysqli_num_rows($result)> 0){
                $result_fetch=mysqli_fetch_assoc($result);
                if($result_fetch['username']==$_POST['username'])
                {
                    echo"
                    <script>alert('$result_fetch[username] - Username already taken');
                    window.location.herf='index.php';
                    </script>
                    ";
                }
            }
            else
            {
                echo"
                <script>alert('$result_fetch[email] - E-mail already taken');
                window.location.herf='index.php';
                </script>
                ";
            }
        }
        else{
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query="INSERT INTO `registered_user`(`username`, `email`, `password`) VALUES ('$_POST[username]','$_POST[email]','$password')";
            
            if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('Registration Successfull');
                window.location.herf='index.php';
                </script>
                ";
            }
            else
            {
                echo"
                <script>alert('cannot run query');
                window.location.herf='index.php';
                </script>
                ";
            }
        
        }
    }
    else
    {
            echo"
                <script>
                    alert('cannot run query');
                    window.location.herf='index.php';
                </script>
            ";
    }

?>