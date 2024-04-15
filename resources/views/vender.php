<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #CA3110; /* Rojo */
            color: #fff;
            padding: 10px;
        }
        #ventas {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #CA3110; /* Rojo */
            color: #fff;
        }
        #total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Papagani</h1>
    </header>
    <div id="ventas">
        <h2 id="ventas">Ventas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Producto</th>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Agua</td>
                    <td>2</td>
                    <td>$19</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Coca Cola</td>
                    <td>1</td>
                    <td>$20</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kit Kat</td>
                    <td>3</td>
                    <td>$25</td>
                </tr>
            </tbody>
            <tfoot>
                <tr id="total">
                    <td colspan="3">Total</td>
                    <td>$133</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>
