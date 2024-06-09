<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";

    if ($nome !== "" && $email !== "") {
        $dados = "Nome: $nome - Email: $email\n";
        $arquivo = "VS NOVO/usuarios.txt";
        $handle = fopen($arquivo, "a");
        fwrite($handle, $dados);
        fclose($handle);
        
        header("Location: sucesso.html");
        exit;
    } else {
        header("Location: erro.html");
        exit;
    }
}
?>
