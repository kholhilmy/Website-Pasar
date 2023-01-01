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
        <h1>Informasi {{ $pemilik->nama }}</h1>
        <table style="margin: 10px">
            <colgroup>
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 80%;">
            </colgroup>
            <tbody>
            <tr>
                <td style="text-align: left">Nama</td>
                <td>: {{ $pemilik->nama }}</td>
            </tr>
            <tr>
                <td style="text-align: left">Alamat </td>
                <td>: {{ $pemilik->alamat }}</td>
            </tr>
            <tr>
            <td style="text-align: left">NIK </td>
            <td >: {{ $pemilik->nik }}</td>
            </tr>

            <tr >
            <td style="text-align: left">No WhatsApp </td>
            <td >: {{ $pemilik->no_wa }}</td>
            </tr>

            <tr >
            <td style="text-align: left">No Telephone </td>
            <td >: {{ $pemilik->no_telp }}</td>
            </tr>

            <tr >
            <td style="text-align: left">Jumlah Tenant </td>
            <td >: {{ $pemilik->tenant->count() }}</td>
            </tr>

            <tr >
            <td style="text-align: left">Dibuat oleh</td>
            <td >: {{ $pemilik->created_by }}</td>
            </tr>

            <tr >
            <td style="text-align: left">Dibuat pada</td>
            <td >: {{ $pemilik->created_at }}</td>
            </tr>

            <tr >
            <td style="text-align: left">Terakhir diedit oleh</td>
            <td >
                @if(empty($pemilik->edited_by))
                    : {{ $pemilik->created_by }}
                @else
                    : {{ $pemilik->edited_by }}
                @endif
            </td>
            </tr>

            <tr >
            <td style="text-align: left">Terakhir diedit pada</td>
            <td >: {{ $pemilik->updated_at }}</td>
            </tr>
            </tbody>
        </table>

        <div>
            <h1>Daftar Tenant milik {{ $pemilik->nama }}</h1>
            <table class="tenant">
                <thead>
                <tr >
                    <th>No</th>
                    <th>Nama Tenant</th>
                    <th>Nama Pemilik</th>
                    <th>Biaya Iuran</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pemilik->tenant as $tenant)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        {{ $tenant->nama_tenant }}
                    </td>
                    <td>
                        {{ $tenant->pemilik->nama }}
                    </td>
                    <td>
                        {{ $tenant->biaya_iuran }}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
</body>
</html>


