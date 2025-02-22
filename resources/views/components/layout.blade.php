<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My portfolio</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/mylogo.png') }}">
    <link rel="stylesheet" href=" {{ asset('bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src=" {{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <style>
        .img_pic {
            transition: width 300ms, height 300ms, transition 300ms;
        }

        .img_pic:hover {
            width: 215px;
            height: 265px;
            z-index: 1;
            border: 5px dashed black;
            cursor: pointer;
        }
        
        .animated-text::before {
            content: '';
            animation: word 20s infinite;
        }

        .animated-text::after {
            content: '';
            position: absolute;
            height: 100%;
            width: calc(100% + 8px);
            background-color: white;
            border-left: 1px solid black;
            right: -8px;
            
            animation: cursor .8s infinite, typing 20s steps(14) infinite;
        }

        @keyframes cursor {
            to{
                border-left: 5px solid white;
            }
        }


        @keyframes word {
            0%, 20%{
                content: 'Web Developer';
            }
            21%, 40%{
                content: 'Android Developer';
            }
            41%, 60%{
                content: 'Web Developer';
            }
            61%, 80%{
                content: 'Android Developer';
            }
            81%, 100%{
                content: 'Web Developer';
            }
        }

        @keyframes typing {
            10%, 15%, 30%, 35%, 50%, 55%, 70%, 75%, 90%, 95%{
                width: 0;
            }
            5%, 20%, 25%, 40%, 45%, 60%, 65%, 80%, 85%{
                width: calc(100% + 8px);
            }
        }
    </style>

</head>

<body>
    <x-nav/>
   
    {{ $slot }}

    <script>
        for (let i = 0; i < nav_links.length; i++) {
            nav_links[i].classList.add("Active");
        }
    </script>
</body>

</html>
