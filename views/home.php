<div class="row">    
	<div class="span12">
        <h1>Список записей:</h1>
		<?php 
		    foreach($items as $row=>$one){
			    echo '<h2>'.$one['title'].'</h2>';
			    echo '<h4>'.$one['date'].'</h4>';
				echo '<a href="edit?id='.$one['item_id'].'" class="btn">Редактировать</a> ';
				echo '<a href="delete?id='.$one['item_id'].'" class="btn">Удалить</a> ';
				echo '<a href="post?id='.$one['item_id'].'" class="btn">Читать</a> ';
				echo '<hr>';
			}
		?>
	</div>
</div>