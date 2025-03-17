<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);
    
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "Arquivo enviado com sucesso!";
    } else {
        echo "Erro ao enviar arquivo.";
    }
}
?>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" />
    <button type="submit">Enviar</button>
</form>
