<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>메모 입력</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <!-- 입력 폼을 만든다(메모를 POST한다) -->
  <form method="POST" action="write_memofile.php">
    <ul>
      <li><span>memo：</span>
        <textarea name="memo" cols="25" rows="4" maxlength="100" placeholder="메모를 쓴다"></textarea>
      </li>
      <li><input type="submit" value="송신한다" ></li>
    </ul>
  </form>
</div>
</body>
</html>
