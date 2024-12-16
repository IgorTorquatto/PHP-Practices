<?php

//Vimos duas formas de criar arquivos

//1 forma:
//Cria um arquivo ,caso não exista. Se o arquivo existir sobreescreve , eliminando o que havia no arquio original
file_put_contents('criado.txt','Contéudo' . PHP_EOL);

//2 forma:
//Acrescenta conteúdo a um arquivo já existente
file_put_contents('criado.txt','conteúdo adicionado',FILE_APPEND);