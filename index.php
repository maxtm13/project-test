<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <main class="main">
        <section class="section__form">
            <div class="form">
                <div class="form__title" >Выпадающий список_1</div>
                <div class="form__selection">
                    <div class="form__selection-text" data-set='title'>Выберите параметр</div>
                    <div class="form__selection-btn">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.175 6.84167L5 3.02501L8.825 6.84167L10 5.66668L5 0.666676L0 5.66668L1.175 6.84167Z"
                                  fill="#999999"/>
                        </svg>
                    </div>
                </div>
                <div class="form__selection-content">
                    <div class="content-wrapper">
                        <ul class="content__list">
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-russia.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 1</div>

                            </li>
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-brazil.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 2</div>

                            </li>
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-china.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 3</div>

                            </li>
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-argentina.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 4</div>

                            </li>
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-belarus.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 5</div>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form__title" >Выпадающий список_1</div>
                <div class="form__selection">
                    <div class="form__selection-text" data-set='alert'>Выберите параметр</div>
                    <div class="form__selection-btn">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.175 6.84167L5 3.02501L8.825 6.84167L10 5.66668L5 0.666676L0 5.66668L1.175 6.84167Z"
                                  fill="#999999"/>
                        </svg>
                    </div>
                </div>
                <div class="form__selection-content">
                    <div class="content-wrapper">
                        <ul class="content__list">
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-russia.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 1</div>

                            </li>
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-brazil.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 2</div>

                            </li>
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-china.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 3</div>

                            </li>
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-argentina.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 4</div>

                            </li>
                            <li class="content__list-item">
                                <div class="list-item-img">
                                    <img class="image" src="img/twemoji_flag-belarus.png" alt="flag">
                                </div>
                                <div class="list-item-text">Параметр 5</div>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="content__inner">
                <h1 class="content__title">
                    <?php if (!empty($cmsContentTitle))  {
                        echo $cmsContentTitle;
                    }
                    else {?>
                    Заголовок
                    <?php }
                    ?>
                </h1>
                <div class="content__text">
                    <?php
                    if (!(empty($cmsContentParagraph))) {
                        echo $cmsContentParagraph;
                    }
                    else { ?>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.</p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

</div>
</body>
<script src="js/script.js"></script>
</html>