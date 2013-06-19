<?php

Class Controller_Add Extends Controller_Base {
        
        function index() {
            $this->registry['view']->set ('page', 'add');
            $this->registry['view']->show('index');
			
			if (isset($_POST['add'])){
                $stmt = $this->registry['db']->prepare('INSERT INTO item (title, text) VALUES(:title, :text)');
                $values=$_POST['item'];
                $stmt->execute(array(
                    ':title'=>$values['title'],
                    ':text'=>$values['text'],
                ));	
				
				header('Location: http://blog.dev/');
				exit;
            };
        }	
}