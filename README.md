# htmlspecialchar

だいぶ昔に、タグ区切りを含んだソースコードなどを無料ブログに添付する際に使用していたツール。  
任意のソースコードなどを入力することで、基本レイアウトを追加し、特殊文字のHTMLエンティティに変換したソースコード（HTML）を取得できる。  

- PHP: htmlspecialchars - Manual  
https://www.php.net/manual/ja/function.htmlspecialchars.php

# Usage

## input

```
<?php
print "Hello World!"
?>
``` 

## output

```
<pre style="background-color:#FFFFF0; border:1px dotted #000000; padding:5px; height: 200px; overflow:auto;"><code>&lt;?php
print &quot;Hello World!&quot;
?&gt;</code></pre>
```
