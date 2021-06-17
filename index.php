<?php require_once 'form.php'; ?>
<!doctype html>
<html lang="uk" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Summary</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center mt-2">Резюме</h1>
        </div>
    </div>
    <div class="row">
<!--Modal-->
        <div class="modal fade" id="photo" tabindex="-1" aria-labelledby="photo" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-body">
                    <img src="/img/123.jpg" alt="photo">
                </div>
           </div>
        </div>

<!--Sidebar-->
        <div class="col-lg-4 col-md-12 sidebar">
            <div class="row">
                <div class="photo">
                    <a data-bs-toggle="modal" data-bs-target="#photo"><img src="/img/123.jpg" alt="photo"></a>
                </div>
            </div>
            <div class="row">
                <div class="title">
                    <h4>Христенко Євгеній</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="title">
                    <h5>Контакти</h5>
                </div>
                <div class="contact">
                    <ul>
                        <li><i class="fas fa-phone-alt"></i>+38(063)-831-74-54</li>
                        <li><i class="fas fa-envelope-square"></i>swallow1991@gmail.com</li>
                        <li><i class="fas fa-birthday-cake"></i>05.08.1991р.</li>
                        <li><i class="fas fa-map-marker-alt"></i>Бориспіль, Україна</li>
                        <li><i class="fab fa-instagram"></i><a href="https://www.instagram.com/eugene_x">Instagram</a></li>
                        <li><i class="fab fa-facebook"></i><a href="https://www.facebook.com/e.khrystenko">Facebook</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="title">
                    <h5>Git</h5>
                </div>
                <div class="works">
                    <ul>
                        <li><a href="https://github.com/eugene-kh?tab=repositories">https://github.com/eugene-kh</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="title">
                    <h5>Мови</h5>
                </div>
                <div class="language">
                    <ul>
                        <li>Українська</li>
                        <li>Російська</li>
                        <li>Англійська</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="title">
                    <h5>Написати мені</h5>
                </div>
<!--Form-->
                <form action="index.php#form" method="post" id="form">

                    <?php if (isset($show_errors)){ ?>
                        <div class="alert alert-danger"><?php echo $show_errors ?></div>
                    <?php }
                        if (isset($_SESSION['complete'])){ ?>
                        <div class="alert alert-success"><?php echo $_SESSION['complete']; unset($_SESSION['complete']) ?></div>
                    <?php } ?>

                    <div class="mb-3">
                        <label for="title" class="form-label">Заголовок</label>
                        <input type="text" name="title" class="form-control" placeholder="Заголовок..." value="<?php if (isset($title)) echo $title ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Повідомлення</label>
                        <textarea  name="message" rows="5" placeholder="Повідомлення..." class="form-control"><?php if (isset($message)) echo $message ?></textarea>
                    </div>
                    <button type="submit" name="send-form" class="btn btn-dark">Відправити</button>
                </form>
            </div>
        </div>

<!--Content-->
        <div class="col-lg-8 col-md-12 content">
            <div class="row">
                <div class="title">
                    <h5>Освіта</h5>
                </div>
                <div class="col-4">
                    <p>2008-2011 - Київський Радіомеханічний Коледж</p>
                </div>
                <div class="col-8">
                    <p>Обслуговування комп’ютерних систем і мереж (молодший спеціаліст)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <p>2015-2018 - Державний Університет Телекомунікацій</p>
                </div>
                <div class="col-8">
                    <p>Комп’ютерна інженерія (бакалавр)</p>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="title">
                    <h5>Досвід роботи</h5>
                </div>
                <div class="col-6">
                    <p>2011 – НВК Гімназія «Перспектива»</p>
                </div>
                <div class="col-6">
                    <p>Системний адміністратор</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>2012-2014 – «ДП з ІІ Аіро Кейтерінг Сервісіз Україна»</p>
                </div>
                <div class="col-6">
                    <p>Комірник</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>2016-2017 – ТОВ «Sky Food Services»</p>
                </div>
                <div class="col-6">
                    <p>Товарознавець</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>2018-2020 – ТОВ «Sky Food Services»</p>
                </div>
                <div class="col-6">
                    <p>Диспетчер</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>2020-дотепер – «P&G»</p>
                </div>
                <div class="col-6">
                    <p>Технік виробничої лінії</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <p><b>Досягненя:</b></p>
                </div>
                <div class="col-9">
                    <p>Був двічі визнаний кращим працівником місяця в компанії ТОВ «Sky Food Services» на посаді товарознавця та диспетчера оперативного відділу</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <p><b>Ділові якості:</b></p>
                </div>
                <div class="col-9">
                    <p>відповідальний,  дисциплінований, комунікабельний, швидко навчаюсь новому, вмію вирішувати конфліктні ситуації, стресостійкий, вмію працювати в команді</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <p><b>Додаткові навики:</b></p>
                </div>
                <div class="col-9">
                    <p>Знання основ документообігу
                        <br>Впевнений користувач ПК (1С, Пакет MS Office, Outlook).
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <p><b>Навики в розробці сайтів:</b></p>
                </div>
                <div class="col-9">
                    <p><u>Frontend:</u><br>
                        -	HTML5, CSS3 (SASS, LESS), Bootstrap5, jQuery, базовий рівень JS;<br><br>
                        <u>Backend:</u><br>
                        -	PHP(v7+),  Laravel(v7+),  MySQL;<br><br>
                        <u>Інструменти для розробки:</u><br>
                        -	IDE PHP Storm 2021, Sublime Text 3;<br><br>
                        Вмію працювати з GIT

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/827ea944e3.js" crossorigin="anonymous"></script>
</body>
</html>