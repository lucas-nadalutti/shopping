<h1>Criar Box</h1>
<?php
	echo $this->Form->create('Box');
	echo $this->Form->input('login');
	echo $this->Form->input('senha', array('rows' => '3'));
	echo $this->Form->input('nome');
	echo $this->Form->end('Criar Box');
?>