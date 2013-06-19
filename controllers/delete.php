<?php

Class Controller_Delete Extends Controller_Base {

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
            $this->registry['view']->set ('page', 'delete');
            $this->registry['view']->show('index');
			
			if (isset($_POST['delete'])){
                $stmt = $this->registry['db']->prepare('DELETE FROM item WHERE item_id=:item_id');
                $values=$_POST['item'];
                $stmt->bindParam(':item_id', $_GET['id']);
                $stmt->execute();
				
				header('Location: http://blog.dev/');
				exit;
            };
        }
}