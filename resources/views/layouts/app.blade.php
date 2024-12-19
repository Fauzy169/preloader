
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Preloader</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">
</head>
<body>
    
    <div id="preloader">
        <img src="{{ asset('images/LogoBeLearnings-01.png') }}" alt="Loading">
        <div id="loading-text">Loading... <span id="percentage">0%</span></div>
    </div>

    <div id="content" style="display: none;">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let percentage = 0;
            let interval = setInterval(() => {
                percentage += 1;
                $('#percentage').text(percentage + '%');

                if (percentage >= 100) {
                    clearInterval(interval);
                    $('#preloader').fadeOut('slow', function() {
                        $('#content').fadeIn('slow');
                    });
                }
            }, 10);
        });
    </script>
</body>
</html>
