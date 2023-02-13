<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('RemoteStack') !!}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('RemoteStack') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>QR Code In Image</h2>
            </div>
            <div class="card-body">
                {!!QrCode::encoding('UTF-8')->size(300)->generate('Embed me into an e-mail!  0x0D0A Embed me into an e-mail!')!!}
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Drink Menu</h2>
            </div>
            <div class="card-body">
                {!!QrCode::encoding('UTF-8')->size(300)->generate($drink_menu, '/var/www/work/public/qrcodes/drink_menu.svg')!!}
                <img src="{{asset('qrcodes/drink_menu.svg')}}">
            </div>
        </div>
    </div>
</body>

</html>