<?php
/**
 * Created by PhpStorm.
 * User: alimzhan
 * Date: 20.07.2017
 * Time: 8:17
 */
$this->title = 'Баю-бай'
?>
<div class="block block--header">
    <div class="contacts">
        <div class="contacts__inner"
             onclick="window.open('tel:<?= preg_replace('/[^+0-9]/', '', Yii::$app->params['phone']) ?>')">
            <span><?= Yii::$app->params['phone'] ?></span>
        </div>
    </div>
</div>
<div class="block block--about">
    <div class="clouded">
        Подарите <br>
        Вашему ребенку <br>
        крепкий сон!
    </div>
    <div class="block__text">
        Устройство для автоматического качания <br>
        детской кроватки с маятниковым механизмом <br>
        «Баю-Бай»
    </div>
    <h2 class="block__title">
        Что такое "Баю-Бай"
    </h2>
    <div class="block__text">скрольте вниз чтобы узнать больше</div>
    <div class="about__slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ss__title">Маятниковый механизм</div>
                    <div class="ss__text">Сон - одна из главных составляющих развития ребенка. С первых дней жизни очень
                        важно обеспечить малышу комфортные условия засыпания, и большую роль здесь играет тип и качество
                        детской кроватки. Опыт показывает, что для малыша и родителей очень удобны кроватки-маятники –
                        их плавное качание имитирует нежные мамины руки.
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ss__title">Сладкий сон</div>
                    <div class="ss__text">Кроватка с установленным на нее устройством автоматического качания «Баю-Бай»
                        обеспечит спокойный сон вашему ребенку в течение всей ночи и во время дневного сна, а родителям
                        – свободное время, когда можно заняться делами или передохнуть. Несколько режимов качания и
                        большой набор функций позволят укачать ребенка и сохранить спокойный сон.
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ss__title">Комфортное использование</div>
                    <div class="ss__text">Абсолютная бесшумность устройства обеспечит максимальный комфорт малышу, а
                        дистанционное управление – его родителям. Устройство для качания кроватки превратит вашу обычную
                        кроватку с маятниковым механизмом в самую лучшую автоматическую колыбель. Устройство для качания
                        детской кроватки «Баю-Бай» - нежная забота о ребенке и передышка для родителей!
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next">свайп влево</div>
        </div>
    </div>
</div>
<div class="block block--adv">
    Новинка "Совушка"!<br>
    Самая продвинутая<br>
    модель с пультом<br>
    и Wi-Fi модулем
</div>
<div class="block block--knowmore">
    <h2 class="block__title">
        Хотите узнать больше?
    </h2>
    <div class="km__video">
        <iframe src="//www.youtube.com/embed/5GTmYtVR0Fk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0"
                allowfullscreen="" wmode="transparent"></iframe>
    </div>
</div>
<div class="block block--reasons">
    <h2 class="block__title">
        5 причин выбрать<br>
        Наше устройство
    </h2>
    <div class="reasons__slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide--r1">
                    <div class="ss__title">Датчик плача</div>
                    <div class="ss__text">Запуск качания от плача ребенка, чувствительность микрофона регулируется!
                    </div>
                    <div class="ss__subtext">*Модель "Тихоня wi-fi", "Соня" и "Совушка"</div>
                </div>
                <div class="swiper-slide swiper-slide--r2">
                    <div class="ss__title">Таймер качания</div>
                    <div class="ss__text">Таймер качания от 10 мин. до 24 ч. – малыш укачивается ровно столько, сколько
                        решите Вы!
                    </div>
                    <div class="ss__subtext">*Модель "Тихоня wi-fi", "Соня" и "Совушка"</div>
                </div>
                <div class="swiper-slide swiper-slide--r3">
                    <div class="ss__title">Датчик движения</div>
                    <div class="ss__text">Запуск качания от шевеления ребенка, устройство понимет, когда ворочается
                        малыш
                    </div>
                    <div class="ss__subtext">*Модель "Тихоня wi-fi" и "Совушка"</div>
                </div>
                <div class="swiper-slide swiper-slide--r4">
                    <div class="ss__title">6 режимов качания</div>
                    <div class="ss__text">Выбирайте самую комфортную «скорость» для вашего малыша!</div>
                    <div class="ss__subtext">*Модель "Тихоня wi-fi", "Соня", "Паинька" и "Совушка"</div>
                </div>
                <div class="swiper-slide swiper-slide--r5">
                    <div class="ss__title">100% бесшумно</div>
                    <div class="ss__text">Никакого жужжания или писка!
                        Никаких моторчиков и ниток, снижающих надежность!
                    </div>
                    <div class="ss__subtext">*Все модели</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="block block--order" id="order">
    <h2 class="block__title">
        Новинка! <br> Совушка
    </h2>
    <div class="form">
        <h2>Сделать заказ:</h2>
        <form id="order-form" action="<?= \yii\helpers\Url::to(['order']) ?>" method="post">
            <input type="hidden" value="<?= Yii::$app->request->csrfToken ?>" name="_csrf">
            <input type="text" placeholder="Ваше имя*" class="br_input" name="name" required>
            <input type="text" placeholder="Ваш телефон*" class="br_input" name="phone" required
                   pattern="^\+7\(7[0-9]{2}\)[0-9]{3}-[0-9]{2}-[0-9]{2}$" title="+7(7xx)xxx-xx-xx">
            <select class="model_type" name="item" required>
                <option value="">Выберите модель*</option>
                <option value="3">«<?= $items[3]['name'] ?>»
                    <?= Yii::$app->formatter->asCurrency($items[3]['price']) ?></option>
                <option value="5">«<?= $items[5]['name'] ?>»
                    <?= Yii::$app->formatter->asCurrency($items[5]['price']) ?></option>
                <option value="2">«<?= $items[2]['name'] ?>»
                    <?= Yii::$app->formatter->asCurrency($items[2]['price']) ?></option>
                <option value="1">«<?= $items[1]['name'] ?>»
                    <?= Yii::$app->formatter->asCurrency($items[1]['price']) ?></option>
                <option value="0">«<?= $items[0]['name'] ?>»
                    <?= Yii::$app->formatter->asCurrency($items[0]['price']) ?></option>
            </select>
            <input type="text" placeholder="Адрес доставки*" class="br_input" name="address" required>
            <button type="submit" class="br_button">Купить</button>
            <div>Бесплатная доставка по всему Казахстану!</div>
        </form>
    </div>
    <div class="phone">
        Или просто позвоните нам: <br>
        <span><?= Yii::$app->params['phone'] ?></span>
    </div>
