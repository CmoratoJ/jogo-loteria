<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container col-md-4">
    <?php if( $mensagem != '' ){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars( $mensagem, ENT_COMPAT, 'UTF-8', FALSE ); ?>
        </div>
    <?php } ?>
    <h1 class="text-center">Jogo Loteria</h1>
    <form action="/exibe" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Quantidade de dezenas:</label>
            <input type="number" name="qtdDezenas" class="form-control" id="formGroupExampleInput" placeholder="Informe o número de dezenas" required>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Número de jogos:</label>
            <input type="number" name="nJogos" class="form-control" id="formGroupExampleInput2" placeholder="Informe o número de jogos" required>
        </div>
        <button type="submit" class="btn btn-primary">Jogar</button>
    </form>
</div>