<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful View</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    {{-- @php 
    $collArray = $collection->toArray();
    $mergedString = implode('', $collArray);
    @endphp --}}
    
 
    <div class="container">
        <h1>{{__('welocme To our website')}}</h1>
        <p>{{__('this is created using HTML,CSS')}}</p>
        {{-- <p>{{ $mergedString }}</p> --}}
        <form method="GET" action="{{ route('translate') }}">
            @csrf
            <button type="submit">Translate</button>
        </form>
    </div>
    
</body>
</html>