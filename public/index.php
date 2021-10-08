<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../src/img/Logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Discord-Community Bootstrap Challenger</title>

    <link rel="stylesheet" href="../css/main.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;400;700&display=swap');
    </style>
</head>

<body>
    <header class="main-header">
        <nav class="nav-bar  ">
            <img src="../src/img/logo.png" alt="">
            <h1 class="logo">
                <a href="index.html"></a>
            </h1>

            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link active  " href="#">Contato</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link active  " href="#">Criar conta</a>
                </li>
                <li class="nav-item mx-3">
                    <button class="btn active text-white " href="#">Log in</button>
                </li>
            </ul>
        </nav>
    </header>
    <!-- https://codepen.io/gabrielporfiro/pen/LYxqody -->
    <!-- https://github.com/JoelCatarino/sua_imobiliaria/blob/main/index.php -->
    <!-- seguir a logica do projeto  -->
    <?php
    $getApp = filter_input(INPUT_GET, 'app', FILTER_SANITIZE_STRIPPED);

    if (empty($getApp)) {
        require 'widget/home.php';
    } elseif (!empty($getApp) && file_exists('widget/' . $getApp . '.php')) {
        require 'widget/' . $getApp . '.php';
    } else {
        echo "Oooops, erro no app informado!";
    }
    ?>


    <footer>
        <div class="container-footer">
            <div class="row">
                <div class="col">
                    <h1 class="title-footer-junior text-white">Junior Team</h1>
                    <h4 class="text-white">Quality for cheap</h4>
                    <a class="a-back text-white" href="">Back to the top</a>
                    <a class="a-login text-white" href="">Login</a>
                    <a class="a-register text-white" href="">Register</a>
                </div>
                <div class="img-flash col">
                    <img class="img-flash" src="../src/img/flash.png" alt="Discord-Community Bootstrap Challenger">
                </div>
                <div class="col get-in ms-5 ps-5">
                    <h2 class="get text-white ms-5 ps-5 mb-4">Get in touch</h2>

                    <p class="cel text-white ms-5 ps-5 mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone me-3" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>+55 (71)99738-5375</p>
                    <p class="cel text-white ms-5 ps-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="buil bi bi-building me-3" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                        </svg><br> 2184 Freedom Lane, Pine Grove United States</p>
                </div>
                <p class="direitos text-white">© 2021 Junior Team. All rights reserved.</p>
            </div>
        </div>
    </footer>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/jquery/"></script>
</body>

</html>