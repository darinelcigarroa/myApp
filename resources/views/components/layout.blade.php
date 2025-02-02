<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default title'}}</title>
</head>
<body>
    @include('partials.nav')
    {{ $slot }}
    @isset($sidebar)
        <div id="sidebar">
            <h3>Sidebar</h3>
            <p>{{ $sidebar }}</p>
        </div>
    @endisset
</body>
</html>