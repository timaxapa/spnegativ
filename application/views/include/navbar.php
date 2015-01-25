<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Кнопка "Дом" и переключатель меню -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Показать меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url() ?>">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </a>
        </div>

        <!-- Компоненты -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Выпадающее меню для дневника -->
                <li class="dropdown">
                    <a href="<?= base_url() ?>diary" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        &nbsp;Дневник<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?= base_url() ?>diary/new">
                                Новые
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>diary/top">
                                Популярные
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Меню для музыки -->
                <li>
                    <a href="<?= base_url() ?>music">
                        <span class="glyphicon glyphicon-music" aria-hidden="true"></span>
                        &nbsp;Музыка
                    </a>
                </li>
            </ul>

            <!-- Кнопки авторизации -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= base_url() ?>music">
                        Вход
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>