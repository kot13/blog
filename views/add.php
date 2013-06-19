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
	<div class="span8">
        <h1>Добавить запись:</h1>
		<form action="" method="POST">
			<input type="text" name="item[title]" placeholder="Заголовок" class="span6">
		    <textarea class="textarea" name="item[text]" rows="3" placeholder="Содержание" style="width: 810px; height: 200px"></textarea>
			<input type="submit" class="btn" value="Добавить" name="add">	
		</form>
	</div>
</div>
<script src="assets/js/wysihtml5-0.3.0.js"></script>
<script src="assets/js/jquery-1.7.2.min.js"></script>
<script src="assets/js/prettify.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-wysihtml5.js"></script>

<script>
	$('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>
<?php
}
}



