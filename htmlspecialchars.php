<html>
<head>
<meta charset='utf-8'>
<title>HTML特殊文字変換</title>
<script type='text/javascript'>
// クリア処理
function c(){
	document.forms['demo'].input_data.value = "";
	document.forms['demo'].output_data.value = "";
}
// 選択処理
function s(){
	document.forms['demo'].output_data.focus();
	document.forms['demo'].output_data.select();
}
</script>
</head>
<body>
<form name='demo' action='htmlspecialchars.php' method='post'>
<textarea name='input_data' cols='100' rows='10' wrap='soft'>
<?php
/* 送信内容の表示 */
if($_POST){
	print htmlspecialchars($_POST['input_data'], ENT_QUOTES, 'UTF8');
}
?>
</textarea>
<br/>
<input type='submit' value='変換' />
<input type='button' value='クリア' onclick='c()'><br/>
<textarea name='output_data' cols='100' rows='10' wrap='soft' readonly>
<?php
/* 特殊文字変換結果の表示 */
if($_POST){
	// デザイン部 (background, border, padding, height, overflow)
	print "&lt;pre style=&quot;background-color:#FFFFF0; border:1px dotted #000000; padding:5px; height: 200px; overflow:auto;&quot;&gt;&lt;code&gt;";
	// 入力文字列変換部
	print str_replace('&', '&amp;', htmlspecialchars($_POST['input_data'], ENT_QUOTES, 'UTF8'));
	print "&lt;/code&gt;&lt;/pre&gt;";
}
?>
</textarea><br/>
<input type='button' value='選択' onclick='s()' />
</form>
</body>
</html>
