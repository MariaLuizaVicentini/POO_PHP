## Condicionais
    usadas para executar blocos de código dependendo de uma condição

        if      executa se a condição for verdadeira
        else    executa se a condição for falsa
        elseif  verifica nova condição se a anterior for falsa
        switch  compara uma variável com vários valores possíveis

    Exemplo:

        <?php
            $idade = 18;

            if ($idade < 18) {
                echo "Menor de idade";
            } elseif ($idade == 18) {
                echo "Acabou de atingir a maioridade";
            } else {
                echo "Maior de idade";
            }

            $cor = "vermelho";

            switch ($cor) {
                case "azul":
                    echo "Sua cor favorita é azul";
                    break;
                case "vermelho":
                    echo "Sua cor favorita é vermelho";
                    break;
                default:
                    echo "Cor não identificada";
            }
        ?>

## Estruturas de Repetição
    usadas para repetir um bloco de código enquanto uma condição for verdadeira

        while       executa ENQUANTO a condição for verdadeira
        do...while  executa PELO MENOS uma vez antes de verificar
        for         executa um número definido de vezes
        foreach     percorre elementos de arrays

    Exemplo:

        <?php
            $i = 1;
            while ($i <= 3) {
                echo "Contagem: $i\n";
                $i++;
            }

            $j = 1;
            do {
                echo "Executou $j\n";
                $j++;
            } while ($j <= 2);

            for ($k = 0; $k < 3; $k++) {
                echo "Loop for número $k\n";
            }

            $nomes = ["Ana", "Bruno", "Carlos"];
            foreach ($nomes as $nome) {
                echo "Olá, $nome!\n";
            }
        ?>

## Controle de Fluxo
    usados para alterar o comportamento normal de loops ou scripts

        break       interrompe o loop atual
        continue    pula para a próxima iteração do loop
        return      retorna um valor de uma função
        exit        encerra o script imediatamente

    Exemplo:

        <?php
            for ($i = 1; $i <= 5; $i++) {
                if ($i == 3) {
                    continue; // pula o número 3
                }
                if ($i == 5) {
                    break; // interrompe o loop
                }
                echo "$i\n";
            }

            function somar($a, $b) {
                return $a + $b;
            }
            echo somar(2, 3); // 5

            echo "Antes do exit";
            exit("Script encerrado");
        ?>

## Estruturas de Inclusão
    usadas para importar e reutilizar arquivos PHP

        include         inclui o arquivo, mas não interrompe o script se falhar
        require         inclui o arquivo e interrompe se falhar
        include_once    inclui apenas uma vez (mesmo se chamado várias vezes)
        require_once    igual ao anterior, mas com require

    Exemplo:

        <?php
            include "header.php";
            require "config.php";
            include_once "funcoes.php";
            require_once "conexao.php";

            echo "Arquivos incluídos com sucesso!";
        ?>

## Estrutura Match (PHP 8+)
    semelhante ao switch, mas retorna valores diretamente e não precisa de break

    Exemplo:

        <?php
            $nota = 9;

            $resultado = match (true) {
                $nota >= 9 => "Excelente",
                $nota >= 7 => "Bom",
                $nota >= 5 => "Regular",
                default => "Insuficiente"
            };

            echo $resultado;
        ?>
