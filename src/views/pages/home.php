<?php $render('header'); 
   
     if(isset($_SESSION['msg_alert'])){
         session_destroy();
         unset($_SESSION['msg_elert']);
         header("Refresh: 0");
     }

?>

<table class="table" border="1" width="100%">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Produto</th>
        <th scope="col">Preço</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <?php foreach($produtos as $produto): ?>
        <tr>
            <td><?=$produto['nome'];?></td>
            <td><?=$produto['valor'];?></td>
            <td><?=$produto['quantidade'];?></td>
            <td>
                <a href="<?=$base;?>/produto/<?=$produto['id'];?>/editar" >
                    <img src="<?=$base;?>/assets/images/configuracao.png" alt="">
                </a>
                <a href="<?=$base;?>/produto/<?=$produto['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir esse produto?')" >
                    <img src="<?=$base;?>/assets/images/excluir.png" alt="">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="<?=$base;?>/novo" class="btn btn-primary add-new">Novo Produto</a>


<?php $render('footer'); ?>