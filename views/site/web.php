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
    <div class="block__inner">
        <div class="logo"></div>
        <div class="contacts">
            <div class="textA"><?= Yii::$app->params['phone'] ?></div>
            <div class="textB">Официальный дилер в Казахстане</div>
            <div class="socials">
                <a class="socials__link socials__link--insta" href="https://www.instagram.com/baiu_bai.kz/"
                   target="_blank"></a>
                <a class="socials__link socials__link--youtube" href="https://www.youtube.com/УстройствоБаюБай"
                   target="_blank"></a>
            </div>
        </div>
        <div class="cloud">
            <div class="textA">
                Подарите Вашему ребенку крепкий сон!
            </div>
            <div class="textB">
                Устройство для автоматического качания детской кроватки с маятниковым механизмом "Баю-бай"
            </div>
            <a href="#compare" target="_self" class="link">Узнать больше</a>
        </div>
    </div>
</div>
<div class="block block--about">
    <div class="block__inner">
        <h2 class="textC">Что такое "Баю-Бай"</h2>
        <img src="images/baby_sleeping.jpg" width="774px" height="477px">
        <div class="block__text">
            <div class="block__text_header">Маятниковый механизм</div>
            <div class="block__text_content">Сон - одна из главных составляющих развития ребенка. С первых дней жизни
                очень важно обеспечить малышу комфортные условия засыпания, и большую роль здесь играет тип и качество
                детской кроватки. Опыт показывает, что для малыша и родителей очень удобны кроватки-маятники – их
                плавное качание имитирует нежные мамины руки.
            </div>
        </div>
        <div class="block__text">
            <div class="block__text_header">Сладкий сон</div>
            <div class="block__text_content">Кроватка с установленным на нее устройством автоматического качания
                «Баю-Бай» обеспечит спокойный сон вашему ребенку в течение всей ночи и во время дневного сна, а
                родителям – свободное время, когда можно заняться делами или передохнуть. Несколько режимов качания и
                большой набор функций позволят укачать ребенка и сохранить спокойный сон.
            </div>
        </div>
        <div class="block__text">
            <div class="block__text_header">Комфортное использование</div>
            <div class="block__text_content">Абсолютная бесшумность устройства обеспечит максимальный комфорт малышу, а
                дистанционное управление – его родителям. Устройство для качания кроватки превратит вашу обычную
                кроватку с маятниковым механизмом в самую лучшую автоматическую колыбель. Устройство для качания детской
                кроватки «Баю-Бай» - нежная забота о ребенке и передышка для родителей!
            </div>
        </div>
    </div>
</div>
<div class="block block--knowmore">
    <div class="block__inner">
        <h2 class="textC">Хотите узнать больше?</h2>
        <img src="images/laptop.png" width="844px" height="428px">
        <iframe width="550" height="335" src="//www.youtube.com/embed/5GTmYtVR0Fk?rel=0&amp;showinfo=0"
                frameborder="0" allowfullscreen="" wmode="transparent"></iframe>
    </div>
</div>
<div class="block--reasons">
    <div class="block__inner">
        <h2 class="textC">5 причин выбрать Наше устройство</h2>
        <div class="reasons">
            <div class="reason">
                <div class="reason__header"><span>Датчик плача</span></div>
                <div class="reason__text">Запуск качания от плача ребенка, чувствительность микрофона регулируется!
                </div>
                <div class="reason__subtitle">*Модель "Тихоня wi-fi" и "Соня"</div>
            </div>
            <div class="reason">
                <div class="reason__header"><span>Таймер качания</span></div>
                <div class="reason__text">Таймер качания от 10 мин. до 24 ч. – малыш укачивается ровно столько, сколько
                    решите Вы!
                </div>
                <div class="reason__subtitle">*Модель "Тихоня wi-fi" и "Соня"</div>
            </div>
            <div class="reason">
                <div class="reason__header"><span>Датчик движения</span></div>
                <div class="reason__text">Запуск качания от шевеления ребенка, устройство понимет, когда ворочается
                    малыш!
                </div>
                <div class="reason__subtitle">*Модель "Тихоня wi-fi"</div>
            </div>
            <div class="reason">
                <div class="reason__header"><span>6 режимов качания</span></div>
                <div class="reason__text">Выбирайте самую комфортную «скорость» для вашего малыша!</div>
                <div class="reason__subtitle">*Модель "Тихоня wi-fi", "Соня" и "Паинька"</div>
            </div>
            <div class="reason">
                <div class="reason__header"><span>100% бесшумно</span></div>
                <div class="reason__text">Никакого жужжания или писка!
                    Никаких моторчиков и ниток, снижающих надежность!
                </div>
                <div class="reason__subtitle">*Все модели</div>
            </div>
        </div>
    </div>
