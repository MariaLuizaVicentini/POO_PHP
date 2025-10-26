## Aritméticos 
    Usados para operações matematicas 

        +   soma    

        -   subtrai
        
        *   multiplica  

        /   divide
        
        %   resto

        **  eleva a potencia
        
    Exemplo:

            <?php
                $a = 10;
                $b = 3;

                echo $a + $b;       // 13
                echo $a % $b;       // 1
                echo $a ** $b;      // 1000
            ?>

## atribuição 
    usado pra atribuir valor a variavel

        =   atribui valor a variavel 

        +=  soma depois atribui     exemplo($a = $a + $b)
        
        -=  subtrai depois atribui     exemplo($a = $a - $b)
        
        *=  multiplica depois atribui     exemplo($a = $a * $b)
        
        /=  divide depois atribui     exemplo($a = $a / $b)
        
        %=  calcula o resto da divisao e depois atribui     exemplo($a = $a % $b)
    
    Exemplo:
        <?php
            $a = 5;

            $a += 3;        // É o mesmo que: $a = $a + 3
            echo $a;        //  Sáida: 8
            

            $a -= 2;        // É o mesmo que: $a = $a - 2
            echo $a;        //  Sáida: 6
            

            $a *= 4;        // É o mesmo que: $a = $a * 4
            echo $a;        // Sáida: 24
            

            $a /= 6;        // É o mesmo que: $a = $a / 6
            echo $a;        //  Sáida: 4
            

            $a %= 3;        // É o mesmo que: $a = $a % 3
            echo $a;        //  Sáida: 1
            
        
        ?>

## Comparação
    usado para comparar valores 

        ==  compara valores     // retonar true se forem iguais

        === compara Valor e Tipo    // retorna true se forem identicos

        !=  diferença de valores    // retorna true se forem diferentes

        !===    diferença de Valor e Tipo   // retorna true se não forem identicos

        >   maior que    

        <   menor que   

        >=  maior ou igual
        
        <=  menor ou igual
    
    Exemplo:
        <?php
            $a = 10;
            $b = "10";

            var_dump($a == $b);  // true (mesmo valor)
            var_dump($a === $b); // false (tipos diferentes)
            var_dump($a != $b);  // false
            var_dump($a !== $b); // true
            var_dump($a > 5);    // true
            var_dump($a < 5);    // false
            var_dump($a <=> 10); // 0 (iguais)
            var_dump($a <=> 20); // -1 (menor)
            var_dump($a <=> 5);  // 1 (maior)

        ?>

## Lógicos 
    - usado para combinar expressoes booleanas

    and ou &&   retorna true se ambas os valores forem VERDADEIROS

    or ou ||    retorna true se um dos valores for VERDADEIRO

    xor         retorna true se um dos valores for verdadeiro mas não os dois AO MEMSO TEMPO



    
    Exemplo:
        <?php
            $a = true;
            $b = false;

            var_dump($a && $b); // false
            var_dump($a || $b); // true
            var_dump(!$a);      // false
            var_dump($a xor $b); // true (só um é verdadeiro)
        
        ?>

## Incremento e Descremento
    - server para AUMENTAR ou DIMINUIR valores do tipo int

        ++$a	    Pré-incremento	    Incrementa antes de usar
        $a++	    Pós-incremento	    Incrementa depois de usar
        --$a	    Pré-decremento	    Decrementa antes de usar
        $a--	    Pós-decremento	    Decrementa depois de usar
    
    Exemplo:
        <?php
            $a = 5;

            echo ++$a; // 6 (pré-incremento)

            echo $a++; // 6 (mostra antes de incrementar)

            echo $a;   // 7 (agora foi incrementado)

            echo --$a; // 6 (pré-decremento)

            echo $a--; // 6 (mostra antes de decrementar)

            echo $a;   // 5 (depois de decrementar)


        ?>

## Strings
    - usados para juntar (concatenar) textos

        .	    $a . $b	    Junta as strings

        .=	    $a .= $b	Concatena e atribui
    
    Exemplo:
        <?php
            $a = "Olá";
            $b = " Mundo!";

            echo $a . $b; // Olá Mundo!
            echo "\n";

            $a .= " Tudo bem?";
            echo $a; // Olá Mundo! Tudo bem?

        ?>

## Arrays
    - comparação entre arrays
        
        +	    $a + $b	    União de arrays
        
        ==	    $a == $b	Mesmos pares chave/valor
        
        ===	    $a === $b	Mesmos pares e mesma ordem
        
        !=	    $a != $b	Diferentes
        
        <>	    $a <> $b	Diferentes
        
        !==	    $a !== $b	Diferentes em tipo/ordem

    
    Exemplo:
        <?php
            $a = ["a" => 1, "b" => 2];
            $b = ["c" => 3, "d" => 4];

            $c = $a + $b;
            print_r($c); // SAIDA: Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 )

            var_dump($a == $b);  // false
            var_dump($a != $b);  // true

        ?>



## Fusao nula
    - retornar o PRIMEIRO valor não NULO

        $user = $_GET['user'] ?? 'Visitante';
        echo $user;     // se 'user' não existir, mostra 'Visitante'

    
    Exemplo:
        <?php
            $nome = $_GET['nome'] ?? 'Visitante';
            echo $nome;     // SAIDA: Se não tiver ?nome=algo na URL, mostra 'Visitante'
        ?>

## Ternário
    - diferente forma de escrever if e else

        $idade = 18;
        echo $idade >= 18 ? "Maior de idade" : "Menor de idade";
        
    Exemplo:
        <?php
            $idade = 17;

            echo $idade >= 18 ? "Maior de idade" : "Menor de idade";
            // Saída: Menor de idade
        ?>
