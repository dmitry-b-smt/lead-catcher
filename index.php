<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <title>lead_catcher_rebuild</title>
</head>

<body>
    <div class="wrapper">

        <div class="lead-catcher hidden-elem">
            <div class="lead-catcher__wrapper interactive-window-wrapper">
                <div class="lead-catcher__body">
                    <div class="lead-catcher__form-container">
                        <div class="lead-catcher__form-close">
                            <div class="lead-catcher__close-btn close-button" title="Закрыть форму">X</div>
                        </div>
                        <div class="lead-catcher__form-title form-elem">Не смогли найти нужную Вам информацию?</div>
                        <div class="lead-catcher__form-subtitle form-elem">Оставьте свои контактные данные, и мы свяжемся с Вами!</div>

                        <div class="lead-catcher__form form-elem">
                            <input class="lead-catcher__input input-field" type="text" id="name" name="name" placeholder="Введите Ваше имя" required>
                            <input class="lead-catcher__input input-field" type="tel" id="phone" name="phone" placeholder="Введите Ваш телефон" required onkeypress='validate(event)'>
                            <div class="lead-catcher__check-field">
                                <div class="lead-catcher__check-text">Свяжитесь со мной как можно быстрее</div>
                                <input class="lead-catcher__check" type="checkbox" id="priority" name="priority" checked>
                            </div>
                            <input type="hidden" id="form_id" name="form_id" value="1">
                            <input type="hidden" id="task_id" name="task_id" value="2">
                            <button class="lead-catcher__input lead-catcher__send-button">Отправить</button>
                        </div>

                        <div class="lead-catcher__form-text form-elem">Нажимая на кнопку, Вы подтверждаете ознакомление с <span class="lead-catcher__form-terms">правилами</span> обработки данных</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="terms interactive-window hidden-elem">
            <div class="terms__wrapper interactive-window-wrapper">
                <div class="terms__body">
                    <div class="terms__text container">
                        <p>Our Terms</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatibus voluptate reiciendis aliquam iure et beatae vel reprehenderit sed, quas necessitatibus dolor facere, atque molestiae odit ab numquam quae nihil.</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatibus voluptate reiciendis aliquam iure et beatae vel reprehenderit sed, quas necessitatibus dolor facere, atque molestiae odit ab numquam quae nihil.</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatibus voluptate reiciendis aliquam iure et beatae vel reprehenderit sed, quas necessitatibus dolor facere, atque molestiae odit ab numquam quae nihil.</p>
                    </div>
                    <div class="terms__control container">
                        <div class="terms__button close-button">OK</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="success-form-message interactive-window hidden-elem">
            <div class="success-form-message__wrapper interactive-window-wrapper">
                <div class="success-form-message__body">
                    <div class="success-form-message__text container">
                        <p>Ваша контактная информация отправлена!</p>
                    </div>
                    <div class="success-form-message__control container">
                        <div class="success-form-message__button close-button">OK</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="error-form-message interactive-window hidden-elem">
            <div class="error-form-message__wrapper interactive-window-wrapper">
                <div class="error-form-message__body">
                    <div class="error-form-message__text container">
                        <p>Что-то пошло не так. Пожалуйста, повторите попытку позже.</p>
                    </div>
                    <div class="error-form-message__control container">
                        <div class="error-form-message__button close-button">OK</div>
                    </div>
                </div>
            </div>
        </div>

        <header class="header">
            <?php
            include('html-blocks/header.html');
            ?>
        </header>
        <main class="main">
            <div class="main__wrapper container">
                <div class="main__content-row">
                    <div class="main__content-column">
                        <div class="main__content-column">
                            <div class="main__content-picture">a</div>
                        </div>
                    </div>
                    <div class="main__content-column">
                        <div class="main__content-column">
                            <div class="main__content-picture">1</div>
                        </div>
                    </div>
                    <div class="main__content-column">
                        <div class="main__content-column">
                            <div class="main__content-picture">
                                <div class="main__content-round"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main__content-row">
                    <a href="board.php" class="main__content-text" target="_blank">board.php</a>
                </div>
            </div>
        </main>
        <footer class="footer">
            <?php
            include('html-blocks/footer.html');
            ?>
        </footer>
    </div>

    <script src="js/get-send-form.js"></script>
    <script src="js/interactive-window.js"></script>
    <script src="js/script.js"></script>
</body>

</html>