<?php 
    $servername = 'localhost';
    $username = 'root' ;
    $password = 'root' ;
    $database = 'fullstackeletro';

    $tabela = $_GET['table'];
     
    //criando a conexão
    $conn = mysqli_connect ($servername, $username, $password, $database);

    // verificando conexão
    if (!$conn){
        die ("A conexão ao BD falhou: " .mysqli_connect_error());
    }

    $sql = "select * from $tabela";
    $result = $conn->query($sql);

    print_r (json_encode ($result->fetch_all(MYSQLI_ASSOC)) );

    mysqli_close($conn);

?>
