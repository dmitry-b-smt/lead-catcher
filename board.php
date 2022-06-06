<?php
include_once('engine.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <title>work-area</title>
</head>

<body>
    <div class="wrapper">

        <div class="success-form-message interactive-window hidden-elem">
            <div class="success-form-message__wrapper interactive-window-wrapper">
                <div class="success-form-message__body">
                    <div class="success-form-message__text container">
                        <p>Текущая задача снята</p>
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
                <div class="main__work-area">
                    <div class="main__sidebar main__left-sidebar">
                        <?php
                        foreach ($displayData as $key => $item) {
                            if ($item->callstatus == true) {
                        ?>
                                <div class="main__sidebar-card main__sidebar-card-unactive interactive-window">
                                    <div class="main__sidebar-card-wrapper">
                                        <div class="main__sidebar-card-body">
                                            <div class="main__sidebar-card-text">
                                                <p>Задача закрыта:</p>
                                                <p>ID клиента: <input id="client_id" value="<?= $key ?>" disabled></p>
                                                <p>Имя: <?= $item->name ?></p>
                                                <p>Телефон: <?= $item->phone ?></p>
                                                <p>Комментарий: <?= $item->comment ?></p>
                                                <!-- <p><?= $item->callstatus ?></p>
                                                <textarea class="main__sidebar-card-input input-field" name="comment" id="comment"></textarea> -->
                                            </div>
                                            <!-- <div class="main__sidebar-card-control">
                                                <p>Дозвонились, всё в порядке <input id="callstatus" type="checkbox" name="callstatus"></p>
                                                <div class="main__sidebar-card-button close-button">OK</div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="main__center"></div>
                    <div class="main__sidebar main__right-sidebar">
                        <?php
                        foreach ($displayData as $key => $item) {
                            if ($item->callstatus == false) {
                        ?>
                                <div class="main__sidebar-card main__sidebar-card-active interactive-window">
                                    <div class="main__sidebar-card-wrapper interactive-window-wrapper">
                                        <div class="main__sidebar-card-body">
                                            <div class="main__sidebar-card-text">
                                                <p>Связаться с клиентом:</p>
                                                <p>ID клиента: <input id="client_id" value="<?= $key ?>" disabled></p>
                                                <p>Имя: <?= $item->name ?></p>
                                                <p>Телефон: <?= $item->phone ?></p>
                                                <p>Комментарий: <?= $item->comment ?></p>
                                                <p><?= $item->callstatus ?></p>
                                                <textarea class="main__sidebar-card-input input-field" name="comment" id="comment"></textarea>
                                            </div>
                                            <div class="main__sidebar-card-control">
                                                <p>Дозвонились, всё в порядке <input id="callstatus" type="checkbox" name="callstatus"></p>
                                                <div class="main__sidebar-card-button close-button">OK</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
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
    <script src="js/interactive-card.js"></script>
    <script src="js/script-workboard.js"></script>
</body>

</html>