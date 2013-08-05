<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel4 Students Application</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

        body {
            margin:100px;
            font-family:'Lato', sans-serif;
            text-align:left;
            color: #999;
        }

        .welcome {
           width: 300px;
           height: 300px;
           position: absolute;
           left: 50%;
           top: 50%; 
           margin-left: -150px;
           margin-top: -150px;
        }

        a, a:visited {
            color:#FF5949;
            text-decoration:none;
        }

        a:hover {
            text-decoration:underline;
        }

        ul li {
            display:inline;
            margin:0 1.2em;
        }

        p {
            margin:2em 0;
            color:#555;
        }
    </style>
</head>
<body>
    <a href='/'>Home</a>
    <div class="welcome">
        @yield('home')
    </div>
    @yield('studentlist')
</body>
</html>
