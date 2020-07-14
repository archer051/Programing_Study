<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style01.css">
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js"></script>
	<title></title>
	<style>
		.p1{
			width: 150px;
			height: 40px;
			border:1px solid #000;
			white-space: nowrap;
			/*텍스트가 사이즈150 * 40 에서 넘어가는것은 숨긴다 */
			overflow: hidden;
			/*텍스트를 ...으로 표출한다 */
			text-overflow: ellipsis;
		}
	</style>
</head>
<body>
	<p class="p1">
		아름다운 우리강산 기본소득 1억원
	</p>
	<p style="font-family: 'Nanum Gothic', sans-serif;">
		아름다운 우리강산
	</p>
</body>
</html>