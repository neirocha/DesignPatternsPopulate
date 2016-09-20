<?php

define('CLASS_DIR', __DIR__ . "/../src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


$conn = new NEI\CONEXAO\ConexaoDB();



$limpTable = $conn->conexaoDB()->exec("DROP TABLE IF EXISTS produto;");


$tabProd = $conn->conexaoDB()->exec(
    "CREATE TABLE IF NOT EXISTS `produto` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `valor` VARCHAR(14) NOT NULL,
    `descricao` TEXT NOT NULL,
    `categoria` TEXT NULL);"
);



$nome = array(
    0=>'Carro',
    1=>'Moto',
    2=>'Caminhonete',
    3=>'Barco',
    4=>'Lancha'
);

$valor = array(
    0=>'35.000,00',
    1=>'18.000,00',
    2=>'75.000,00',
    3=>'125.000,00',
    4=>'95.000,00'
);

$descricao = array(
    0=>'Voyage 4 portas',
    1=>'XRE 300cc flex power',
    2=>'F400 carroceria alongada',
    3=>'Barco veleiro 9500 pés',
    4=>'Honda esportiva'
);

$categoria = array(
    0=>'SEDAN',
    1=>'RALY',
    2=>'TRANSPORTE',
    3=>'VELEIRO',
    4=>'CORRIDA'
);

for($i=0; $i<=4; $i++){



     $stmt = $conn->conexaoDB()->prepare("INSERT INTO produto(nome,valor,descricao,categoria) VALUES(:nome,:valor,:descricao,:categoria);");

    $stmt->bindParam(":nome", $nome[$i]);
    $stmt->bindParam(":valor", $valor[$i]);
    $stmt->bindParam(":descricao", $descricao[$i]);
    $stmt->bindParam(":categoria", $categoria[$i]);

    $stmt->execute();
    echo "Tabela Criada!<br>Dados Cadastrados!";
}



