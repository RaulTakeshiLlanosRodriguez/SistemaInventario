<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reporte</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: auto;
        }

        .table {
            width: 100%;
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            table-layout: fixed;
        }

        .table h1 {
            font-size: 28px;
            text-transform: uppercase;
            font-weight: bold;
            margin: 8px 0px;
        }

        .table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
        }

        .table th,
        .table td {
            font-size: 16px;
            padding: 8px;
            text-align: center;
        }

        .table thead th {
            text-transform: uppercase;
            background-color: #ddd;
        }

        .table tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }

        .table tbody td:hover {
            background-color: rgba(0, 0, 0, 0.3);
        }
        .page-break{
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Listado de Muebles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo Patrimonial</th>
                    <th>Tipo</th>
                    <th>Unidad de Medida</th>
                    <th>Estado</th>
                    <th>Procedencia</th>
                    <th>Ubicacion</th>
                    <th>Observacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($muebles as $mueble)
                    <tr>
                        <td>{{ $mueble->codPatrimonial }}</td>
                        <td>{{ $mueble->tipo }}</td>
                        <td>{{ $mueble->unidadMedida }}</td>
                        <td>{{ $mueble->estado }}</td>
                        <td>{{ $mueble->procedencia }}</td>
                        <td>{{ $mueble->ubicacion }}</td>
                        <td>{{ $mueble->observacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
