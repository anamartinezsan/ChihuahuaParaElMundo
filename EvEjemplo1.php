<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Eventos</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h1 {
            margin: 0;
            font-size: 18px;
        }
        .navbar .stats {
            display: flex;
            gap: 20px;
        }
        .navbar .stats div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .content {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .sidebar {
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background: #333;
            color: #fff;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 10px;
            text-align: center;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }
        .sidebar ul li.logout {
            position: absolute;
            bottom: 50px;
            width: 100%;
        }
    </style>
</head>
<body>
<?php include 'Sidebar.php'; ?>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Personalidad</th>
                    <th>Organización</th>
                    <th>Estado</th>
                    <th>Organización</th>
                    <th>Estado</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>RBandon</td>
                    <td>CRP</td>
                    <td>Pendiente</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ana</td>
                    <td>CRP</td>
                    <td>Confirmado</td>
                </tr>
                <!-- Agregar más filas según sea necesario -->
            </tbody>
        </table>
    </div>
</body>
</html>
