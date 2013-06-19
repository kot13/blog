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
	<div class="span6">
        <h1>Добавить запись:</h1>
		<form action="" method="POST">
			<input type="text" name="item[title]" placeholder="Заголовок" class="span6">
		    <textarea  name="item[text]" rows="3" placeholder="Содержание" class="span6"></textarea>
			<input type="submit" class="btn" value="Добавить" name="add">	
		</form>
	</div>
</div>
<?php
}
}



