<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>슬라이더</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <?php
  require_once("../../lib/util.php");
  // 문자 인코드 검증
  if (!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding ;
    // 오류 메시지를 표시하고 다음 코드를 전부 취소한다
    exit($err);
  }
  // HTML 이스케이프(XSS 대응）
  $_POST = es($_POST);
  ?>

  <?php
  // 오류를 넣는 배열
  $error = [];
  // 단맛 값의 범위
  $min = 1;
  $max = 5;
  // POST 된 값을 꺼낸다
  if (isSet($_POST["taste"])){
    $taste = $_POST["taste"];
    // 값이 정수이고 범위 내인지를 확인한다
    $isTaste = ctype_digit($taste) && ($taste>=$min) && ($taste<=$max);
    if (!$isTaste){
      $error[] = "단맛의 값에 오류가 있습니다. ";
      $taste = $min;
    }
  } else {
    // POST된 값이 없을 때
    $taste = round(($min+$max)/2);
    $isTaste = true; // 초기값도 단맛을 표시한다
  }
  ?>

  <!-- 입력폼을 만든다(현재 페이지에 POST한다) -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li><span>단맛：</span>
        <input type="range" name="taste" min="1" max="5" step="1" value="<?php echo $taste;?>" >
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>

  <?php
    // 단맛이 입력되면 표시한다
    if ($isTaste) {
      $tasteList = ["달다", "조금 달다", "보통", "조금 쓰다", "쓰다"];
      echo "<HR>";
      echo "단맛은 {$taste}. {$tasteList[$taste-1]}입니다. ";
    }
  ?>
  <?php
  // 오류 표시
  if (count($error)>0){
    echo "<HR>";
    // 값을 "<br>"로 연결해 표시한다
    echo '<span class="error">', implode("<br>", $error), '</span>';
  }
  ?>
</div>
</body>
</html>
