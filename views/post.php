<div class="row">    
	<div class="span12">
		<h1><?php echo $item['title'];?></h1>
		<h4><?php echo $item['date'];?></h4>
		<p><?php echo $item['text'];?></p>
		<a href="edit?id=<?php echo $item['item_id'];?>" class="btn">Редактировать</a>
		<a href="delete?id=<?php echo $item['item_id'];?>" class="btn">Удалить</a>
	</div>
</div>