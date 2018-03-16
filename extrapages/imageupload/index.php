<html>
	<head>
		<title>PHP AJAX Image Upload</title>
		<link href="styles.css" rel="stylesheet" type="text/css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	</head>
	<body>
		<div class="bgColor">
			<form id="uploadForm" action="upload" method="post">
				<div id="targetLayer">No Image</div>
				<div id="uploadFormLayer">
					<input name="userImage" type="file" class="inputFile" />
					<br/>
					<input type="submit" value="Submit" class="btnSubmit" />
				</form>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function (e) {
			$("#uploadForm").on('submit',(function(e) {
				e.preventDefault();
				$.ajax({
					url: "upload",
					type: "POST",
					data:  new FormData(this),{test:'tesst'},
					contentType: false,
					cache: false,
					processData:false,
					success: function(data){
					$("#targetLayer").html(data);
					},
					error: function(){
					} 	        
				});
			}));
		});
		</script>
</html>
