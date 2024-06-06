
<!DOCTYPE html>
<?php

include_once('config/database.php');

?>

<html lang="pt-br">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Afazeres</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Lista de Afazeres</h1>
        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nome</th>
                        <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descrição</th>
                        <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                        <th class="w-1/4 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Data da Criação</th>
                    </tr>
                </thead>
                <tbody>

               <?php 
                     $rs= $con->query ("SELECT * FROM afazeres");
                    while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                        echo '<tr class="border-b">
                        <td class="py-2 px-4 text-sm text-gray-700">'. $row->titulo.' </td>
                        <td class="py-2 px-4 text-sm text-gray-700"> '. $row->descricao.'</td>
                        <td class="py-2 px-4 text-sm text-gray-700">'. $row->status.'</td>
                        <td class="py-2 px-4 text-sm text-gray-700"> '. $row->data. '</td>
                    </tr>';
}

?>



                
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>


