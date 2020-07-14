<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>텍스트 영역</title>
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
  ?>

  <?php
  // POST된 텍스트 문을 읽는다
  if (isSet($_POST["note"])){
    $note = $_POST["note"];
    // HTML 태그나 PHP 태그를 삭제한다
    $note = strip_tags($note);
    // 최대 150문자만 읽습니다(개행 코드도 카운트한다)
    $note = mb_substr($note, 0, 150);
    // HTML 이스케이프를 한다
    $note = es($note);
  } else {
    // POST된 값이 없을 때
    $note = "";
  }
  ?>

  <!-- 입력폼을 만든다（현재 페이지에 POST한다） -->
  <form method="POST" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
    <ul>
      <li><span>NOTE：</span>
        <textarea name="note" cols="25" rows="4" maxlength="150" placeholder="내용을 입력하세요"><?php echo $note; ?></textarea>
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>

  <?php
    // 텍스트가 입력되면 표시한다
    $length = mb_strlen($note);
    if ($length>0) {
      echo "<HR>";
      // 개행 코드 앞에 <br>로 삽입한다
      $note_br = nl2br($note, false);
      echo $note_br;
    }
  ?>
</div>
</body>
</html>
