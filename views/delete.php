<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Вы должны ввести корректный логин и пароль для получения доступа к ресурсу';
    exit;
} else {
    if (($_SERVER['PHP_AUTH_USER']=='admin')&&($_SERVER['PHP_AUTH_PW']=='admin')){
?>
<div class="row">    
	<div class="span12">
	    <h1><?php echo $item['title'];?></h1>
		<h4><?php echo $item['date'];?></h4>
		<p><?php echo $item['text'];?></p>
	    <form action="" method="POST">
		    <input type="submit" class="btn" value="Правда удалить???" name="delete">
        </form>
	</div>
</div>
<?php
}
}