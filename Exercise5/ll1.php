<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Page</title>
</head>
<body>
	<?php
		session_start();
		echo $_SESSION['username'];
	?>

</body>
</html>