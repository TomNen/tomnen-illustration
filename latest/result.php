<?php
	if($_SERVER["REQUEST_METHOD"] != "POST"){
		header("Location: index.html");
		exit();	/*直リンクされたらindexへ*/

	//メールの日本語設定
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");

	$to = $_POST['XXXXXXXX'];	/*管理者メールアドレス*/
	$subject = "お問い合わせ受信";
	//メッセージ本文を視覚的に見やすく格納（ヒアドキュメント）
	$message = <<< EOM

		以下の内容で承りました。
	━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
	【 お名前 】
	{$_POST["name"]}

	【 メール 】
	{$_POST["mail"]}

	【 日数 】
	{$_POST["days"]}

	【 お問い合わせタイトル 】
	{$_POST["querytitle"]}

	【 お問い合わせ内容 】
	{$_POST["query"]}
	━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

	EOM;

	$headers = "From: tomnen@example.com";
	//メール送信
	mb_send_mail($to, $subject, $message, $headers); 
	}
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="toiawase.css" type="text/css">
	<title>お問い合わせ送信完了</title>
</head>
<body>
	<header>
		<nav>
		<!--<h2>サイトマップ</h2>-->
			<ul>
				<li><a href="../index.html">トップ</a></li>
				<li><a href="index.html">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>
		<p>お問い合わせいただき、ありがとうございました。<br>
		回答まで少々お待ちください。</p>
	
		
	<footer style="position: fixed; bottom: 0;  width: 100%;">
		<p ><small>©2022 Tom Nen</small></p>
	</footer>
</body>
</html>
