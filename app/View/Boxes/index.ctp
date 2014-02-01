<h1>Boxes</h1>
<table>
	<tr>
    	<th>ID</th>
    	<th>Login</th>
    	<th>Link</th>
        <th>Senha</th>
        <th>Nome</th>
    </tr>
    <?php foreach ($boxes as $box) { ?>
	<tr>
    	<td><?php echo $box['Box']['id']; ?></td>
    	<td><?php echo $box['Box']['login']; ?></td>
        <td>
        	<?php echo $this->Html->link($box['Box']['nome'], array('controller' => 'boxes', 'action' => 'ver', $box['Box']['id'])); ?>
		</td>
    	<td><?php echo $box['Box']['senha']; ?></td>
    	<td><?php echo $box['Box']['nome']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    'Editar',
                    array('action' => 'editar', $box['Box']['id'])
                );
				echo $this->Form->postLink(
                    'Apagar',
                    array('action' => 'apagar', $box['Box']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
    </tr>
    <?php } ?>
</table>
    <?php echo $this->Html->link('Criar Box', array('controller' => 'boxes', 'action' => 'criar')); ?>