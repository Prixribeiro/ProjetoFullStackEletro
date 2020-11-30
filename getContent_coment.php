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

    if (isset($_POST['nome'])&& isset($_POST['msg'])){
        $nome=$_POST['nome'];
        $msg=$_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }

    $sql = "select * from $tabela";
    $result = $conn->query($sql);

    print_r (json_encode ($result->fetch_all(MYSQLI_ASSOC)) );


    mysqli_close($conn);

?>
