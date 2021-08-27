<?php

include("dados/dados.php");
?>

<div class="conteudo">

    <?php 
    $doce = $doces[$_GET["id"]];
    
    ?>

    

        <ul class="produtoDetalhe">
            
            
             
            <img src="<?php echo $doce["foto"];?>" alt="">

            <div class="informacoes">
            <h3><?php echo $doce["tipo"] . ' de ' . $doce["sabor"];?></h3><br>
            <p><b>Ingredientes:</b><br><?php echo $doce["ingredientes"];?></p><br>
            <p><b>Mode de preparo:</b><br><?php echo $doce["preparo"];?></p><br>
            <h3>R$: <?php echo $doce["preco"];?></h3></li>
            <button class="btn" onclick="voltar()">Voltar</button>
            </div>
            
            

        </ul>

        

</div>

<script>
function voltar() {
    window.history.back()
}
</script>