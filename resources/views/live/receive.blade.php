<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>receive</title>
    @vite('resources/js/app.js')
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <p>Reveive Page : </p>
</body>


<script type="module">
    Echo.private('my-private').listen('MyPrivate', (e)=>{
        console.log(e);
    })

</script>
</html>