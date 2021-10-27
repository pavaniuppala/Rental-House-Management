<?php
// session_start();
$data = array();
$con =mysqli_connect('localhost','pavani','pavani'); #connects to DB
mysqli_select_db($con,'connect');

$s="select * from users;";
$result=mysqli_query($con,$s); 
while($row = mysqli_fetch_row($result)){
    array_push($data,array($row[0],$row[1]));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.freepik.com/free-photos-vectors/house-rent">
    <!-- <link rel="stylesheet" href="https://pixabay.com/images/search/background/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="tab2.png" type="image">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)), url("bg1.jpg");
            background-size: cover;
            background-position: center;
        }
    </style>
    <script>
    function validation(){
    var data = <?php echo json_encode($data);?>;
    var user = document.getElementById('u1').value;
    for(var i=0;i<data.length;i++){
        if(user === data[i][0]){
            alert('Already registered with this Username,try with other username');
            break;
        }
    } 
    if(i>=data.length){
        alert('Registration Successfull');
    }
}
    </script>
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-6 login-left">
                    <h2 style="color:#fff;">Login Form</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label style="color:#fff;">Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label style="color:#fff;">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div><br>
                        <button type="submit" class="btn btn-primary" style="font-weight:bold;">Submit</button>
                    </form>
                </div>

                <div class="col-6 login-right">
                    <h2>Registration Form</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input id="u1" type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div><br>
                        <button type="submit" class="btn btn-primary" onclick="validation()">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>