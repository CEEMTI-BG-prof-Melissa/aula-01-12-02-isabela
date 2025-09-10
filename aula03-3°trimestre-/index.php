<html>
    <head>
        <title>Aula 03 php</title>
    </head>
    <body>
        <?php
        $nome1="Gustavo";
        $nome2="Isabela";

        $n1=10;
        $n2=2;
        $soma= $n1+$n2;

        echo "meu nome é" .$nome1 ."e minha dupla é" .$nome2;
        echo "<br> meu nome é" .$nome1 ."e minha dupla é" .$nome2;

        echo "<br> <br> A soma de $n1 com $n2 e igual $soma.";

        echo "<br> <br> O resultadado da subtração de $n1 com $n2 é igual a:".($n1-$n2);

        echo "<br> <br> O resultadado da multiplicação de $n1 com $n2 é igual a:".($n1*$n2);

        echo "<br> <br> O resultadado da divisão real de $n1 com $n2 é igual a:".($n1/$n2);

        echo "<br> <br> O resultadado do módulo de $n1 com $n2 é igual a:".($n1%$n2);


        ?>
    </body>
</html>
