<?php
$username = $_POST["username"];
$usersex = $_POST["usersex"];
$userschool = $_POST["userschool"];
$userthought = $_POST["userthought"];
$userhobby = $_POST["hobby"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>表單結果</title>
</head>

<body bgcolor="#d1fce8">
  <?php
if ($usersex == "male") {
    echo "<h2> $username 先生你好 !</h2><br>";
} else {
    echo "<h2> $username 女士你好 !</h2><br>";
}
echo "你的最高學歷是" . $userschool . "<br>";
echo "你喜歡的活動如下 : ";
echo "<ul>";
foreach ($userhobby as $value) {
    echo "<li>" . $value . "</li>";
}
echo "</ul>";
echo "你對於使用臉書經營社群有什麼看法 : <br>";
echo $userthought;
?>

</body>

</html>
