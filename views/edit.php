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
        <h1>Редактировать:</h1>
		<form action="" method="POST">
			<input type="text" name="item[title]" placeholder="Заголовок" class="span6" value="<?php echo $item['title'];?>">
		    <textarea  name="item[text]" rows="3" placeholder="Содержание" class="span6" ><?php echo $item['text'];?></textarea>
			<input type="submit" class="btn" value="Сохранить" name="edit">	
		</form>
	</div>
</div>
<?php
}
}



