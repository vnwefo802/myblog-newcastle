<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brandon Footer Editor</title>
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/editor.js') }}" defer></script>
</head>
<body>

    <div class="container mx-auto">

        <h1 class="text-4xl text-center my-8">Footer editor</h1>
        <textarea class="w-full shadow-md border input"></textarea>
    </div>

    <div class="w-full">
        <div class="container mx-auto">
            <div class="text-2xl my-8 text-center">Preview</div>
        </div>

        <div class="canvas">

        </div>
    </div>
    
</body>
</html>