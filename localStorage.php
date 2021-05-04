<!DOCTYPE html>
<html>
<head>
	<title>LocalStorage</title>
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




  <style type="text/css">


  .box{
	margin: 20px;
	background-color: #333333;
	padding: 20px;
	width: 500px;

}

.box{
	margin: 20px;
	background-color: #333333;
	padding: 20px;
	width: 500px;

}


table{
	width: 500px;
}
table tr td
{
	color: white;
	padding-left: 100px;
	text-align: center;
}
table tr th h3{
	color: white;
	text-align: center;
}








  </style>



  <script type="text/javascript">

 function set()
 {

 	 var f=document.getElementById("fname").value;
 	 var l=document.getElementById("lname").value;
 	 var a=document.getElementById("addr").value;
 	 var c=document.getElementById("contact").value;

 	 localStorage.setItem("client",f);
 	 localStorage.setItem("clientSurname",l);
 	 localStorage.setItem("address",a);
 	 localStorage.setItem("contact",c);

 	 alert("Name-"+f+"surname-"+l+"address-"+a+"contact-"+c);
 	 



 }
 function get()
 {
   var h=localStorage.getItem("client");
   var i=localStorage.getItem("clientSurname");
   var j=localStorage.getItem("address");
   var k=localStorage.getItem("contact");
   document.getElementById("showName").innerHTML= h;
   document.getElementById("showSurname").innerHTML=i;
   document.getElementById("showAddr").innerHTML=j;
   document.getElementById("showCont").innerHTML=k;


 }






  </script>



</head>
<body>
<div class="container">
<div class="box">
<table class="table">
<tr><th colspan="2"><h3>Fill The Form</h3></th></tr>
<tr><td>First Name</td><td><input type="text" id="fname"></td></tr>
<tr><td>Last Name</td><td><input type="text" id="lname"></td></tr>
<tr><td>Address</td><td><input type="text" id="addr"></td></tr>
<tr><td>Contact</td><td><input type="text" id="contact"></td></tr>
<tr><td colspan="2"><button class="btn btn-primary" onclick="set()">Store Data</button></td></tr><br>



	
</table>

<br><br>

<table class="table table-hover p-3 table-light">
<tr><td colspan="2"><button class="btn btn-danger" onclick="get()">Show Data</button></td></tr>

<tr><td colspan="2"><span id="showName" class="text-dark"></span></td></tr>
<tr><td colspan="2"><span id="showSurname" class="text-dark"></span></td></tr>
<tr><td colspan="2"><span id="showAddr" class="text-dark"></span></td></tr>
<tr><td colspan="2"><span id="showCont" class="text-dark text-bold"></span></td></tr>



	
</table>

</div>
</div>
</div>

</body>
</html>