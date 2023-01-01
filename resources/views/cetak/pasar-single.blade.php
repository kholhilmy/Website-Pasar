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
        <h1>Informasi {{ $pasar->nama_pasar }}</h1>
        <table style="margin: 10px">
            <colgroup>
                <col span="1" style="width: 20%;">
                <col span="1" style="width: 80%;">
            </colgroup>
            <tbody>
            <tr>
                <td style="text-align: left">Nama Pasar</td>
                <td>: {{ $pasar->nama_pasar }}</td>
            </tr>
            <tr>
                <td style="text-align: left">Alamat</td>
                <td>: {{ $pasar->alamat }}</td>
            </tr>
            <tr>
                <td style="text-align: left">Pengelola</td>
                <td>
                    @if(empty($pasar->pengelola->user->name))
                        : -
                    @else
                        : {{ $pasar->pengelola->user->name }}
                    @endif
                </td>
            </tr>
            <tr>
                <td style="text-align: left">Jumlah Tenant</td>
                <td>
                    : {{ $pasar->tenant->count() }}
                </td>
            </tr>
            <tr>
                <td style="text-align: left">Dibuat oleh</td>
                <td>
                    : {{ $pasar->created_by }}
                </td>
            </tr>
            <tr>
                <td style="text-align: left">Dibuat pada</td>
                <td>
                    : {{ $pasar->created_at }}
                </td>
            </tr>
            <tr>
                <td style="text-align: left">Terakhir diedit oleh</td>
                <td>
                    @if(empty($pasar->edited_by))
                        : {{ $pasar->created_by }}
                    @else
                        : {{ $pasar->edited_by }}
                    @endif
                </td>
            </tr>
            <tr>
                <td style="text-align: left">Terakhir diedit pada</td>
                <td>
                    : {{ $pasar->updated_at }}
                </td>
            </tr>
            </tbody>
        </table>

        <div>
            <h1>Daftar Tenant di {{ $pasar->nama_pasar }}</h1>
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
                @foreach ($pasar->tenant as $tenant)
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
