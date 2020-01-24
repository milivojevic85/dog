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
list($dog_weight, $dog_breed, $dog_color) = explode(',', $dog_properties);
print "Dog weight is $dog_weight. Dog bread is $dog_breed. Dog color is $dog_color." // Dog weight is 0. Dog bread is no breed. Dog color is no color (the same like the first time)
?>
</body>
</html>