<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Spericorn Technology Pvt Ltd</title>
		<link href="css/style.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.js"></script>
		<script type="text/javascript" >
			$.ajax({
				type : 'GET',
				url  :"http://spericorn.com/spapp/cfc/api.cfc?method=GetEmployers",
				dataType:"JSON",
				data: {},
				success:function(data) {
					var obj =data;
					console.log(data);
					
					for(i=0;i<obj.DATA.length;i++){  
						$('.logInfo').html(obj.DATA[i][1]);
					}
				}
			});
		</script>
		
	</head>
	<body>
		<div class="loginWrap" >
			
			<div class="loginWrapBody">		
				<div class="logHead">
					<img src="images/logo.png" />
				</div>
				<div class="logForm">
					<div class="row">
						<div class="inp_label">Email</div>
						<div><input type="text" class="formControl"/></div>
					</div>
					<div class="row">
						<div class="inp_label">Password</div>
						<div><input type="text" class="formControl"/></div>
					</div>
					<div class="row">
						<input type="submit" value="Login" class="btn btnSuccess login_btn">
					</div>
				</div>
				<div class="logInfo">
					Don't have an account? Create an account
				</div>
			</div>
			
			
		</div>
		
	
	</body>
</html>