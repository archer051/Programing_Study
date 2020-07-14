<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="utf-8">
<title>폼 입력 처리의 기본（POST）</title>
<link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>

<form method="POST" action="calc.php">
  <ul>
    <li><label>단가: <input type="number" name="unitPrice"></label></li>
    <li><label>개수: <input type="number" name="quantity"></label></li>
    <li><input type="submit" value="계산한다"></li>
  </ul>
</form>

</div>
</body>
</html>
