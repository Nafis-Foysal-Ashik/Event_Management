<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="drag-area bg-white rounded-lg shadow-lg p-6">
    <form method="post" action="{{ route('insert.file') }}" enctype="multipart/form-data" class="flex flex-col">
        {{ csrf_field() }}
        <label for="video" class="mb-2 text-gray-700">Upload Video:</label>
        <input type="file" name="video" id="video" class="mb-4 border border-gray-300 rounded-md p-2"/>
        <p class="text-red-500 mb-4">
            @if($errors->has('video'))
                {{ $errors->first('video') }}
            @endif
        </p>
        <input type="submit" name="click" class="bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600 cursor-pointer"/>
    </form>

    @if(session('success'))
        <p class="mt-4 text-green-500">{{ session('success') }}</p>
    @endif
</div>
</body>
</html>
