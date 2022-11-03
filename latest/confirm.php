<?php

	if($_SERVER["REQUEST_METHOD"] != "POST"){
		header("Location: index.html");
		exit();/* 直リンクされたらindexへ*/
	}

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$days = $_POST['days'];
	$querytitle = $_POST['querytitle'];
	$query = $_POST['query'];


?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="toiawase.css" type="text/css">
	<title>お問い合わせ内容の確認</title>
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
		<main>
			<h1>お問い合わせ</h1>
			<p style="color: green;">入力内容をご確認の上、「送信」ボタンをクリックして下さい。<br></p>
			<form action="result.php" method="POST">
				<table border="0" >
				  <tr>
					<td class="item" >お名前</td>
					<td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');?></td>
				  </tr>
				  <tr>
					<td class="item" >メールアドレス</td>
					<td><?php echo htmlspecialchars($mail, ENT_QUOTES, 'UTF-8');?></td>
				  </tr>
				  <tr>
					<td class="item" >ご希望納期</td>
				 	<td><?php echo htmlspecialchars($days, ENT_QUOTES, 'UTF-8');?></td>
				  </tr>
				  <tr>
					<td class="item" >ご依頼タイトル</td>
				  	<td><?php echo $querytitle;?></td>
				  </tr>
				  <tr>
					<td class="item" >ご依頼内容</td>
		      		 <td style="height:300px;">
				 		 <?php echo htmlspecialchars($query, ENT_QUOTES, 'UTF-8');?>
		      	 	 </td>
		      	 </tr>
		      	</table>
				<div class="input-area"><!--完了ページに渡すための情報埋め込み-->
					<p style="text-align: center;"><input type="submit" value="送信" class="button"></p><br>
					<p><input type="button" value="戻る" onclick='history.back()' class="modoru"></p>
					<input type="hidden" name="name" value="<?php echo $name;?>">
					<input type="hidden" name="mail" value="<?php echo $mail;?>">
					<input type="hidden" name="days" value="<?php echo $days;?>">
					<input type="hidden" name="querytitle" value="<?php echo $querytitle;?>">
					<input type="hidden" name="query" value="<?php echo $query;?>">
				</div>
      		</form>
		</main>
	<footer>
		<p><small>©2022 Tom Nen</small></p>
	</footer>
</body>
</html>
