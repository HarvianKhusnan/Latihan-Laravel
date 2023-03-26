<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h3>{{ $title }}</h3>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Asal</td>
        </tr>
        @php $no = 1 @endphp
        @foreach($daf_mhs as $mhs)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['asal'] }}</td>
            </tr>
        @endforeach
    </table>    
</body>
</html>
