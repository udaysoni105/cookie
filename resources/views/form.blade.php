<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('store')}}"method="post">
    @csrf
    <input type="number" step="0.01" name="amount" inputmode="numeric" pattern="[0-9]*" value="{{ old('amount') ? number_format(old('amount'), 2) : '' }}" />
    <button type="submit">Submit</button>
</form>

</body>
</html>