<?
function getMax (&$minVal, &$maxVal) {
  $returnVal = 0;
  if ($minVal < $maxVal) {
    $returnVal = $maxVal;
  }
  else {
    $temp = $minVal;
    $minVal = $maxVal;
    $maxVal = $temp;
    $returnVal = $maxVal;
  }
  return $returnVal;
}

$val1 = 200;
$val2 = 100;

$maxVal = getMax($val1, $val2);

echo ("val1 = {$val1}");
echo ("&nbsp");
echo ("val2 = {$val2}");
echo ("<hr>");
echo ("{$val1}과 {$val2} 비교해서 큰 값은 {$maxVal}입니다.");
?>

