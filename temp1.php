 <?php 
 function val()
 {
$t=$_POST['input'];
$m=$_POST['message'];
$conn=mysqli_connect("localhost","pavani","pavani");
mysqli_select_db($conn,"connect");
mysqli_query($conn,"UPDATE `links` SET `message`='hello' WHERE phone=`123`;");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="submit" onclick="clickable1()" value="click">
<form method="POST">
    <input type="text" id="p1" name="input">
    <input type="text" id="p2" name="message">
    <input type="submit" id="c1" name="submit">
</form>
 <script>
        function clickable1()
        {
            document.getElementById("p1").value="123";
            document.getElementById("p2").value="Congratulations";
            // alert("done");
            document.getElementById("c1").click();
            // alert("done");
            <?php echo val(); ?>
            alert("done");
        }
    </script>
   
</body>
</html>