<?php
$a = 1;
$b = 2;
$a = $b + $a;
$b = $a - $b;
$a = $a - $b;
echo "<table>
<tr><td>$a</td></tr>
<tr><td>$b</td></tr>
</table>"
?>