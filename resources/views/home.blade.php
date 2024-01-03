<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="public/favicon.ico">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body id='app'>

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        // Adicione este código ao final do arquivo
        window.addEventListener('load', () => {
            // Obtenha o elemento Ray
            const ray = document.querySelector('[data-ray-id]');

            // Posicione o elemento no topo da tela
            ray.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth',
            });
        });
    </script>
</body>
</html>