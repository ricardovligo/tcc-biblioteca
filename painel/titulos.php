<?php include "topo.php"; ?>

<div id="Corpo">

    <div class="Conteudo">
        <div style="width:100%; height:140px;"><div class="BotaoAdicionar">Adicionar</div></div>

        <div class="Tabela">
            <div class="TabelaLinha" style="background-color:#8a8a8a;">
                <div class="TabelaLinhaColuna" style="width:60%">Título</div>
                <div class="TabelaLinhaColuna" style="width:14%">Categoria</div>
                <div class="TabelaLinhaColuna" style="width:8%">Emprestado</div>
                <div class="TabelaLinhaColuna" style="width:8%">Disponível</div>
                <div class="TabelaLinhaColuna" style="width:5%">Editar</div>
                <div class="TabelaLinhaColuna" style="width:5%">Excluir</div>
            </div>
            <?php for ($i = 0; $i < 5; $i++) { ?>
            <div class="TabelaLinha">
                <div class="TabelaLinhaColuna" style="width:60%">Harry Potter</div>
                <div class="TabelaLinhaColuna" style="width:14%">Aventura</div>
                <div class="TabelaLinhaColuna" style="width:8%">1</div>
                <div class="TabelaLinhaColuna" style="width:8%">3</div>
                <div class="TabelaLinhaColuna" style="width:5%">-</div>
                <div class="TabelaLinhaColuna" style="width:5%">-</div>
            </div>
            <?php } ?>
        </div>
    </div>

</div>

<?php include "rodape.php"; ?>