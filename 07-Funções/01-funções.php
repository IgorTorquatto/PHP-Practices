<?php
    declare(strict_types = 1);

    function multiplicar ( $a , $b = 5): int{
        return $a * $b;
    }

    echo multiplicar(2) . PHP_EOL;
    echo multiplicar(2,2) . PHP_EOL;

    function adicionar( $a,$b): int{
        return $a + $b;
    }

    echo adicionar(5,5);
