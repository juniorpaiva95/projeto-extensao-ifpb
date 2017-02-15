<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Site</title>
    </head>
    <body>
        @yield('content')
		
		<div id="app">
			<example></example>
		</div>
        <script>
        	window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>
        <script src="/js/app.js"></script>
    </body>
</html>
