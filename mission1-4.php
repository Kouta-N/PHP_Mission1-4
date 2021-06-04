<?php
$hands=['グー','チョキ','パー'];
if(!empty($_POST['battle'])){
  $pcHand=rand(0,count($hands)-1);
}
function janken($userNum,$pcNum):void{
  $result_num = ($userNum + 3 - $pcNum) % 3;
  switch($result_num){
    case 0:
      echo 'あいこ';
      break;
    case 1:
      echo 'あなたの敗北です。。。';
      break;
    case 2:
      echo 'あなたの勝利です!';
      break;
  }
}
 ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>mission1-4</title>
</head>

<body>

</body>

</html>