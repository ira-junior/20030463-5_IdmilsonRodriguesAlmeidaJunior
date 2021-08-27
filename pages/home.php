<?php

include("dados/dados.php");
?>

<div class="conteudo">


        <ul class="itens">
            
            <?php    
            foreach($doces as $doce){
            ?>
            
                <a href="index.php?produto=produto.php&id=<?php echo $doce["id"];?>">
                    
                    <li> 
                        <img src="<?php echo $doce["foto"];?>" alt=""><br>
                        <h3><?php echo $doce["tipo"] . ' de ' . $doce["sabor"];?></h3><br>
                        <p>R$: <?php echo $doce["preco"];?></p><br>
                        <h5>mais informaçoes --></h5>
                    </li>

                </a>
            
            <?php
            }
            ?>

        </ul>

</div>