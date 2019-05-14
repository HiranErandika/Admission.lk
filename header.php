<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <!--fooer internal css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    ​<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost/Admission.lk/authentication/login.php">Admission.lk</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/Admission.lk/authentication/home.php">Home</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>Welcome to Admission.lk <?php echo "Hiran"; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Signup</a></li>
                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    <!--Header-->
    <header>
    </header>
    <div class="footer" style="height: 8%">
        <br>
        <p> © 2019 | Admission.lk</p>
    </div>

    <script>
        (function() {
            var div = document.createElement("div");
            document.getElementsByTagName('body')[0].appendChild(div);
            div.outerHTML = "<div id='botDiv' style='height: 38px; position: fixed; bottom: 0;right:0; z-index: 1000; background-color: #fff'><div id='botTitleBar' style='height: 38px; width: 400px; position:fixed; cursor: pointer;'></div><iframe width='400px' height='600px' src='http://webchat.botframework.com/embed/Admission-lk?s=3ONDLnaXQSs.WQOF62-cw6bglcMeYv9H1GpE8n065HeSONqrYYiIMz4'></iframe></div>";

            document.querySelector('body').addEventListener('click', function(e) {
                e.target.matches = e.target.matches || e.target.msMatchesSelector;
                if (e.target.matches('#botTitleBar')) {
                    var botDiv = document.querySelector('#botDiv');
                    botDiv.style.height = botDiv.style.height == '600px' ? '38px' : '600px';
                };
            });
        }());
        </script>