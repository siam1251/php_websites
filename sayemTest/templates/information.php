<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<img style="width:100px; height:100px; padding:30px 0 100px 100px;" src=<?php echo $this->value['image']?> alt=""  />
	<form action="./information.php" method="post">
		Name:<input type="text" name="name" value="<?php $this->value['name'] ?>" /><br /><br />
		Address:<input type="text" name="address" value="<?php ?>" /><br /><br />
		Contact:<input type="text" name="contact" value="<?php ?>" /><br /><br />
		<input type="submit" name="submit" value="Update" />
		<input type="submit" name="submit" value="Delete" />
	</form>
</body>
</html>
