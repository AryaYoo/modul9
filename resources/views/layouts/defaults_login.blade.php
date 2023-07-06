<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN || DATA MASTERRRRRRRRRRRRRRR</title>
    @vite('resources/sass/app.scss')
    {{-- <style>
        .container.bg-primary {
        min-height: 100vh;
        min-width: 100vh !important;
    }
    </style> --}}
    <style>
        .h-full {
            height: 100vh;
        }

        .w-full {
            width: 100%;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;
        }

        .items-center {
            align-items: center;
        }
    </style>
</head>
<body class="bg-primary" >
    <div class="h-full w-full d-flex justify-content-center items-center" >
        @yield('content')
    </div>
    @vite('resources/js/app.js')
</body>
</html>
