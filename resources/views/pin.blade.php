<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOP</title>
</head>
<body>
    <form action="{{ route('verify.pin') }}" method="POST">
        @csrf
        <label for="pin">Masukkan PIN</label>
        <input type="text" name="pin" id="pin" required>
        <button type="submit">Lanjutkan</button>
    </form>
</body>
</html>
