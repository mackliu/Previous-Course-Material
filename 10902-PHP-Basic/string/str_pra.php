<h4>將”aaddw1123”改成”*********”</h4>
<?php
echo str_repeat("*",mb_strlen('aaddw1123'));
?>

<h4>將”this,is,a,book”依”,”切割後成為陣列</h4>
<pre>
<?php
print_r(explode(',','this,is,a,book'));
?>
</pre>

<h4>將上例陣列重新組合成“this is a book”</h4>
<?php

echo implode(" ",explode(',','this,is,a,book'));

?>

<h4>將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h4>
<?php

echo mb_substr('The reason why a great man is great is that he resolves to be a great man',0,10) . '...';

?>

