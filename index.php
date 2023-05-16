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
		border: 1px solid white;
		float: left;
		margin: 0 10px 10px 0;
	}
	input[type="text"] {
		border: 1px solid black;
		background: transparent;
		font-size: 20px;
		width: 100%;
		height: 25px;
	}
	select {
		border: 1px solid;
		background: transparent;
		height: 32px;
	}
	button[onclick=""] {
		border: 2px solid;
		background: transparent;
		width: 200px;
		color: black;
		height: 40px;
		margin: 10px;
		font-size: 20px;
		margin: 10px 10px 10px 150px;
	}
	</style>
	<script language = "php">
		<?php
		$st1 = 1;
		$st2 = 1;
		$st3 = 1;
		$variable1 = "ime1";
		$variable2 = "ime2";
		$variable3 = "ime3";
		?>
	</script>
</head>
<body>
    <div class="container">
		<h1 style="text-align:center;">Met kocke!</h1>
		<p>Vpis igralcev: </p>
		<form method="post" action="">
			<div id="box" style="width:250px">Igralec 1<br>
				<input type="text" name="igra1" autocomplete="off">
			</div>
			<div id="box" style="width:250px">Igralec 2<br>
				<input type="text" name="igra2" autocomplete="off">
			</div>
			<div id="box" style="width:250px">Igralec 3<br>
				<input type="text" name="igra3" autocomplete="off">
			</div>
			<div id="box" >Število kock:
				<select name="kocke">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				
			</div>
			<div id="box" style="float: right">Število metov:
				<select name="meti">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<button onclick=""
			<input type="submit" name="igraj" value="Igraj">IGRAJ<a src="igra.php"></a>
			</button>
			<?php
				if(isset($_POST['roll'])){
					$dice = $_POST['dice'];
					$rand = rand(1,6);
				}
			?>
		</form>
	</div>
</body>
</html>