<?php

//ヒアドキュメント１

$msg =<<<TARO
aaaaaaaaaaaaaaaaaaaaaa<br>
bbbbbbbbbbbbbbbbbbbbbb<br>
TARO;

//ブラウザが受信するので改行コードは改行タグを記述
echo $msg;

//ヒアドキュメント２

echo <<<EOD
aaaaaaaaaaaaaaaaaaaaaaaaa<br>
bbbbbbbbbbbbbbbbbbbbbbbbbbbb<br>
ccccccccccccccccccccc<br>
EOD;
?>
