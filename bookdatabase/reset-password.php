<?php
    include_once 'connection.php';

    $userID = isset($_GET['userID']) ? $_GET['userID'] : 0;
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newPassword = $connection->real_escape_string($_POST['newPassword']);
        $confirmPassword = $connection->real_escape_string($_POST['confirmPassword']);

        if ($newPassword === $confirmPassword) {
            $sql = "UPDATE TabUsuario SET Senha = ? WHERE ID_usuario = ?";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("si", $newPassword, $userID);

            if ($stmt->execute()) {
                $message = "Senha atualizada com sucesso.";
            } else {
                $message = "Erro ao atualizar a senha: " . $connection->error;
            }

            $stmt->close();
        } else {
            $message = "As senhas não coincidem.";
        }

        $connection->close();
    }

    if (!empty($message)) {
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: login.php");
    }
?>