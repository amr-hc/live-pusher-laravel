<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>receive</title>
    @vite('resources/js/app.js')
</head>
<body>
    <p>Reveive Page : </p>
</body>


<script type="module">
    Echo.channel('my-channel').listen('MyEvent', (e)=>{
        console.log(e);
    })

</script>
</html>