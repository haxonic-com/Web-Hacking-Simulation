<html>
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/main.css">
<link rel="stylesheet" href="./css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
		<script type = "text/javascript" src = "./jq.js"></script>
		<script type = "text/javascript">
		$(document).ready(function(){
			$("input").focus(function() {
				$(this).addClass("focus");
			});
			
			$("input").blur(function() {
				$(this).removeClass("focus");
			});
		});
		</script>
	</head>
	
	<body>
		

		<center>
		<h2>Enter to your Account</h2><br>
		
			<form action="" method="GET">
				Username : <input type="text" name="username" placeholder="" required><br><br>
				Password : <Input type="password" name="password" placeholder="" required><br><br>
				<input type="submit" value="Submit">
			</form>
</center>

</body>
</html>