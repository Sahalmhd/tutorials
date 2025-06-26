<!DOCTYPE html>
<html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
</head>
<body>
    <h1>Listening for Test Event...</h1>

    <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('28a1445f747664819e6a', {
            cluster: 'ap2',
            forceTLS: true
        });

        var channel = pusher.subscribe('test-channel');
        channel.bind('test-event', function(data) {
            alert('Received broadcast: ' + data.message);
        });
    </script>
</body>
</html>
