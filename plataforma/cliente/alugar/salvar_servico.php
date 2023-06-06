<?php 
        require('../../conexao.php');


if (isset($_POST['submit'])) {      

       $codigoCarro = $_POST['codigoCarro'];

       $descricao = $_POST['descricao'];

       $codigoCliente = $_POST['codigoCliente'];

        


        //$insert_aluguel = "INSERT INTO aluguel (codigoCarro, descricao, codigoCliente) VALUES ('".$codigoCarro."','".$descricao."', '".$codigoCliente."')";	

        $insert_aluguel = "INSERT INTO aluguel (codigoCarro, descricao, codigoCliente) VALUES ('".$codigoCarro."','".$descricao."', '".$codigoCliente."')";	

        
        $insert_descricao_carro = "UPDATE carro SET descricao_carro = 'ALUGADO' WHERE codigo_carro = $codigoCarro";

        if (mysqli_query($conexao, $insert_aluguel)) {

                //mysqli_close($conexao);

                echo "<script> alert ('ALUGUEL FEITO COM SUCESSO!');</script>";

                echo "<script> window.location.href='$url_cliente/alugar/alugar.php';</script>";
                
        } else {
        
                echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ALUGAR.');</script>";

                echo "<script> window.location.href='$url_cliente/alugar/alugar.php';</script>";
                
                //mysqli_close($conexao);
        }


        if (mysqli_query($conexao, $insert_descricao_carro)) {

                mysqli_close($conexao);

                echo "<script> alert ('ALUGUEL FEITO COM SUCESSO!');</script>";

                echo "<script> window.location.href='$url_cliente/alugar/alugar.php';</script>";
                
        } else {
        
                echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL ALUGAR.');</script>";

                echo "<script> window.location.href='$url_cliente/alugar/alugar.php';</script>";
                
                mysqli_close($conexao);
        }      
}

?>