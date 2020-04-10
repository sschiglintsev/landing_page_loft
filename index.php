<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:800i&display=swap" rel="stylesheet">
    <meta name="keywords" content="loft, Уфа. перегородки, стиль Лофт, стекла, мебель, стелаж, металл, зеркало, стиль, мода, стильно, модно, калькулятор перегородок">
    <meta name="description" content="Сайт Chigross - проектирование, продажа и обслуживание перегородок в стиле лофт">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c484058383.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Перегородки в стиле ЛОФТ</title>

</head>
<body>
<header>
    <div class="page-header">
        <div>
         <nav class="navbar navbar-expand-lg">
                <span class="navbar-brand " href="#">
                    <img alt="Логотип фирмы по изготовлению перегородок и мебели в стиле лофт" class="logo" src="img/logo_white.png" >
                </span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#vid-pereg">Виды  перегородок</a></li>
                        <li class="nav-item"><a class="nav-link" href="#vid-steklo">Вид  остекления</a></li>
                        <li class="nav-item"><a class="nav-link" href="#primer">Примеры</a></li>
                        <li class="nav-item"><a class="nav-link" href="#zakaz">Сделать  заказ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Контакты</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="btn-chs" id="header-button">
            <a type="button" class="btn btn-outline-light btn-lg btn-block" href="#zakaz" >ЗАКАЗАТЬ</a>
            <p></p>
            <a type="button" class="btn btn-outline-light btn-lg btn-block" href="#calk">РАСЧЕТ ON-LINE</a>
        </div>

        <div class="hero">
                <h1 class="pp">Перегородки в стиле</h1>
                <h1 class="ppp">ЛОФТ</h1>
        </div>
    </div>
</header>
<div class="vid-chs" id="vid-pereg">
    <form method="post" id="form-kalk" onsubmit="kalk()">
        <div class="zagol-chs">
            <h1 class="pp">Виды перегородок</h1>
        </div>
        <div class="grid-post grid-chs">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="img/vid1.png" class="card-img-top" alt="Сплошная перегородка в стиле лофт">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="radios1" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Перегородка сплошная
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="img/vid2.png" class="card-img-top" alt="Перегородка с распашными дверьми  в стиле лофт">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="radios2" value="2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Перегородка с распашными дверьми
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="img/vid3.png" class="card-img-top" alt="Раздвижная перегородка в стиле лофт">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="radios3" value="3">
                                <label class="form-check-label" for="exampleRadios2">
                                    Перегородка с раздвижными дверьми
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="calk">
                <div>
                    <h2 class="zagol-chs">Калькулятор стоимости</h2>
                </div>
                <div class="container">
                    <h3 class="zagol-chs">Укажите размер в мм</h3>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Высота, мм</span>
                        </div>
                        <input id="height" type="number" class="form-control inp-chs" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Ширина, мм</span>
                        </div>
                        <input id="width" type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>

                <div class="kalk-chs">
                    <p class="pppp">Итого:<strong class="pppp" id="calc-price">0</strong><span>руб.</span></p>
                </div>
                <div class="btn-chs" id="zakaz-button">
                    <a type="button" class="btn btn-outline-light btn-lg btn-block" href="#zakaz">ЗАКАЗАТЬ</a>
                </div>
            </div>
    </form>
</div>
<div class="vid-chs" id="vid-steklo">
        <div class="zagol-chs">
            <h1 class="pp">Виды остекления</h1>
        </div>
        <div class="grid-post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card" style="width: 20rem;">
                            <img src="img/st-zak.jpg" class="card-img-top" alt="Закаленное стекло">
                            <div class="card-body">
                                <h5 class="card-title">Закаленное стекло</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="width: 20rem;">
                            <img src="img/st-trip.jpg" class="card-img-top" alt="Триплекс">
                            <div class="card-body">
                                <h5 class="card-title">Триплекс</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="width: 20rem;">
                            <img src="img/st-tonir.jpg" class="card-img-top" alt="Тонированное стекло">
                            <div class="card-body">
                                <h5 class="card-title">Тонированное стекло</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="width: 20rem;">
                            <img src="img/st-mat.jpg" class="card-img-top" alt="Матовое стекло">
                            <div class="card-body">
                                <h5 class="card-title">Матовое стекло</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card" style="width: 20rem;">
                            <img src="img/st-zerk.jpg" class="card-img-top" alt="Зеркало">
                            <div class="card-body">
                                <h5 class="card-title">Зеркало</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="primer-chs" id="primer">
    <div class="zagol-chs">
        <h1 class="pp">Примеры</h1>
    </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/pr-1.jpg" alt="Сплошная перегородка в стиле лофт">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/pr-2.jpg" alt="Зонирование помещения с помощью перегородок в стиле лофт">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/pr-3.jpg" alt="Перегородка в стиле лофт">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
</div>

<div class="zakaz-chs" id="zakaz">
    <div class="zagol-chs">
        <h1 class="pp">Сделать заказ</h1>
    </div>
    <div class="container">
        <form id="form-email" method="POST" action="javascript:void(null);" onsubmit="sendemail()">
            <div class="form-group">
                <label for="email">e-mail</label>
                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Введите e-mail">
            </div>
            <div class="form-group">
                <label for="tel">Телефон</label>
                <input type="tel" name="tel" class="form-control" id="tel" placeholder="Введите телефон">
            </div>
            <input type="submit" class="btn btn-success" value="Заказать">
        </form>
    </div>
</div>
<footer id="contact">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="footer-left">
                <img alt="Логотип фирмы по изготовлению перегородок и мебели в стиле лофт" class="logo" src="img/logo_black_.png" >
            </div>
            <div class="footer-right">
                <span>ПРИСОЕДИНЯЙСЯ</span>
                <a  href="https://www.instagram.com/peregorodki.loft/" class="btn btn-social-icon btn-xs btn-instagram">
                    <span class="fab fa-instagram-square"></span>
                </a>
                <a href="https://vk.com/public187207496" class="btn btn-social-icon btn-xs btn-vk">
                    <span class="fab fa-vk"></span>
                </a>
                <p></p>
                <p>8 917 771 70 37</p>
                <p>s.chiglintsev@mail.ru</p>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/plavniy_perehod.js"></script>
</body>
</html>