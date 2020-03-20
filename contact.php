<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/contact.css">
<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
    <?php
    try {
        $db = new PDO('mysql:dbname=mydb;host=localhost;charset=utf8', 'root', 'root');
        $statement = $db->prepare('INSERT INTO contact SET name=?, email=?, message=?, created_at=NOW()');
        $statement->bindParam(1, $_POST['name']);
        $statement->bindParam(2, $_POST['email']);
        $statement->bindParam(3, $_POST['message']);
        $statement->execute();
        echo 'メッセージが登録されました';
    } catch(PDOException $e) {
        echo 'DB接続エラー：' . $e->getMessage();
    }
    ?>
</pre>
</main>
</body>    
</html>