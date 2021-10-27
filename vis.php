<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="visit.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"> -->
  <style>
  body{
    width: 90vw;
    height:auto;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)), url('bg5.jpeg');
}
    h1
    {
      color:#fff;
    }
    .bt
{
    text-align: center;
    top:10px;
    /* position: relative; */
    /* z-index: 10; */
    float:right;
}
.ca{
  display:none;
}
    .card 
    {
      display:flex;
      /* flex-direction:row; */
      /* margin:auto; */
      margin-left:auto;
      margin-right:auto;
      border: 1px solid #fff;
      border-radius: 25px 10px;
      background-color: #fff;
      width: 60vw;
      height: 36vh;
      overflow: hidden;
      margin-bottom:15px;
    }
  .card img
  {
    width: 30vw;
    height: 35vh;
  }
  h5
  {
    font-size: 1.5vw;
  }
  .search{
    width:25vw;
    margin-left:10px;
    padding:6px;
  }


   .btn-chat{
      border:none;
      margin:auto;
      text-transform: uppercase;
      font-size: 1vw;
      position: relative;
      width: 28%;
    }
    #chatbox{
      display:none;
      border: 3px solid #f1f1f1;
      position: absolute;
      /* bottom: 2%; */
      top:80%;
      right: 2%;
      z-index: 9;
    }
    .form-container{
      max-width: 300px;
      padding: 10px;
      background: white;
    }
    .form-container textarea{
      width: 100%;
      min-height:200px;
      border: none;
      resize: none;
      padding: 10px;
      margin: 5px 0 22px 0;
      background: #f1f1f1;
      font-size: 15px;
    }
    .form-container textarea:focus{
      background: #ddd;
      outline: none;
    }
    .btn-send, .btn-close{
      padding:10px;
      font-size: 18px;
      margin-bottom: 10px;
      border: none;
      width: 97%;
      opacity: 0.9;
    }
    .btn-send,.btn-close,.btn-chat:hover{
      opacity: 1;
    }
    h2{
      background: blue;
      color:white;
      width: 100%;
      text-align: center;
      padding: 10px;
    }
    h1
{
    font-style:cursive;
    font-size:35px;
    letter-spacing: 2px;
    text-align: center;
}
.pic
{
    background: url('bg3.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 40vw;
    height:30vh;
    background-position: center;
}
@media only screen and(max-width: 1700px)
{
    .card
    {
    margin-left:300px;
    position:relative;
    display: block;
    margin: auto;
    }
}
.hor{
  display:flex;
  flex-direction:row;
}
/* .hori
{
    display: flex;
    flex-direction: column;
} */
  </style>
</head>
<html>
<body style="background:linear-gradient(rgba(0, 0, 50, 0.7), rgba(0, 0, 50, 0.8)), url('bg5.jpeg');background-size:cover;background-position:center;backround-repeat:no-repeat;"><br>
<div class="hori"><br>
<h1>Tenants choice</h1><br>
<input type="search" id="s1" oninput="search()" class="search" placeholder="search by location"><br>
<a style="right:10vw;position:absolute;text-decoration:none;color:#fff;margin-bottom:20px;background:orange;color:#000;font-weight:bold;width:150px;text-align:center;padding:5px;" href="home.html">Upload Yours</a>
</div>

  <div class="container">
    <div id="chatbox">
      <h2>Message</h2>
      <form class="form-container"> 
        <textarea type="text" placeholder="Type Text.." name="msg" required=""></textarea>
        <button type="submit" class="btn btn-info btn-lg btn-send">Send</button>
        <button type="button" class="btn btn-danger btn-lg btn-close" onclick="closeChat()">Close</button>
      </form>
    </div>
  </div>
<?php
  //  session_start();
   $con =mysqli_connect('localhost','pavani','pavani'); #connects to DB
   mysqli_select_db($con,'connect');
   $s="select * from links";
   $result=mysqli_query($con,$s); 
   $num=mysqli_num_rows($result);
   $det=array();
   while($row = mysqli_fetch_array($result))
{
  array_push($det,array($row['URL'],$row['cname'],$row['phone'],$row['area'],$row['count'],$row['cost']));
}
// var_dump($det);
?>
<script>
  var parr= <?php echo json_encode($det);?>;
  console.log(parr);
  val(parr);
  function val()
  {
   for(var i=0;i<parr.length;i++)
   {
     document.write("<div class='card row' id='cc"+i+"'>");
      document.write("<img class='img-fluid' onclick='setpo(this)' class='col-6' src="+parr[i][0]+"  id='c"+i+"'><br>");
      document.write("<div class='bt col-6'>");
      document.write("<h5>Contact Name   :"+parr[i][1]+"</h5>");
      document.write("<h5 id='p"+i+"'>Contact Number :"+parr[i][2]+"</h5>");
      document.write("<h5>Location       :"+parr[i][3]+"</h5>");
      document.write("<h5>Number of Rooms:"+parr[i][4]+"</h5>");
      document.write("<h5>Rent             :"+parr[i][5]+"</h5>");
      document.write("<button id='c"+i+"' class='btn btn-info btn-chat' type='button' onclick='openChat()'>Complaint</button>");
      // document.write("<input type='button' style='width:10vw;font-size:1.5vw;font-weight:bold;' class='btn btn-primary' value=complaint><br>");
      document.write("</div>");
      document.write("</div>");

      //  document.write("<div class='container'>");
      // document.write("<div class='chatbox' id='chatbox"+i"'>");
      // document.write("<h2>Message</h2>");
      // document.write("<form class='form-container'>");
      // document.write("<textarea type='text' placeholder='Type Text..' name='msg'></textarea>");
      // document.write("<button type='submit' class='btn btn-info btn-lg btn-send'>Send</button>");
      // document.write("<button type='button' class='btn btn-danger btn-lg btn-close' onclick='closeChat()'>Close</button>");
      // document.write("</form>");
      // document.write("</div>");
      // document.write("</div>");
   } 
  }
  function setpo(t)
  { 
    //alert(document.getElementById(t.id));
    var c1=document.getElementById("c"+t.id);
    var c2=document.getElementById(t.id);
    if(c1.style.width==="720px")
    {
    c1.style.width="90vw";
    c1.style.height="100vh";
    c2.style.width="90vw";
    c2.style.height="100vh";
    }
    else
    {
    c1.style.width="720px";
    c1.style.height="300px";
    c2.style.width="400px";
    c2.style.height="300px";
    }
  }
  // function search()
  // {
  //   var s=document.getElementById("s1").value;
  //   for(var i=0;i<parr.length;i++)
  //   {
  //     if(parr[i][3].toLowerCase().includes(s.toLowerCase()))
  //     {
  //       document.getElementById("cc"+i).style.display="block";
  //     }
  //     else
  //     {
  //       document.getElementById("cc"+i).style.display="none";
  //     }
  //   }
  // }
  function search()
  {
    var s=document.getElementById("s1").value;
    for(var i=0;i<parr.length;i++)
    {
      if(parr[i][3].toLowerCase().includes(s.toLowerCase()))
      {
        document.getElementById("cc"+i).className="hor card";
        // document.getElementByClassName("bt").style.display="block";
      }
      else
      {
        document.getElementById("cc"+i).className="ca";
      }
    }
  }
   function openChat() {
      document.getElementById('chatbox').style.display='block';
      $('.btn-chat').hide();
    }
    function closeChat() {
      document.getElementById('chatbox').style.display='none';
      $('.btn-chat').show();
    }
    $('form').submit(function () {
      var text=$(this).find("textarea[name='msg']").val();

      alert(text);
    });

</script>
</body>
</html>



  