</div>
<div class="block block--freetime">
    <h2 class="block__title">На что потратить <br> появившееся время - решайте <br> сами!</h2>
    <div class="ft_options">
        <div class="ft_options__item">Сладко выспаться, вставая только покормить малыша</div>
        <div class="ft_options__item">Приготовить вкусный обед из нескольких блюд</div>
        <div class="ft_options__item">Наконец-то целиком посмотреть интересный фильм</div>
        <div class="ft_options__item">Спокойно сходить в душ или даже полежать в ванной</div>
        <div class="ft_options__item">Побыть со своей второй половинкой наедине, не переживая за малыша</div>
        <div class="ft_options__item">Просто побездельничать и набраться сил</div>
    </div>
</div>
<div class="block block--patent">
    <h2 class="block__title">Запатентованная <br> технология!</h2>
    <img class="patent" src="images/patent_mob.png">
    <img src="images/analogov-net.png" class="unique">
    <p>Наше устройство уникально <br> и не имеет аналогов в мире!</p>
    <p>Продукция защищена патентом <br> на полезную модель №112007.</p>
</div>
<div class="block block--guarantee">
    <div class="block__top">
        <h2 class="block__title">Гарантия</h2>
        <div class="bt_img"><img src="images/garantiya.png"></div>
    </div>
    <h3>Мы работаем для <br> Вас и Ваших малышей!</h3>
    <p>У нас в коллективе практически у всех есть детишки разного возраста, и все мы знаем
        что такое первые месяцы жизни малыша.
        Поэтому для нас самое главное - это Ваше время и сон Ваших детишек!</p>
    <p>Заботясь о Вас, мы даем расширенную гарантию на наше устройство! В течение всего гарантийного периода, Вы
        всегда можете обращаться к нам с любым вопросом! Уронили пульт в ванную? Случайно оторвали провод? Есть
        какие то вопросы? </p>
