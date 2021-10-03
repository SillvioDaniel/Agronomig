<?php
require_once "../inc/conexao.php";
            $codigo = $_POST["codigo"];
            $sql = "DELETE FROM cliente where cpf = :codigo";
            $result = $conn->prepare($sql);

            $result->bindParam(':codigo', $codigo, PDO::PARAM_STR);
            $result->execute();
?>