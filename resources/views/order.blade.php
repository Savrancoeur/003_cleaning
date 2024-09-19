<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite('resources/css')
</head>
<body>
    <form action="" method="post" >
        @csrf
        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
    </form>
</body>
</html>
