<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $mysqli = new mysqli('localhost', 'root', '', 'gestao_3a');
    
        // Suponha que $email seja obtido de algum formulário externo
        $nome = $_POST['nome'];
        $login = $_POST['login'];

        if (filter_var($_POST['nivel'],FILTER_VALIDATE_INT)){
            $nivel = $_POST['nivel'];
        }

        $senha = $_POST['senha1'];
        $nome = htmlentities(htmlspecialchars($nome));
        $login = htmlentities(htmlspecialchars($login));
        $senha = htmlentities(htmlspecialchars($senha));
        echo $senha . "<hr>";

        $senha = md5($senha);
        echo $senha . "<hr>";
        
        $dataAlteracao = date('Y-m-d H:i:s');
      //  echo $nome;
        // $email = $_POST['email'];
        $stmt = $mysqli->prepare("insert into USUARIOS (nomeCompleto, login, senha, nivel, dataAlteracao) 
        values (?,?,?,?,?)");
        
         if (!$stmt) {
             throw new Exception("Preparação da declaração falhou: " . $mysqli->error);
         }
    
         $stmt->bind_param('sssis', $nome, $login, $senha, $nivel,$dataAlteracao);
         $stmt->execute();
         $result = $stmt->get_result();
         
         if (!$result){
            echo "Dados cadastrados com sucesso";
         }
         else{
            echo "Erro ao cadastrar";
         }
         
         $stmt->close();
    } catch (mysqli_sql_exception $e) {
        echo "Erro de MySQL: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    } finally {
        if (isset($mysqli)) {
            $mysqli->close();
        }
    }
    

?>