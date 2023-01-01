<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
    </head>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        .tenant td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        .tenant tr:nth-child(even) {
        background-color: #dddddd;
        }
        h1 {
            font-weight: bold;
            font-size: 16pt;
        }
        </style>
    </style>
    <body>
        <h1>Informasi {{ $tenant->nama_tenant }}</h1>
        <table  style="margin: 10px">
            <colgroup>
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 80%;">
            </colgroup>
            <tbody>
            <tr>
                <th style="text-align: left">Nama Tenant</th>
                <td>: {{ $tenant->nama_tenant }}</td>
            </tr>
            <tr>
                <th style="text-align: left">Nama Pemilik</th>
                <td>: {{ $tenant->pemilik->nama }}</td>
            </tr>
            <tr>
                <th style="text-align: left">Nama Pasar</th>
                <td>: {{$tenant->pasar->nama_pasar}}</td>
            </tr>
            <tr>
                <th style="text-align: left">Biaya Iuran</th>
                <td>: {{$tenant->biaya_iuran}}</td>
            </tr>
            <tr>
                <th style="text-align: left">Koordinat</th>
                <td>: {{$tenant->longitude}}, {{$tenant->latitude}}</td>
            </tr>
            <tr>
                <th style="text-align: left">Dibuat oleh</th>
                <td>
                    : {{ $tenant->created_by }}
                </td>
            </tr>
            <tr>
                <th style="text-align: left">Dibuat pada</th>
                <td>
                    : {{ $tenant->created_at }}
                </td>
            </tr>
            <tr>
                <th style="text-align: left">Terakhir diupdate oleh</th>
                <td>
                    @if(empty($tenant->edited_by))
                        : {{ $tenant->created_by }}
                    @else
                        : {{ $tenant->edited_by }}
                    @endif
                </td>
            </tr>
            <tr>
                <th style="text-align: left">Terakhir diupdate pada</th>
                <td>
                    : {{ $tenant->updated_at }}
                </td>
            </tr>
            </tbody>
        </table>
</body>
</html>
