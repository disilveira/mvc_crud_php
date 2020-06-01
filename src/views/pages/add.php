<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?php echo $base.'/novo';?>">
    <label for="nome">
        Nome:<br/>
        <input type="text" name="nome" id="nome">
    </label><br/><br/>
    <label for="email">
        Email:<br/>
        <input type="email" name="email" id="email">
    </label><br/><br/>
    <input type="submit" value="Adicionar"/>
</form>

<?php $render('footer'); ?>