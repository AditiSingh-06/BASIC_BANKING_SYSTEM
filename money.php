<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "user");
?> 
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>send money</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin-right:400px;
			padding-top: 80px;
			color: white;
		}
		label{
			padding-top: 20px;
			justify-content: left;
			font-weight: 100px;
			
		}
		.container{
			width: 500px;
			
			padding-left: 100px;
			
		}
		.container input{
			width:300px;
			clear: both;
			height: 35px;
			border: 50px;
			color:black;
		}
		button{
			font-size: 30px;
      		padding: 50px 10px;
      		background-color: #071a3d; 
			color: white;
			
		}
		

		
		.press{
			padding-top: 50px;
			padding-left: 750px;
			margin-left: 700px;
		}
		body{
			background-image: url("https://cdn.wallpapersafari.com/48/22/VPb29a.jpg");
			margin:0;
			background-repeat: no-repeat;
			background-size: 100%;
		}
		.click{
			width: 300px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
			margin-left: 100px;
			margin-top:30px;
			height:40px;
		}
		.click:hover{
			background-color: rgba(19, 135, 243, 0.74);	
		}
		a{
      color: white;
      font-size:20px;
    	}
	</style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
<div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  </div>

	<div class="container">
		<form action="transfer.php" method="post">
			<label><b>SENDER:</b></label>
			<input list="names" id="sender_name" type="text" name="sender_name", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Pratyaksha Ambast"></option>
				<option value="Sahil Singh"></option>
				<option value="Aditi Singh"></option>
				<option value="Shivani Singh"></option>
				<option value="Anish kuperkar"></option>
				<option value="Deeksha Rai"></option>
				<option value="Radhika Raut"></option>
				<option value="Samriddhi Sharma"></option>
				<option value="Tanisha Rai"></option>
				<option value="Laxmi Yadav"></option>
				
			</datalist>
		</br>
			<label><b>RECIEVER:</b></label>
			<input list="namess" type="" id="receiver_name" name="receiver_name" placeholder="Enter name here"  required>
			<datalist id="namess">
				<<option value="Pratyaksha Ambast"></option>
				<option value="Sahil Singh"></option>
				<option value="Aditi Singh"></option>
				<option value="Shivani Singh"></option>
				<option value="Anish kuperkar"></option>
				<option value="Deeksha Rai"></option>
				<option value="Radhika Raut"></option>
				<option value="Samriddhi Sharma"></option>
				<option value="Tanisha Rai"></option>
				<option value="Laxmi Yadav"></option>
			</datalist>
		</br>
			<label><b>AMOUNT: </b></label>
			<input type="number" id="amount" name="amount" placeholder="Enter amount here" required></div>
			<input class="click" type="submit" name="" value="Send Money">
		</form>
	
<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>
	</div> -->
	
</body>
</html>