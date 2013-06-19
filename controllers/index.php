<?php

Class Controller_Index Extends Controller_Base {

        function index() {
		    $stmt = $this->registry['db']->prepare('SELECT item_id, title, date FROM item ORDER BY date DESC');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		    $this->registry['view']->set ('items', $result);
            $this->registry['view']->set ('page', 'home');
            $this->registry['view']->show('index');
			
        }
}