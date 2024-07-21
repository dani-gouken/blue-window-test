<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue Window Technical Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray-50">
    <div id="app">
    </div>
    <script>
        window.country = {!! json_encode(isset($country) ? $country : null) !!};
        window.countries = {!! $countries !!};
    </script>
</body>

</html>
