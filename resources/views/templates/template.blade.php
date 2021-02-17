<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="plural.ico" type="image/x-icon">

    <!-- Script(alpinejs, jquery) -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

    <!-- Input Mask -->
    <script>
        $(document).ready(function () { 
            $("#cpf").mask('000.000.000-00');
            $('#cep').mask('00000-000');
            $('#phone').mask('(00) 00000-0000');
        });
    </script>

    <title>Plural</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-gray-200 px-8 pt-2">
        <div class="-mb-px flex justify-center">
        <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8 transform hover:scale-110 motion-reduce:transform-none" href="#">
                Home
            </a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8 transform hover:scale-110 motion-reduce:transform-none" href="{{url('/user')}}">
                Sign Up
            </a>
            <a class="no-underline text-grey-dark border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8 transform hover:scale-110 motion-reduce:transform-none" href="{{url('/index')}}">
                Edit
            </a>
        </div>
    </nav>
    
    @yield('content')

</body>
</html>