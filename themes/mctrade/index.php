<?php
/*
Template Name: Главная
*/
?>
<?php $fieldID = get_page_id('index');?>
<?php get_header()?>
<section class="banner_1">
    <span>Поставки <br/> медицинского оборудования</span>
</section>
<section class="gen_dir">
    <div class="container">
        <div class="img"><img src="<?php the_field('gen_photo', $fieldID)?>" alt="dir"></div>
        <div class="text">
            <div class="title">Слово Генерального Директора</div>
            <div class="content"><?php the_field('gen_word', $fieldID)?></div>
            <div class="signature">
                <div class="name">Генеральный директор <br/> Малых Алексей Васильевич</div>
                <div class="signature_img"><img src="<?php echo get_template_directory_uri() ?>/img/signature.png" alt="signature"></div>
            </div>
        </div>
    </div>
</section>
<section class="how_we_work">
    <div class="title">Как мы работаем</div>
    <div class="list">
        <?php
            $steps = [
                    [
                        'img'   => 'img/icons/icon_1.png',
                        'title' => 'Заявка от клиента',
                        'hover' => 'обратная связь 1 час',
                        'modal' => 'Этап заявки от клиента является одним из основных этапов в сотрудничестве с компанией по поставки мед оборудование. Данный этап позволяет определить потребности Клиники и перечень задач которые должна решить компания для эффективной работы медицинского учреждения. Достаточно обратится в компанию «МС-Трейд» через телефонный звонок, заявку на сайте, либо электронным письмом, можно даже через мессенджер ватцап либо вайбер и наши специалисты помогут вам сформулировать запрос.'
                    ],
                    [
                        'img'   => 'img/icons/icon_2.png',
                        'title' => 'Опрос и составление технического задания',
                        'hover' => 'Срок исполнения до 10 дней',
                        'modal' => 'Этот этап уже связан с уточнением параметров оборудования, технических характеристик, сроков выполнения заявки, условий при которых заявка удовлетворит всем требования Заказчика. Мы работаем по принципу одного окна и это облегчает жизнь нашим заказчикам – специалист который работает с вами будет отвечать на все ваши вопросы и помогать вам в достижении конечного результата.'
                    ],
                    [
                        'img'   => 'img/icons/icon_3.png',
                        'title' => 'Подбор оборудования и выбор производителя',
                        'hover' => 'Срок исполнения до 10 дней',
                        'modal' => 'Этап подбора оборудования более сложный так как в зависимости от технического задания и сложности его исполнения мы подключаем к работе других специалистов – представителей заводов производителей, инженерного корпуса, строителей и других специалистов. Так как мы поставляем оборудование как существующие медицинские учреждения, так и оснащаем вновь строящиеся. И здесь необходимо чтоб характеристики помещений соответствовали требованиям оборудования.'
                    ],
                    [
                        'img'   => 'img/icons/icon_4.png',
                        'title' => 'Составление технической, тендерной документации ',
                        'hover' => 'Срок исполнения до 5 дней',
                        'modal' => 'На этом этапе используется опыт наших специалистов в рамках соблюдения требований законодательства и составление аналитики, позволяющей сохранить принципы рынка в конкурентной '
                    ],
                    [
	                    'img'   => 'img/icons/icon_5.png',
	                    'title' => 'Контроль за доставкой',
	                    'hover' => 'Срок исполнения от 5 до 60 дней',
	                    'modal' => 'Этап соблюдения условий контракта, на котором наш специалист взаимодействует с производственными транспорно логистическими компаниями отслеживая движение оборудования на каждом участке, подкрепляя документами и актами приема передач. В итоге наши клиенты вовремя получают оборудование, и мы несем полную ответственность за исполнения контракта.'
                    ],
                    [
                        'img'   => 'img/icons/icon_6.png',
                        'title' => 'Монтаж оборудования и ввод в эксплуатацию',
                        'hover' => 'Срок исполнения  от 2 до 45 дней',
                        'modal' => 'Этот этап инженерных «гениев»! Наши специалисты произведут распаковку поставляемого оборудования, монтаж его в нужном кабинете, тестирование и обучение специалиста которому предстоит работать на нем в будущем.'
                    ],
                    [
                        'img' => 'img/icons/icon_7.png',
                        'title' => 'Гарантийное и дополнительное сопровождение - технической поддержки',
                        'hover' => 'Срок исполнения от 3 до 60 дней',
                        'modal' => 'Этот этап, на котором Наши специалисты придут на помощь в случае выхода из строя любого работающего у вас оборудования. Мы поможем в поиске специалистов способных устранить поломку, если не справимся своими силами. Свяжемся с заводом производителя и подключим к решению задачи их специалистов, чтобы в кратчайшие сроки вы смогли продолжить работу и оказывать услуги поступающим пациентам.'
                    ],
                    [
                        'img' => 'img/icons/icon_8.png',
                        'title' => 'Экспертиза - Акт технического состояния оборудования',
                        'hover' => 'Срок исполнения  до 10 дней',
                        'modal' => 'Очень важный этап в жизненном цикле оборудование – Акт технического состояния работающего оборудования. Наши специалисты оценят эффективность работы существующего оборудования, его техническое состояние, уровень износа и морального устарения. В итоге заключение от Наших специалистов позволит Вам на законном основании утилизировать существующее оборудование, снять с бухгалтерского баланса и потребовать приобретение нового.'
                    ],
            ]
        ?>
        <?php foreach ($steps as $step):?>
            <div class="item">
                <div class="icon">
                    <img src="<?php get_uri($step['img'])?>" alt="<?php echo $step['title']?>" />
                    <div class="text_hover"><?php echo $step['hover']?></div>
                </div>
                <div class="text"><?php echo $step['title']?></div>
                <div class="button" onclick="getInfo('<?php echo $step['modal']?>')">Подробнее</div>
            </div>
        <?php endforeach;?>
    </div>
