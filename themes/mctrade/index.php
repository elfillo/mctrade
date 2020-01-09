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
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_1.png" alt="icon_1">
                <div class="text_hover">СРОК ИСПОЛНЕНИЯ ДО 10 ДНЕЙ</div>
            </div>
            <div class="text">Заявка с сайта или звонок</div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_2.png" alt="icon_1">
                <div class="text_hover">СРОК ИСПОЛНЕНИЯ ДО 10 ДНЕЙ</div>
            </div>
            <div class="text">Опрос и составление технического задания</div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_3.png" alt="icon_1">
                <div class="text_hover">СРОК ИСПОЛНЕНИЯ ДО 10 ДНЕЙ</div>
            </div>
            <div class="text">Подбор оборудования</div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_4.png" alt="icon_1">
                <div class="text_hover">СРОК ИСПОЛНЕНИЯ ДО 10 ДНЕЙ</div>
            </div>
            <div class="text">Документы для тендера, контракты и договора</div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_5.png" alt="icon_1">
                <div class="text_hover">СРОК ИСПОЛНЕНИЯ ДО 10 ДНЕЙ</div>
            </div>
            <div class="text">Контролируем поставку</div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_6.png" alt="icon_1">
                <div class="text_hover">СРОК ИСПОЛНЕНИЯ ДО 10 ДНЕЙ</div>
            </div>
            <div class="text">Монтаж оборудования и ввод в эксплуатацию</div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_7.png" alt="icon_1">
                <div class="text_hover">СРОК ИСПОЛНЕНИЯ ДО 10 ДНЕЙ</div>
            </div>
            <div class="text">Обслуживыем оборудование</div>
        </div>
        <div class="item">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon_8.png" alt="icon_1">
                <div class="text_hover">СРОК ИСПОЛНЕНИЯ ДО 10 ДНЕЙ</div>
            </div>
            <div class="text">Акт технического состояния</div>
        </div>
    </div>
</section>
<section class="hardware">
    <div class="title">Виды оборудования</div>
    <div class="container">
        <div class="swiper-container">
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
        <div class="title">Бренды оборудование которое вы можете приобрести</div>
        <div class="list">
            <?php foreach (get_field('brands', $fieldID) as $brand):?>
                <div class="item"><img src="<?php echo $brand ?>" alt="#"></div>
            <?php endforeach;?>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="34" title="Имя и телефон"]')?>
        <!--<div class="form">
            <div class="title">Оставьте свои контакты для уточнения информации</div>
            <div class="inputs">
                <input class="border_blue" type="text" placeholder="Ваше Имя">
                <input class="border_blue" type="text" placeholder="Ваш телефон">
                <input class="orange" type="submit" value="Отправить">
            </div>
        </div>-->
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
                <div class="number">303</div>
                <div class="text">ДОВОЛЬНЫХ <br/>КЛИЕНТОВ</div>
            </div>
            <div class="item">
                <div class="number">541</div>
                <div class="text">Поставка</div>
            </div>
            <div class="item">
                <div class="number">258</div>
                <div class="text">установок</div>
            </div>
            <div class="item">
                <div class="number">874</div>
                <div class="text">ПОМОЩИ В РАЗРАБОТКЕ ДОКУМЕНТОВ</div>
            </div>
        </div>
    </div>
</section>
<section class="short_form">
    <div class="container container_small">
        <div class="title">ЕСЛИ У ВАС ОСТАЛИСЬ ВОПРОСЫ  ОСТАВЬТЕ СВОЙ НОМЕР ТЕЛЕФОНА</div>
        <div class="form_phone">
            <input class="phone" type="text" placeholder="">
            <input class="submit" type="submit" value="ОТПРАВИТЬ">
        </div>
    </div>
</section>
<?php get_footer()?>


