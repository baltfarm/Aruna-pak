				</section>
				<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
					IncludeTemplateLangFile(__FILE__);
				?>
			</main>
	    </div>
	</div>
</div>


<!--==========================
    Footer
  ============================-->
<footer id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
              	<div class="">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu_aruna", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"COMPONENT_TEMPLATE" => ".default",
						"MENU_THEME" => "site"
					),
					false
					);?>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
          		<div class="copyright">
                	Copyright <strong>ARUNA</strong>. Все права защищены.
              	</div>
            </div>
        </div>
	</div>   
</footer>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


<!-- JavaScript Libraries -->
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery/jquery.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/easing/easing.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/superfish/superfish.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/wow/wow.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/lib/sticky/sticky.js"></script>


  <!-- Template Main Javascript File -->
  <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

</body>
</html>