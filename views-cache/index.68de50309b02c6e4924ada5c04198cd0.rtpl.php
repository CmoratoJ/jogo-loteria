<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container d-flex justify-content-center">
    <form method="post" action="../index.php">
        <div class="col-12">
            <div class="form-group">
                <label for="dezenas">Selecione as dezenas:</label>
                <select id="dezenas" class="form-control">
                    <option selected>Selecione...</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jogos">Informe a quantidade de jogos:</label>
                <input type="number" class="form-control" id="jogos" placeholder="nº jogos">
            </div>
            <button id="iniciar" type="button" class="btn btn-primary">Iniciar</button>
        </div>
    </form>
</div>
<div class="container">
    <table class="table">
        <tbody>
        <tr>
            <th scope="row">Jogo</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>
</div>