<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=php;host=localhost","root","");
$result = $pdo->query("select image from img_upload;");

foreach ($result as $row){
    $uploded_img = $row['image'];
}
$image_path= "./image/".$uploded_img ;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo $image_path; ?>">
</body>
</html>