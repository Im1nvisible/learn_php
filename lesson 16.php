<?php error_reporting(-1);

header('Content-Type: text/html; charset=utf-8');

/*

int mb_strpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
string mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_strtoupper ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )
string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )
string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
*/

/*$str = 'Привет, мир!';
// echo mb_strpos($str, 'и', 3, 'utf-8');

if( 0 !== false ) echo 'OK';
else echo 'NO';*/

/*$str = 'привет, мир!';
$str2 = 'ПРИВЕТ, МИР!';
// echo mb_strtoupper($str, 'utf-8');
// echo mb_strtolower($str, 'utf-8');*/

/*$str = 'Привет, мир!';
// echo mb_substr($str, 0, 6, 'utf-8');
// echo mb_substr($str, 8, 3, 'utf-8');
echo mb_substr($str, -4, 3, 'utf-8');*/

/*$str = '&amp;<h1><i>Привет</i>! Меня зовут <b>Вася</b>!</h1><iframe height="100%" width="100%"></iframe><script>alert(\'XSS\')</script>';
echo htmlspecialchars($str, ENT_QUOTES, 'utf-8', false);*/

/*$str = '&amp;&lt;h1&gt;&lt;i&gt;Привет&lt;/i&gt;! Меня зовут &lt;b&gt;Вася&lt;/b&gt;!&lt;/h1&gt;&lt;iframe src=&quot; &quot; height=&quot;100%&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;';
echo htmlspecialchars_decode($str);*/

