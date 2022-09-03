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
    <table border="1" >
        <tr>
            <th>name</th>
            <th>id</th>
            <th>img</th>
            <th>email</th>
            <?php if ($user_role==1):?>
                <th>update</th>
                <th>delete</th>
                <?php endif ?>
            </tr>
            <?php 
        foreach($data as $user): ?>
            <tr>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['id']?></td>
                <td><img src="design/img/<?=$user['img']?>" width=50 alt=""> </td>
                <td><?php echo $user['email']?></td>
                <?php if ($user_role==1):?>
                <td><a href="update.php?id=<?=$user['id']?>">update</a></td>
            <td><a href="delete.php?id=<?=$user['id']?>">delete</a></td>
            <?php endif ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>