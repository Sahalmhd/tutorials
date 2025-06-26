<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <h1>welcome to pusher</h1>
    <h2>new user:</h2>
    <script>
        Pusher.logToConsole = true;
        var pusher = new Pusher('28a1445f747664819e6a', {
            cluster: 'ap2'
        });
         var channel = pusher.subscribe('orders');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
        $('h2').append('<br>'  + JSON.stringify(data));  
    });
    </script>
</body>

</html>
