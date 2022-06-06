<?php require 'modelo/modelo.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vista/css/estilos.css">
    <title>DataCRM</title>
</head>
<body>

    <div class="container">
        <a id="btnInfo" href="#">Ver Información</a>
        <table>
          <thead>
            <tr>
                <th>Id</th>
                <th>Contac_no</th>
                <th>Lastname</th>
                <th>Createdtime</th>
            </tr>
          </thead>
          <tbody id="informacion"></tbody>
        </table>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php require 'controlador/controla.php'; ?>
    
    
</body>
</html>


