<?php

    include_once("empregado.php");

    $empregado1 = new empregado("Vitor", "Santos", 1500);

    echo "<p>Nome: {$empregado1->nome}</p>";
    echo "<p>Sobrenome: {$empregado1->sobrenome}</p>";
    echo "<p>Salário Mensal: {$empregado1->salarioMensal}</p>";
    echo "<p>Saláro Anual: {$empregado1->getSalarioAnual()}</p>";
    echo "<p>Aumento Salarial: {$empregado1->getAumento()}</p>";

?>