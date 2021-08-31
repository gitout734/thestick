<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>thestick</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.4.x/dist/typography.min.css" />

    </head>
    <body>
        <div class="border-t-8 border-b-8 border-yellow-700 p-8">
            <div class="max-w-4xl mx-auto prose xl:prose-x;">
                <h1>Welcome to thestick</h1>
                <h2>Time to lower the boom. Bring It.</h2>
                <p class="mb-20">Read on and carry a Big Stick.</p>
             

                @foreach ($posts as $post )
                    <h2>{{ $post->title }}</h2>
                    <h4 class="border-l-2 border-b-2 border-yellow-700 rounded-b-md p-4">{{ $post->content}}</h4>
                @endforeach
            </div>
        </div>
    </body>
</html>
