<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>１행 메모 입력</title>
<link href="../../css/style.css" rel="stylesheet">
<style type="text/css">
  input.memofield {width:300px;}
</style>
</head>
<body>
<div>
  <!-- 입력 폼을 만든다(메모를 POST한다) -->
  <form method="POST" action="write_memofile.php">
    <ul>
      <li><label>memo：<input name="memo" class="memofield" placeholder="메모를 적는다"></input></label></li>
      <li><input type="submit" value="송신한다"></li>
    </ul>
  </form>

</div>
</body>
</html>
