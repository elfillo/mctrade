<?php $fieldID = get_page_id('index');?>
<footer class="footer">
    <div class="container">
        <div class="text">
            <div class="title">Контакты</div>
            <div class="content">
                <?php the_field('contacts', $fieldID)?>
            </div>
            <a href="<?php the_field('documents', $fieldID)?>" class="button" download>скачать реквизиты</a>
        </div>
        <div id="map"></div>
    </div>
</footer>
<?php require_once ('parts/views/modals/contacts.php')?>
<?php require_once ('parts/views/modals/buy.php')?>
<?php require_once ('parts/views/modals/details.php')?>
<?php require_once ('parts/views/modals/info.php')?>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/map.js"></script>
<?php wp_footer(); ?>
</body>
</html>