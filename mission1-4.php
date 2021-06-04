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
  <form method="POST" action="mission1-4.php">
    <select class="form" id="selectHand" name="selectHand">
      <option value=0>グー</option>
      <option value=1>チョキ</option>
      <option value=2>パー</option>
    </select>
    <br>
    <input type="submit" name="battle" value="じゃんけん!" />
  </form>
  <?php if(!empty($_POST['battle'])):?>
  <?php echo '自分: '.$hands[$_POST['selectHand']].'<br>相手: '.$hands[$pcHand].'<br>'?>
  <?php janken($_POST['selectHand'],$pcHand) ?>
  <?php endif;?>
</body>

</html>