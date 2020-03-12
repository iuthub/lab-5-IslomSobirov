<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
		<?php
		$file = "Name: " 
		.$_REQUEST['name'] ." section: " .$_REQUEST['section']. 
		" credit number: " .$_REQUEST['credit_num']. " card: " .$_REQUEST['card']. "\n";
		 file_put_contents("file.txt", $file, FILE_APPEND) ?>
	<body>
		
		<h2>Thanks, sucker!</h2>
		<dl>
			<dt>Name</dt>
			<dd>
                <?=$_REQUEST['name']?>
            </dd>
			
			<dt>Section</dt>
			<dd>
                <?=$_REQUEST['section']?>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
                <?=$_REQUEST['credit_num']?>(<?=$_REQUEST['card']?>)
			</dd>
		</dl>

		<?php foreach(file('file.txt') as $info): ?>
			<p><?=$info?></p>
			
		<?php endforeach?>
	</body>
</html>