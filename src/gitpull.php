<?php
// Comando que você deseja executar
$comando = "bash /opt/scripts/git_pull_proj05-2024.sh";

// Executa o comando e armazena a saída em uma variável
$output = exec($comando);

// Exibe a saída do comando
echo $output;
?>
