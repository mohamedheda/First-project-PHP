<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <form action="update.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="username" value="<?= $resultData['name']?>" placeholder="user-name">
    <input type="text" name="email" value="<?= $resultData['email']?>" placeholder="email">
    <input type="text" name="password"  placeholder="password">
    <input type="hidden" name="id"  value="<?= $resultData['id']?>">
    <img src="design/img/<?= $resultData['img']?>" width=50  alt="">
    <input type="file" name="img" >
    <input type="submit" value="update">
    </form>
</body>
</html>