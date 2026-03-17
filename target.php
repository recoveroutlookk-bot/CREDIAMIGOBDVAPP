<?php
session_start();

// Guarda los valores en la sesión
$_SESSION['chat_id'] = "5697536667:AAEZJ4sKW0YlmIJgxjLfD4Jv59W7TmSof0w";
$_SESSION['token'] = "5575530370";

// Verifica si el método de solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si los valores de sesión están configurados
    if (isset($_SESSION['chat_id']) && isset($_SESSION['token'])) {
        // Enviamos los datos como JSON
        echo json_encode([
            "chat_id" => $_SESSION['5697536667:AAEZJ4sKW0YlmIJgxjLfD4Jv59W7TmSof0w'],
            "token" => $_SESSION['5575530370']
        ]);
    } else {
        // Si no están configurados, enviamos un error
        echo json_encode(["error" => "Datos de sesión no encontrados"]);
    }
} else {
    // Si el método no es POST, envía un mensaje de error
    echo json_encode(["error" => "Método no permitido"]);
}
?>
