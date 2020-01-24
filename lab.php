<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
</head>
<body>
<?php 
require_once('dog.php');
$lab = new Dog;
$dog_properties = $lab->get_properties();
print $dog_properties; // 0, no breed, no color.
?>
</body>
</html>