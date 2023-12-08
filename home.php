<?php
include 'db.php';

try{
    $db = new Database();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $db->insert($_POST['email'], $_POST['password']);
        echo "successfully added";
    }

}  catch(\Exception $e) {
    echo 'Error ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit">
    </form>    
</body>
</html>