</section>
<section class="hardware">
    <div class="title">Виды оборудования</div>
    <div class="container">
        <div class="swiper-container hardware">
            <div class="swiper-wrapper">
                <?php $hardwares = get_posts(array('post_type' => 'post_hardware', 'numberposts'      => 999));?>
                <?php foreach ($hardwares as $hardware):?>
                    <div class="swiper-slide">
                        <div class="hardware_item" value="<?php echo $hardware->post_title?>">
                            <div class="img"><?php echo get_the_post_thumbnail($hardware->ID)?></div>
                            <div class="title"><?php echo $hardware->post_title?></div>
                            <div class="button button_blue open_modal_detail" onclick="getDetail(<?php echo $hardware->ID?>)">ПОДРОБНЕЕ</div>
                            <div class="button button_orange open_modal_buy">ЗАКАЗАТЬ</div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<section class="brands">
    <div class="container">
        <div class="title">Бренды оборудования которое вы можете приобрести</div>
        <div class="list">
            <?php foreach (get_field('brands', $fieldID) as $brand):?>
                <div class="item"><img src="<?php echo $brand ?>" alt="#"></div>
            <?php endforeach;?>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="34" title="Имя и телефон"]')?>
    </div>
</section>
<section class="hardware gallery_hardware">
    <div class="title">Посмотрите галереи оборудования которые мы уже поставили</div>
    <div class="container">
        <div class="swiper-container hardware_gallery">
            <div class="swiper-wrapper">
	            <?php foreach (get_field('installed_hard', $fieldID) as $item):?>
                    <div class="swiper-slide" style="background-image:url('<?php echo $item ?>');"></div>
	            <?php endforeach; unset($item)?>
            </div>
        </div>
    </div>
</section>
<section class="statistics">
    <div class="container">
        <div class="title">СТАТИСТИКА РАБОТЫ С 2015 ГОДА</div>
        <div class="list">
            <div class="item">
                <div class="number benefits__number">303</div>
                <div class="text">ДОВОЛЬНЫХ <br/>КЛИЕНТОВ</div>
            </div>
            <div class="item">
                <div class="number benefits__number">541</div>
                <div class="text">ПОСТАВКА</div>
            </div>
            <div class="item">
                <div class="number benefits__number">258</div>
                <div class="text">УСТАНОВОК</div>
            </div>
            <div class="item">
                <div class="number benefits__number">874</div>
                <div class="text">ПОМОЩИ В РАЗРАБОТКЕ ДОКУМЕНТОВ</div>
            </div>
        </div>
    </div>
</section>
<section class="short_form">
    <div class="container container_small">
        <div class="title">ЕСЛИ У ВАС ОСТАЛИСЬ ВОПРОСЫ  ОСТАВЬТЕ СВОЙ НОМЕР ТЕЛЕФОНА</div>
        <?php echo do_shortcode('[contact-form-7 id="44" title="Телефон"]')?>
    </div>
</section>
<?php get_footer()?>


