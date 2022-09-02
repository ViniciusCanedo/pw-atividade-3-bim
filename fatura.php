<?php

    include_once("inVoice.php");

    $fatura1 = new inVoice(19, "Monitor", 20, 499.99);

    echo "<p>Número da fatura: {$fatura1->numeroFatura}</p>";
    echo "<p>Produto: {$fatura1->descItem}</p>";
    echo "<p>Quantidade: {$fatura1->qtdItem}</p>";
    echo "<p>Preço: {$fatura1->preco}</p>";
    echo "<p>Valor total: {$fatura1->getInVoiceAmount()}</p>";

?>