</div>
<div class="block block--models">
    <h2 class="block__title">Модели</h2>
    <div class="models__slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="model">
                        <div class="model__inner">
                            <div class="model__left">
                                <div class="model__name">«Совушка»</div>
                                <img class="model__img" src="images/m_new.jpg">
                                <div class="model__price"><?= Yii::$app->formatter->asCurrency($items[5]['price']) ?></div>
                            </div>
                            <div class="model__right">
                                <ul class="model__list">
                                    <li>6 режимов качания</li>
                                    <li>Датчик движения</li>
                                    <li>Датчик плача (5 режимов)</li>
                                    <li>Таймер работы (до 24 часов)</li>
                                    <li>Пульт управления с подсветкой и обратной связью</li>
                                    <li>Встроенный web-сервер</li>
                                    <li>Режим «Станции» и «Точки доступа»</li>
                                    <li>Гарантия 12 месяцев</li>
                                    <li><a href="/docs/5.pdf" target="_blank" class="model__link">скачать инструкцию</a>
                                    </li>
                                </ul>
                                <a href="/" class="btn">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="model">
                        <div class="model__inner">
                            <div class="model__left">
                                <div class="model__name">«Тихоня Wi-Fi»</div>
                                <img class="model__img" src="images/m1.jpg">
                                <div class="model__price"><?= Yii::$app->formatter->asCurrency($items[3]['price']) ?></div>
                            </div>
                            <div class="model__right">
                                <ul class="model__list">
                                    <li>6 режимов качания</li>
                                    <li>Датчик движения</li>
                                    <li>Датчик реакции на плач</li>
                                    <li>Таймер работы</li>
                                    <li>Встроенный web-сервер</li>
                                    <li>Управление со всех современных устройств</li>
                                    <li>Работает на всех операционных системах</li>
                                    <li>Гарантия 12 месяцев</li>
                                    <li><a href="/docs/3.pdf" target="_blank" class="model__link">скачать инструкцию</a>
                                    </li>
                                </ul>
                                <a href="#order" class="btn">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="model">
                        <div class="model__inner">
                            <div class="model__left">
                                <div class="model__name">«Соня»</div>
                                <img class="model__img" src="images/m2.jpg">
                                <div class="model__price"><?= Yii::$app->formatter->asCurrency($items[2]['price']) ?></div>
                            </div>
                            <div class="model__right">
                                <ul class="model__list">
                                    <li>6 режимов качания</li>
                                    <li>Датчик реакции на плач</li>
                                    <li>Таймер работы</li>
                                    <li>Пульт дистанционного управления (с обратной связью)</li>
                                    <li>Гарантия 12 месяцев</li>
                                    <li><a href="/docs/2.pdf" target="_blank" class="model__link">скачать инструкцию</a>
                                    </li>
                                </ul>
                                <a href="#order" class="btn">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="model">
                        <div class="model__inner">
                            <div class="model__left">
                                <div class="model__name">«Паинька»</div>
                                <img class="model__img" src="images/m3.jpg">
                                <div class="model__price"><?= Yii::$app->formatter->asCurrency($items[1]['price']) ?></div>
                            </div>
                            <div class="model__right">
                                <ul class="model__list">
                                    <li>6 режимов качания</li>
                                    <li>Пульт дистанционного управления - ИК с односторонней связью</li>
                                    <li>Гарантия 12 месяцев</li>
                                    <li><a href="/docs/1.pdf" target="_blank" class="model__link">скачать инструкцию</a>
                                    </li>
                                </ul>
                                <a href="#order" class="btn">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="model">
                        <div class="model__inner">
                            <div class="model__left">
                                <div class="model__name">«Малютка»</div>
                                <img class="model__img" src="images/m4.jpg">
                                <div class="model__price"><?= Yii::$app->formatter->asCurrency($items[0]['price']) ?></div>
                            </div>
                            <div class="model__right">
                                <ul class="model__list">
                                    <li>1 режим качания</li>
                                    <li>Ручной запуск и остановка</li>
                                    <li>Гарантия 12 месяцев</li>
                                    <li><a href="/docs/0.pdf" target="_blank" class="model__link">скачать инструкцию</a>
                                    </li>
                                </ul>
                                <a href="#order" class="btn">Купить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="block block--delivery">
    <h2 class="block__title">Доставка и установка</h2>
    <div class="delivery">
        <div class="dlr__type">
            <div class="dlr__type_title">Алматы</div>
            <div class="dlr__type_desc dlr__type_desc--point">
                <div>Мастер</div>
                <div>Профессиональная установка от 2000 ₸</div>
            </div>
        </div>
        <div class="dlr__type">
            <div class="dlr__type_title">По всему Казахстану</div>
            <div class="dlr__type_desc dlr__type_desc--company">
                <div>Курьер</div>
                <div>Доставка заказа до Вашей двери</div>
            </div>
        </div>
    </div>
</div>
<div class="block block--faq">
    <h2 class="block__title"><span>Вопросы</span> и <span>ответы</span></h2>
    <div class="questions">
        <div class="questions__item">
            <p>Подойдет ли моя кроватка?</p>
            <p>Устройство подходит практически ко всем кроваткам с продольными, поперечными и универсальными
                маятниками. Единственное условие, отсутствие повышенного трения.</p>
        </div>
        <div class="questions__item">
            <p>Безопасно ли это для ребенка?</p>
            <p>Безопасность подтверждена протоколом испытаний, выданным «Центром стандартизации и
                метрологии»!</p>
        </div>
        <div class="questions__item">
            <p>Как установить устройство?</p>
            <p>Установка устройства на кроватку заключается в закреплении магнита на подвижной части и
                приводного блока - на неподвижной части кроватки.</p>
        </div>
        <div class="questions__item">
            <p>Что делать, если... ?</p>
            <p>Ответы на любые вопросы, Вы можете получить у наших операторов.</p>
        </div>
    </div>
</div>
<div class="block block--footer">
    <a href="/" class="link">Сделать заказ</a>
    <div class="contacts">
        <div class="contacts__inner"
             onclick="window.open('tel:<?= preg_replace('/[^+0-9]/', '', Yii::$app->params['phone']) ?>')">
            <span><?= Yii::$app->params['phone'] ?></span>
        </div>
    </div>
    <p class="address">г. Алматы</p>
    <div class="socials">
        <a class="socials__link socials__link--insta" href="https://www.instagram.com/baiu_bai/"></a>
        <a class="socials__link socials__link--youtube" href="https://www.youtube.com/c/УстройствоБаюБай"></a>
    </div>
    <div class="ftr_copyright">
        <p>Эксклюзивный дистрибьютор на территории России и СНГ www.baiu-bai.ru</p>
        <p>© 2012-2017 Устройства для качания детской кроватки «Баю-Бай»</p>
        <p>© 2015-2017 Интернет-магазин www.baiu-bai.ru</p>
    </div>
</div>