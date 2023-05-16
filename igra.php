<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <title>Met kocke</title>
	<style>
	*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
	}
	body{
		height: 100vh;
		background: linear-gradient(
			#e92e3d,
			#ff6e6a
		) 0 100% no-repeat;
		background-size: 100% 50%;
	}
	.container{
		width: 900px;
		padding: 50px;
		margin: 0 auto;
		position: absolute;
		transform: translate(-50%,-50%);
		top: 50%;
		left: 50%;
		background-color: #ffffff;
		box-shadow: 0 15px 25px rgba(50,50,50,0.15);
		border-radius: 8px;
		display: flex;
		flex-direction: column;
		align-items: center;
		
	}
	p{
		font-size: 16px;
		margin: 30px 0;
		font-weight: 500;
	}
	button{
		border: none;
		outline: none;
		color: #ffffff;
		padding: 15px 0;
		width: 150px;
		letter-spacing: 1px;
		border-radius: 5px;
		cursor: pointer;
	}
	#box {
		padding: 10px;
		float: left;
		margin: 0 10px 10px 0;
	}
	
	.clear{
		clear: both;
	}
	#zaslon{
		width: 860px;
		font-size: 22px;
		padding: 0px;
	}
	#table {
		width: 850px;
		height: 300px;
		border: 2px solid;
	}
	#diceWrapper {
		margin: 0 auto;
		height: 200px;
	}
	#igralci{
		height: 50px;
		width: 856px;
	}
	#igralec{
		height: 100%;
		width: 252px;
		border: 1px solid white;
		margin: 5px 45px 0 0;
		float: left;
	}
	</style>
</head>
<?php
	if(isset($_POST['roll'])){
		$dice = $_POST['dice'];
		$rand = rand(1,6);
	}
?>
<body>
    <div class="container">
		<h1 style="text-align:center;">Met kocke!</h1>
		<div class="clear"></div>
		<div id="zaslon">
			<div class="float:left" style="margin:10px;">Število krogov: 1/1</div>
			<div class="clear"></div>
			<div id="table">
			<div id="diceWrapper">
				<table style="margin: 0 auto;">
					<img id="dice1" src="slike/dice1.png" style="width:80px; float:left">
					<img id="dice2" src="slike/dice1.png" style="width:80px; float:">
					<img id="dice3" src="slike/dice1.png" style="width:80px; float:right">
					
					<!--<img src="slike/dice<?php echo rand(1, 6); ?>.png">
					<img src="slike/dice<?php echo rand(1, 6); ?>.png">
					<img src="slike/dice<?php echo rand(1, 6); ?>.png">-->
				</table>
				</div>
				<div class="clear"></div>
				<form method="post" action="">
					<center>
						<input type="submit" name="vrzi" value="Vrzi" style="font-size: 20px; width: 300px; height: 70px; border-radius: 10px;">
					</center>
				</form>
			</div>
			<div id="igralci">
				<div id="igralec">
					<center>
						<font style="font-size: 20px;"></font>(ime)<br>
						<font style="font-size: 30px;">0</font>
					</center>
				</div>
				<div id="igralec">
					<center>
						<font style="font-size: 20px;"></font>(ime)<br>
						<font style="font-size: 30px;">0</font>
					</center>
				</div>
				<div id="igralec" style="border: 3px solid white; margin: 5px 0 0 0;">
					<center>
						<font style="font-size: 20px;"></font>(ime)<br>
						<font style="font-size: 30px;">0</font>
					</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>