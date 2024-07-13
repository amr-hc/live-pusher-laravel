<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Echo Private Channel</title>
    <!-- Add Pusher library -->
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <!-- Add Laravel Echo library -->
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo/dist/echo.iife.js"></script>
</head>
<body>
    <h1>Listening to Private Channel</h1>

    <script>
        // Initialize Pusher
        window.Pusher = Pusher;

        // Initialize Echo
        window.Echo = new Echo({
            broadcaster: 'pusher',
            key: '30a1d895ee39af837eac', // Your Pusher key
            cluster: 'eu', // Your Pusher cluster
            encrypted: true,
            forceTLS: true,
            authEndpoint: '/broadcasting/auth', // Default auth endpoint
            auth: {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            }
        });

        // Subscribe to the private channel and listen for events
        Echo.private('my-private')
            .listen('MyPrivate', (e) => {
                console.log(e);
            });
    </script>
</body>
</html>
