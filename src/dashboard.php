<br>
<div class="container-fluid mt-5">
    <div class="row justify-content-center align-items-start"> <!-- Adicionado justify-content-center para centralizar as colunas -->
        <div class="col-md-4">
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Pesquisar paciente">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            <br>
            <div class="d-grid gap-2" href="index.php?page=pmateriais">
                    <button class="btn btn-lg btn-primary">Materiais para download</button>
            </div>
            <?php include "dashboard\profissOnline.php"; ?>
        </div> <!-- Fim da primeira coluna -->

        <!-- Segunda coluna -->
        <div class="col-md-4">
            <div class="container mt-5">
                <h5 class="text-center mb-4">Agenda do dia- <?php echo date("d/m/Y"); ?></h5>
                <ul class="list-group" style="font-size: 14px;">
                    <?php
                    $horario = strtotime("08:00");
                    $fim_do_dia = strtotime("17:00");
                    while ($horario <= $fim_do_dia) {
                        echo "<li class='list-group-item py-3'>";
                        echo "<strong>" . date("H:i", $horario) . "</strong>";
                        echo "<ul class='list-unstyled mb-0'>";
                        // Verificando e adicionando reuniões
                        switch ($horario) {
                            case strtotime("08:00"):
                                echo "<li class='meeting'>Atendimento com Pedro P. - Sala 1</li>";
                                break;
                            case strtotime("10:00"):
                                echo "<li class='meeting'>Atendimento com Carlos L. - Sala 3</li>";
                                break;
                            case strtotime("13:00"):
                                echo "<li class='meeting'>Atendimento com Fábio M. - Sala 7</li>";
                                break;
                            // Adicione mais casos conforme necessário
                        }
                        echo "</ul>";
                        echo "</li>";
                        // Avança para a próxima hora
                        $horario = strtotime("+1 hour", $horario);
                    }
                    ?>
                </ul>
            </div>
        </div>

        <!-- Terceira coluna -->
        <div class="col-md-4">
            <div class="container mt-5">
                <div class="card mb-3">
                    <h2 class="card-header">Avisos gerais</h2>
                    <div class="card-body">
                        <h4 class="card-title">Novos brinquedos nas salas!</h4>
                        <h6 class="card-subtitle text-muted">Novas experiências para novos resultados!</h6>
                    </div>
                    <img src="assets/img/Imagemclinica.jpeg" width="100%" height="200" alt="Imagem da clínica" style="object-fit: cover;">
                    <div class="card-body">
                        <p class="card-text">Novos jogos e brinquedos que nos possibilitarão um auxílio maior no desenvolvimento de nossos pacientes. Veja exemplos de alguns novos brinquedos que chegaram ao Pequenos Passos</p>
                        <!-- Link "Saiba mais" -->
                        <a href="#" class="btn btn-primary" id="saibaMaisBtn">Saiba mais</a>
                        <!-- Div oculta com informações adicionais -->
                        <div id="infoAdicionais" style="display: none;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Novos Brinquedos sensoriais</li>
                                <li class="list-group-item">Novos Jogos de quebra-cabeça</li>
                                <li class="list-group-item">Novos Livros interativos</li>
                                <li class="list-group-item">Novos Kits de arte</li>
                                <li class="list-group-item">Novos Jogos cooperativos</li>
                                <li class="list-group-item">Novos Livros para leitura conjunta</li>
                                <li class="list-group-item">Nova Caixa de Areia</li>
                            </ul>
                            <div class="card-footer text-muted">
                                2 dias atrás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Seleciona o link "Saiba mais" e a div das informações adicionais
    const saibaMaisBtn = document.getElementById('saibaMaisBtn');
    const infoAdicionais = document.getElementById('infoAdicionais');

    // Adiciona um evento de clique ao link "Saiba mais"
    saibaMaisBtn.addEventListener('click', function() {
        // Verifica se a div das informações adicionais está visível
        if (infoAdicionais.style.display === 'none') {
            // Se estiver oculta, torna visível
            infoAdicionais.style.display = 'block';
            // Atualiza o texto do link "Saiba mais" para "Fechar"
            saibaMaisBtn.textContent = 'Fechar';
        } else {
            // Se estiver visível, oculta
            infoAdicionais.style.display = 'none';
            // Atualiza o texto do link "Saiba mais" para "Saiba mais"
            saibaMaisBtn.textContent = 'Saiba mais';
        }
    });


        // Seleciona o link "Saiba mais" e a div das informações adicionais
        const pacdodiabtn = document.getElementById('pacdodiabtn');
    const pacdodia = document.getElementById('pacdodia');

    // Adiciona um evento de clique ao link "Saiba mais"
    pacdodiabtn.addEventListener('click', function() {
        // Verifica se a div das informações adicionais está visível
        if (pacdodia.style.display === 'none') {
            // Se estiver oculta, torna visível
            pacdodia.style.display = 'block';
            // Atualiza o texto do link "Saiba mais" para "Fechar"
            pacdodiabtn.textContent = 'Fechar';
        } else {
            // Se estiver visível, oculta
            pacdodia.style.display = 'none';
            // Atualiza o texto do link "Saiba mais" para "Saiba mais"
            pacdodiabtn.textContent = 'Mostrar pacientes do dia';
        }
    });
</script>