<?php

Class Controller_Post Extends Controller_Base {

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
            $this->registry['view']->set ('page', 'post');
            $this->registry['view']->show('index');
			
        }
}