<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
    <table class="table">
        <tr>
            <th scope="row">Resultado</th>
            <?php $counter1=-1;  if( isset($resultado) && ( is_array($resultado) || $resultado instanceof Traversable ) && sizeof($resultado) ) foreach( $resultado as $key1 => $value1 ){ $counter1++; ?>
                <td><?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <?php } ?>
        </tr>
    </table>
    <table class="table table-striped">
        <?php $counter1=-1;  if( isset($jogos) && ( is_array($jogos) || $jogos instanceof Traversable ) && sizeof($jogos) ) foreach( $jogos as $key1 => $value1 ){ $counter1++; ?>
            <tr>
                <th scope="row">Jogo <?php echo htmlspecialchars( $key1+1, ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                <?php $counter2=-1;  if( isset($value1) && ( is_array($value1) || $value1 instanceof Traversable ) && sizeof($value1) ) foreach( $value1 as $key2 => $value2 ){ $counter2++; ?>
                    <td><?php echo htmlspecialchars( $value2, ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    <?php $counter1=-1;  if( isset($acertos) && ( is_array($acertos) || $acertos instanceof Traversable ) && sizeof($acertos) ) foreach( $acertos as $key1 => $value1 ){ $counter1++; ?>
        <div class="d-flex justify-content-start">
            <h6>Acertos Jogo <?php echo htmlspecialchars( $key1+1, ENT_COMPAT, 'UTF-8', FALSE ); ?> :</h6>
            <?php $counter2=-1;  if( isset($value1) && ( is_array($value1) || $value1 instanceof Traversable ) && sizeof($value1) ) foreach( $value1 as $key2 => $value2 ){ $counter2++; ?>
                <p class="ml-4"><?php echo htmlspecialchars( $value2, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
            <?php } ?>
        </div>
    <?php } ?>
</div>