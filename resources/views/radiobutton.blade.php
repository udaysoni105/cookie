<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('rb') }}" method="post">
    @csrf

    <div>
        <input type="radio" id="amount" name="radioType" value="amount" checked>
        <label for="amount">Amount</label>
    </div>
    <div>
        <input type="radio" id="percentage" name="radioType" value="percentage">
        <label for="percentage">Percentage</label>
    </div>

    <div>
        <label for="qty1">Qty1:</label>
        <input type="number" name="qty1" id="qty1" value="{{ old('qty1') }}" required>
    </div>

    <div>
        <label for="qty2">Qty2:</label>
        <input type="number" name="qty2" id="qty2" value="{{ old('qty2') }}" required>
    </div>

    <button type="submit">Submit</button>
</form>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</body>
</html>