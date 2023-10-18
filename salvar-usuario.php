<?php
    switch($_REQUEST["acao"])
    {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);

            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";
            $res = $conn->query($sql);

            if ($res == true)
            {
                print "<script>alert('Cadastrado com sucesso!');</script>";
                header("Location: ?page=listar");
            }
            else
            {
                print "<script>alert('Não foi possível cadastrar');</script>";
                header("Location: ?page=listar");
            }
        break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}' WHERE id=" . $_REQUEST["id"];
            $res = $conn->query($sql);

            if ($res == true)
            {
                print "<script>alert('Editado com sucesso!');</script>";
                header("Location: ?page=listar");
            }
            else
            {
                print "<script>alert('Não foi possível editar');</script>";
                header("Location: ?page=listar");
            }
        break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=" . $_REQUEST["id"];
            $res = $conn->query($sql);

            if ($res == true)
            {
                print "<script>alert('Excluido com sucesso!');</script>";
                header("Location: ?page=listar");
            }
            else
            {
                print "<script>alert('Não foi possível excluir');</script>";
                header("Location: ?page=listar");
            }
        break;
    }