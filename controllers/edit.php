<?php

Class Controller_Edit Extends Controller_Base {

        function index() {
		    if (isset($_GET['id'])){
		        $stmt = $this->registry['db']->prepare('SELECT item_id, title, text, date FROM item WHERE item_id=:item_id');
                $stmt->execute(array(
		            ':item_id'=>$_GET['id'],
	            ));
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
                $result = $stmt->fetch();
			};
			
		    $this->registry['view']->set ('item', $result);
		    $this->registry['view']->set ('page', 'edit');
		    $this->registry['view']->show('index');
			
			if (isset($_POST['edit'])){
                $stmt = $this->registry['db']->prepare('UPDATE item SET title=:title, text=:text WHERE item_id=:item_id');
                $values=$_POST['item'];
                $stmt->execute(array(
				    ':item_id'=>$_GET['id'],
                    ':title'=>$values['title'],
                    ':text'=>$values['text'],
                ));	
				
				header('Location: http://blog.dev/post?id='.$_GET['id']);
				exit;
            };
        }
}