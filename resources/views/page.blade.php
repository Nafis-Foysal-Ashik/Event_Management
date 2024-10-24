<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="flex items-center justify-center h-screen bg-white">
        <div class="flex space-x-4">
            <form action="/category" method="GET">
                <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 transition duration-200 hover:bg-blue-700 hover:scale-105">
                    Show Videos
                </button>
            </form>
            
            <form action="/upload_video" method="GET">
                <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 transition duration-200 hover:bg-blue-700 hover:scale-105">
                    Upload Videos
                </button>
            </form>
        </div>
    </body>
</html>
