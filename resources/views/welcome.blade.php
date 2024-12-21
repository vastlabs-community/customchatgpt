<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChatGPT - Kipanga Version</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50 pt-8">
    <h1 class="text-center font-bold text-xl">ChatGPT - Kipanga Version</h1>
    <form method="post" action="/" class="flex justify-center items-center mt-3">
        @csrf
        <input class="border px-3 rounded-lg border-gray-500 py-1 " type="text" name="prompt">
        <button class="ml-3 text-white bg-blue-500 px-4 py-1 rounded-lg">Send</button>
    </form>
    <div class="grid place-content-center mx-auto py-8 px-6">
        <audio src="/audio.mp3" controls autoplay></audio>
        {!! nl2br($message) !!}
    </div>
</body>

</html>
