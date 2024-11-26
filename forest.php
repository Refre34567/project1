<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Умный Холод — Ваш помощник в холодильнике</title>
    
    <!-- Подключение внешнего CSS файла -->
    <link rel="stylesheet" href="lest.css">

    <style>
        /* Общие стили */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #1e3c72, #2a5298) !important; /* Используем !important для фона */
            color: #fff;
            overflow-x: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        header {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.2));
            padding: 50px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        header .cta {
            display: inline-block;
            background: #28a745;
            padding: 15px 30px;
            color: #fff;
            border-radius: 5px;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        header .cta:hover {
            background: #218838;
        }

        /* Основной контент */
        .container {
            max-width: 1100px;
            margin: 20px auto;
            padding: 20px;
        }

        .features, .about {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .features h2, .about h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .features p, .about p {
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .features ul {
            list-style-type: none;
            padding: 0;
        }

        .features ul li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }

        .features ul li::before {
            content: "✔";
            color: #28a745;
            font-weight: bold;
            margin-right: 10px;
            position: absolute;
            left: 0;
        }

        /* Форма */
        .form-section {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        form .form-group {
            display: flex;
            flex-direction: column;
        }

        form .form-group label {
            margin-bottom: 5px;
            font-size: 1rem;
        }

        form .form-group input, 
        form .form-group textarea {
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        form button {
            padding: 15px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        form button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        /* Футер */
        footer {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            margin-top: 20px;
        }

        footer p {
            font-size: 0.9rem;
        }

        /* Стили секции с моделью устройства */
        .form-section h2 {
            text-align: center;
            font-size: 2.5rem;
            font-family: 'Poppins', sans-serif;
            color: #00796B;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .form-section img {
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
            display: block;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        .form-section p {
            text-align: center;
            font-size: 1.5rem;
            font-family: 'Poppins', sans-serif;
            color: #00796B;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 1rem;
            }

            .features h2, 
            .form-section h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
<header>
    <img src="img/freezing.png" alt="правая картинка" class="header-img left">
    <h1>Умный Холод</h1>
    <p>Сканируйте, храните и готовьте с умом!</p>
    <a href="#features" class="cta">Узнать больше</a>
    <img src="img/freezing.png" alt="правая картинка" class="header-img right">
</header>

<section id="features" class="features">
    <h2>Почему выбрать Умный Холод?</h2>
    <ul>
        <li><img src="img/diet.png" alt="Сканирование">Сканирует продукты и следит за сроками годности.</li>
        <li><img src="img/diet (1).png" alt="Сканирование">Создает рецепты на основе содержимого вашего холодильника.</li>
        <li><img src="img/webinar.png" alt="Сканирование">Поддержка мобильного приложения для удобного управления.</li>
        <li><img src="img/coin.png" alt="Сканирование">Экономит ваше время и деньги, предотвращая порчу продуктов.</li>
    </ul>
</section>

<section class="about">
    <h2>Как это работает?</h2>
    <p>Устройство крепится на ваш холодильник и автоматически сканирует продукты. Через приложение вы можете следить за их сроками годности и получать уведомления. На основе продуктов приложение предложит вкусные и полезные рецепты.</p>
    <div class="image-container">
        <img src="img/grand.png" alt="Бабушка с продуктами" class="image-left">
        <img src="img/recip.png" alt="рецепты" class="image-right">
    </div>
</section>

<section class="form-section" style="background-color: #E3F2FD; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h2>Наша команда</h2>
    <img src="img/sss.png" alt="Челы" class="image-right" style="width: 100%; max-width: 500px; display: block; margin: 20px auto; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">
    <p style="text-align: center; font-size: 1.2rem; margin-top: 20px; color: #0D47A1;">Наши контакты:</p>

    <div class="social-links" style="text-align: center; margin-top: 20px;">
        <a href="https://vk.com/4krang" target="_blank" style="margin-right: 15px; display: inline-block;">
            <img src="img/vk.png" alt="ВКонтакте" style="width: 40px; height: 40px;">
        </a>
        <a href="https://instagram.com/smar_tholod?igsh=dmx6MDZiZ2l1cHl5&utm_source=qr" target="_blank" style="margin-left: 15px; display: inline-block;">
            <img src="img/inst.png" alt="Instagram" style="width: 40px; height: 40px;">
        </a>
    </div>
</section>

<section class="form-section">
    <h2>Наша модель устройства</h2>
    <div class="collage">
        <img src="img/рисунок1.png" alt="Фото 1" class="collage-img">
        <img src="img/рисунок2.png" alt="Фото 2" class="collage-img">
        <img src="img/рисунок3.png" alt="Фото 3" class="collage-img">
        <img src="img/рисунок4.png" alt="Фото 4" class="collage-img">
    </div>
    <p>Умный и компактный дизайн, который идеально подходит к любому холодильнику.</p>
</section>

<!-- Модальное окно -->
<div id="modal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modal-img">
    <div class="modal-controls">
        <button id="prev">&lt; Назад</button>
        <button id="next">Вперед &gt;</button>
    </div>
</div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Умный Холод. Все права защищены.</p>
    </footer>
</body>
</html>

