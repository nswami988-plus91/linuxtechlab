<?php
echo "<p style='color:red:'>PHP Sort using sort()</p>";
$array =array(1,2,3,4,52,83,14,15,16,71,18,91,20);
sort($array);
$count =count($array);
for($i=0;$i<=$count;$i++)
{
  echo $array[i];
}

?>
