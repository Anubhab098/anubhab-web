<?php


$file = $_POST['file'];



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a download = "<?php echo $file ?>" href = "<?php echo $file ?>">Click Here TO DOWNLOAD</a>
</body>
</html>