</div>
<div class="block block--order" id="order">
    <div class="block__inner">
        <div class="block__left">
            <h2>Тихоня Wi-Fi с датчиком движения!</h2>
            <p>Уже в продаже!</p>
        </div>
        <div class="block__right">
            <h2>Сделать заказ:</h2>
            <form id="order-form" action="<?= \yii\helpers\Url::to(['order']) ?>" method="post">
                <input type="hidden" value="<?= Yii::$app->request->csrfToken ?>" name="_csrf">
                <input type="text" placeholder="Ваше имя*" class="br_input" name="name" required>
                <input type="text" placeholder="Ваш телефон*" class="br_input" name="phone" required
                       pattern="^\+7\(7[0-9]{2}\)[0-9]{3}-[0-9]{2}-[0-9]{2}$" title="+7(7xx)xxx-xx-xx">
                <select class="model_type" name="item" required>
                    <option value="">Выберите модель*</option>
                    <option value="3">«<?= $items[3]['name'] ?>
                        » <?= Yii::$app->formatter->asCurrency($items[3]['price']) ?></option>
                    <option value="2">«<?= $items[2]['name'] ?>
                        » <?= Yii::$app->formatter->asCurrency($items[2]['price']) ?></option>
                    <option value="1">«<?= $items[1]['name'] ?>
                        » <?= Yii::$app->formatter->asCurrency($items[1]['price']) ?></option>
                    <option value="0">«<?= $items[0]['name'] ?>
                        » <?= Yii::$app->formatter->asCurrency($items[0]['price']) ?></option>
                </select>
                <input type="text" placeholder="Адрес доставки*" class="br_input" name="address" required>
                <button type="submit" class="br_button">Купить</button>
            </form>
        </div>
    </div>
</div>
<div class="block block--freetime">
    <div class="block__inner">
        <h2 class="textC">На что потратить появившееся время - решайте сами!</h2>
        <div class="ft_options">
            <div class="ft_options__item">Сладко выспаться, вставая только покормить малыша</div>
            <div class="ft_options__item">Приготовить вкусный обед из нескольких блюд</div>
            <div class="ft_options__item">Наконец-то целиком посмотреть интересный фильм</div>
            <div class="ft_options__item">Спокойно сходить в душ или даже полежать в ванной</div>
            <div class="ft_options__item">Побыть со своей второй половинкой наедине, не переживая за малыша</div>
            <div class="ft_options__item">Просто побездельничать и набраться сил</div>
        </div>
    </div>
</div>
<div class="block block--patent">
    <div class="block__inner">
        <div class="block__left">
            <img width="345px" height="501px" src="images/patent.jpg">
        </div>
        <div class="block__right">
            <h2 class="textC">Запатентованная технология!</h2>
            <img src="images/analogov-net.png" width="205px" height="206px">
            <p> Наше устройство уникально и не имеет аналогов в мире!</p>
            <p>Продукция защищена патентом на полезную модель №112007.</p>
        </div>
    </div>
