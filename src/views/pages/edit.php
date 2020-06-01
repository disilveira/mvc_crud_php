<?php $render('header'); ?>

<h2>Editar Usuário</h2>

<form method="POST" action="<?php echo $base.'/usuario/'.$usuario['id'].'/editar';?>">
    <label for="nome">
        Nome:<br/>
        <input type="text" name="nome" id="nome" value="<?=$usuario['nome'];?>">
    </label><br/><br/>
    <label for="email">
        Email:<br/>
        <input type="email" name="email" id="email" value="<?=$usuario['email'];?>">
    </label><br/><br/>
    <input type="submit" value="Adicionar"/>
</form>

<?php $render('footer'); ?>