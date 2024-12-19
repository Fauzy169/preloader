
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
    <!-- Preloader -->
    <div id="preloader">
        <img src="{{ asset('images/logos-01.png') }}" alt="Loading">
        <div id="loading-text">Loading... <span id="percentage">0%</span></div>
    </div>

    <div id="content" style="display: none;">
        @yield('content')
    </div>

    <script>
        let percentage = 0;
        let interval = setInterval(() => {
            percentage += 1;
            document.getElementById('percentage').innerText = percentage + '%';

            if (percentage >= 100) {
                clearInterval(interval);
                document.getElementById('preloader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
            }
        }, 5)
    </script>
</body>
</html>