</div>
<div class="block block--compare" id="compare">
    <div class="block__inner">
        <h2 class="textC">Сравнение моделей «Баю-Бай»</h2>
        <div class="c_table">
            <div class="c_table__row">
                <div class="c_table__col"></div>
                <div class="c_table__col">«Малютка»</div>
                <div class="c_table__col">«Паинька»</div>
                <div class="c_table__col">«Соня»</div>
                <div class="c_table__col">«Тихоня Wi-Fi»</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Цена</div>
                <div class="c_table__col">
                    <small><?= Yii::$app->formatter->asCurrency($items[0]['price']) ?></small>
                </div>
                <div class="c_table__col">
                    <small><?= Yii::$app->formatter->asCurrency($items[1]['price']) ?></small>
                </div>
                <div class="c_table__col">
                    <small><?= Yii::$app->formatter->asCurrency($items[2]['price']) ?></small>
                </div>
                <div class="c_table__col">
                    <small><?= Yii::$app->formatter->asCurrency($items[3]['price']) ?></small>
                </div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Бесшумная работа</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Отсутствие движущихся частей</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Не увеличивает габариты кроватки</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Гарантия 1 год</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Количество "скоростей" качания</div>
                <div class="c_table__col">1</div>
                <div class="c_table__col">6</div>
                <div class="c_table__col">6</div>
                <div class="c_table__col">6</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Таймер качания</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Датчик плача</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Датчик движения</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Беспроводной пульт</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">-</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Дистанционное управление с обратной связью</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">✔</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Встроенный web-сервер</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">✔</div>
            </div>
            <div class="c_table__row">
                <div class="c_table__col">Поддержка Windows, Linux, Mac OS, iOS, Android, Windows Mobile и т.д.</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">-</div>
                <div class="c_table__col">✔</div>
            </div>
        </div>
        <a href="#order" class="br_button">Заказать</a>
    </div>
</div>
<div class="block block--guarantee">
    <div class="block__inner">
        <div class="block__left">
            <img width="355px" height="355px" src="images/garantiya.png">
        </div>
        <div class="block__right">
            <h2 class="textC">Гарантия</h2>
            <p class="textD">Мы работаем для Вас и Ваших малышей!</p>
            <p>У нас в коллективе практически у всех есть детишки разного возраста, и все мы знаем что такое первые
                месяцы жизни малыша. Поэтому для нас самое главное - это Ваше время и сон Ваших детишек!</p>
            <p>Заботясь о Вас, мы даем расширенную гарантию на наше устройство! В течение всего гарантийного периода, Вы
                всегда можете обращаться к нам с любым вопросом! Уронили пульт в ванную? Случайно оторвали провод? Есть
                какие то вопросы? Мы всегда к Вашим услугам!</p>
        </div>
    </div>
</div>
<div class="block block--models">
    <div class="block__inner">
        <h2 class="textC">Модели</h2>
        <div class="models">
            <div class="model">
                <div class="model__title">
                    <div><?= $items[3]['name'] ?></div>
                    <div><?= Yii::$app->formatter->asCurrency($items[3]['price']) ?></div>
                </div>
                <div class="model__desc">
                    <img src="images/m1.jpg" width="200px" height="200px">
                    <ul>
                        <li>6 режимов качания</li>
                        <li>Датчик движения</li>
                        <li>Датчик реакции на плач</li>
                        <li>Таймер работы</li>
                        <li>Встроенный web-сервер</li>
                        <li>Управление со всех современных устройств</li>
                        <li>Работает на всех операционных системах</li>
                    </ul>
                </div>
                <a href="#order" class="model__btn">Купить</a>
            </div>
            <div class="model">
                <div class="model__title">
                    <div><?= $items[2]['name'] ?></div>
                    <div><?= Yii::$app->formatter->asCurrency($items[2]['price']) ?></div>
                </div>
                <div class="model__desc">
                    <img src="images/m2.jpg" width="200px" height="200px">
                    <ul>
                        <li>6 режимов качания</li>
                        <li>Датчик реакции на плач</li>
                        <li>Таймер работы</li>
                        <li>Пульт дистанционного управления (с обратной связью)</li>
                    </ul>
                </div>
                <a href="#order" class="model__btn">Купить</a>
            </div>
            <div class="model">
                <div class="model__title">
                    <div><?= $items[1]['name'] ?></div>
                    <div><?= Yii::$app->formatter->asCurrency($items[1]['price']) ?></div>
                </div>
                <div class="model__desc">
                    <img src="images/m3.jpg" width="200px" height="200px">
                    <ul>
                        <li>6 режимов качания</li>
                        <li>Пульт дистанционного управления - ИК с односторонней связью</li>
                    </ul>
                </div>
                <a href="#order" class="model__btn">Купить</a>
            </div>
            <div class="model">
                <div class="model__title">
                    <div><?= $items[0]['name'] ?></div>
                    <div><?= Yii::$app->formatter->asCurrency($items[0]['price']) ?></div>
                </div>
                <div class="model__desc">
                    <img src="images/m4.jpg" width="200px" height="200px">
                    <ul>
                        <li>1 режим качания</li>
                        <li>Ручной запуск и остановка</li>
                    </ul>
                </div>
                <a href="#order" class="model__btn">Купить</a>
            </div>
        </div>
    </div>
