
<html>
<head>
<style>
body {
  background-color: #FFCDD2;
}
.disp {

	display: inline-block;
}

#sec2{
	background-color:#FFEBEE;
	height: 75%;
    position: absolute;
    top: 253px;
    left: 0;
    width: 100%;
}

.menu{

	background-image:url("images/menuback.jpg");
	list-style-type: none;
	text-align: center;
	margin: 0;
	padding: 0;
}

.menu li{
	text-transform: capitalize;
	display: inline-block;
	font-size: 20px;
	padding: 20px;
}

h1 {
  text-align:center;
  font-family: "Courier New";
}


p {
	font-family: "Courier New";
  font-weight: "normal";
  font-style: "normal";
  font-var: "normal";
  font-height: "normal";
}

p.shadow{
	text-shadow:3px 2px black;

}

a.line{
	text-decoration:none;


}


h2.sell{
	font-family: "Courier New";
	
	

}

span{
	font-family: "Courier New";
	

}

<title>LWAI</title>
</style>
</head>
<body>
<center>
<h1 class="disp" style="color:#EF9A9A;"> L </h1>
<h1 class="disp" style="color:green;"> W</h1>
<h1 class="disp" style="color:blue;"> A</h1>
<h1 class="disp" style="color:yellow;"> I</h1>
</center>
<section>
<h2 style="font-size:40px;text-align:center" >bienvenue</h2> 
<p>LWAI is a nonprofit organization dedicated to exhibit art in diffrent ways, as well as selling some of this pices in exchange of economical help to the organization.</p>
<i> every piece of art on this page is purely personal taste.</i>
</section>

<section>
<ul class="menu">	
	<li><a class="line" href="LWAI.html"><p class="shadow" style="color:white">Home</p><a/></li>
	<li><a class="line" href="LWAIPaints.html"><p  class="shadow" style="color:white">Paints</p><a/></li>
	<li><a class="line" href="LWAIAcquire.html"><p class="shadow" style="color:white">Acquire</p><a/></li>
	<li><a class="line" href="LWAIContact.html"><p class="shadow" style="color:white">Contact Us</p><a/></li>
</ul>
</section>

<p style="text-align:center">we are all set, confirm youre info.</p>

<center>
<i>name</i>
<br>
<p><span style="border: 1px solid black"><?php $name = $_POST["name"];echo "$name";?></span></p>
<br>
<i>e-mail address</i>
<br>
<p><span style="border: 1px solid black"><?php $email = $_POST["email"];echo "$email";?></span></p>
<br>
<i>alias</i>
<br>
<p><span style="border: 1px solid black"><?php $alias = $_POST["alias"];echo "$alias";?></span></p>
<br>
<i>address</i>
<br>
<p><span style="border: 1px solid black"><?php $address = $_POST["address"];echo "$address";?></span></p>
<br>
<br>
<input type="submit" value="ok.">
</center>


</body>
</html>