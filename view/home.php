<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List of users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>List of users</h1>
    <ol>
        <?php foreach ($users as $user) { ?>
            <li><?=$user?></li>
        <?php } ?>
</body>
</html>