</div>
<div class="block block--video">
    <div class="block__inner">
        <h2 class="textC">Подойдет ли Ваша кроватка?</h2>
        <img src="images/imac.png" width="452px" height="363px">
        <iframe width="416" height="235" src="//www.youtube.com/embed/kED_FJWKDOA?rel=0&amp;showinfo=0"
                frameborder="0" allowfullscreen="" wmode="transparent"></iframe>
    </div>
</div>
<div class="block block--delivery" style="display: none;">
    <div class="block__inner">
        <h2 class="textC">Доставка</h2>
        <div class="delivery">
            <div class="dlr__type">
                <div class="dlr__type_desc dlr__type_desc--self">
                    <div>Самовывоз</div>
                    <div>Забрать свой заказ Вы можете у нас в шоу-руме</div>
                </div>
                <div class="dlr__type_title">Москва и МО</div>
                <div class="dlr__type_desc dlr__type_desc--door">
                    <div>Курьер</div>
                    <div>Доставка заказа до Вашей двери</div>
                </div>
            </div>
            <div class="dlr__type">
                <div class="dlr__type_desc dlr__type_desc--point">
                    <div>Пункт выдачи</div>
                    <div>Доставка до терминала выдачи в Вашем городе</div>
                </div>
                <div class="dlr__type_title">Россия и СНГ</div>
                <div class="dlr__type_desc dlr__type_desc--company">
                    <div>Транспортная компания</div>
                    <div>Доставка транспортной компанией</div>
                </div>
            </div>
            <div></div>
        </div>
    </div>
</div>
<div class="block block--faq">
    <div class="block__inner">
        <h2 class="textC"><span>Вопросы</span> и <span>ответы</span></h2>
        <div class="questions">
            <div class="questions__item">
                <p>Подойдет ли моя кроватка?</p>
                <p>Устройство подходит практически ко всем кроваткам с продольными, поперечными и универсальными
                    маятниками. Единственное условие, отсутствие повышенного трения.</p>
            </div>
            <div class="questions__item">
                <p>Безопасно ли это для ребенка?</p>
                <p>Безопасность подтверждена протоколом испытаний, выданным «Центром стандартизации и метрологии»!</p>
            </div>
            <div class="questions__item">
                <p>Как установить устройство?</p>
                <p>Установка устройства на кроватку заключается в закреплении магнита на подвижной части и приводного
                    блока - на неподвижной части кроватки.</p>
            </div>
            <div class="questions__item">
                <p>Что делать, если... ?</p>
                <p>Ответы на любые вопросы, Вы можете получить у наших операторов.</p>
            </div>
        </div>
    </div>
</div>
<div class="block block--footer">
    <div class="block__inner">
        <div class="ftr_logo">
            <img src="images/logo.png" width="182px" height="174px">
        </div>
        <div class="ftr_contacts">
            <div class="textA"><?= Yii::$app->params['phone'] ?></div>
            <div class="textB">г. Алматы, Республика Казахстан</div>
            <div class="socials">
                <a class="socials__link socials__link--insta" href="https://www.instagram.com/baiu_bai.kz/"
                   target="_blank"></a>
                <a class="socials__link socials__link--youtube" href="https://www.youtube.com/УстройствоБаюБай"
                   target="_blank"></a>
            </div>
        </div>
        <div class="ftr_copyright">
            <a href="#order" class="link">Сделать заказ</a>
            <p>© 2012-<?= date('Y') ?> Устройства для качания детской кроватки «Баю-Бай»</p>
            <p>© <?= date('Y') ?> Интернет-магазин baiu-bai.kz</p>
        </div>
    </div>
</div>
