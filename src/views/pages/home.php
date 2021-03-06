<?php $render('header'); ?>

<a href="<?php echo $base.'/novo';?>">Novo Usuário</a>
<hr/>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?=$usuario['id'];?></td>
                <td><?=$usuario['nome'];?></td>
                <td><?=$usuario['email'];?></td>
                <td>
                    <a href="<?=$base.'/usuario/'.$usuario['id'].'/editar';?>">[ editar ]</a>
                    <a href="<?=$base.'/usuario/'.$usuario['id'].'/excluir';?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ excluir ]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $render('footer'); ?>