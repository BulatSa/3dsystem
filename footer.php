<section class="s-pay-methods">
	<div class="container">
		<p class="h3">К оплате принимаем</p>
		<div class="s-pay-methods__img">
			<img src="/img/pay.png" alt="pay">
		</div>
	</div>
</section>


<footer class="s-footer">
	<div class="container">

		<div class="breadcrumbs">
			<a href="/">Главная</a>
			<span>→</span>
			<a href="#">Каталог</a>
			<span>→</span>
			<a href="#">3D Принтеры</a>
			<span>→</span>
			<a href="/">Название товара длинное если будет</a>
		</div>

		<div class="footer-row">
			<div class="footer-block">
				<p class="h2 footer-block__title">О нас</p>
				<ul class="footer-menu">
					<li><a href="/about.php">О компании</a></li>
					<li><a href="/garant.php">Гарантийное обслуживание</a></li>
					<li class="active"><a href="/delivery.php">Доставка и оплата</a></li>
					<li><a href="/blog.php">Блог</a></li>
					<li><a href="/news.php">Новости</a></li>
					<li><a href="/promo.php">Акции</a></li>
					<li><a href="/reviews.php">Отзывы</a></li>
					<li><a href="/services.php">Услуги</a></li>
					<li><a href="/brands.php">Бренды</a></li>
					<li><a href="/contact.php">Контакты</a></li>
				</ul>
			</div>
			<div class="footer-block">
				<p class="h2 footer-block__title">Каталог</p>
				<ul class="footer-menu">
					<li><a href="/catalog.php">3D Принтеры</a></li>
					<li><a href="#">3D Сканеры</a></li>
					<li><a href="#">Аксессуары</a></li>
					<li><a href="#">Гаджеты</a></li>
					<li><a href="#">Расходные материалы</a></li>
					<li><a href="#">Станки ЧПУ</a></li>
					<li><a href="#">Робототехника</a></li>
					<li><a href="#">Литьевое оборудование</a></li>
				</ul>
			</div>
			<div class="footer-block footer-block--contacts">
				<p class="h2 footer-block__title">Контакты</p>
				<div class="footer-cont">
					<small>Бесплатный звонок по РФ</small>
					<a href="tel:88002000574" class="h2">8 800 200-05-74</a>
				</div>
				<div class="footer-cont">
					<small>Казань</small>
					<a href="tel:88432609229" class="h2">8 843 260-92-29</a>
				</div>
				<div class="footer-email">
					<a href="mailto:support@3dsystem.pro">support@3dsystem.pro</a>
				</div>
			</div>
			<div class="footer-block footer-block--subscribe">
				<p class="h2 footer-block__title">Полезная рассылка</p>
				<form class="ajax-form">
					<input type="hidden" value="Подписка на рассылку" name="form_subject">
					<div class="subscribe-group">
						<input type="email" class="input-text" placeholder="Введите e-mail" data-req="true">
						<button type="submit" title="Подписаться" class="btn btn--blue"><i class="i-subscribe"></i></button>
					</div>
					<label class="style-check-ios">
						<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
						<span>Даю свое согласие на&nbsp;обработку моих персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="/privacy.php" target="_blank">политикой конфиденциальности</a></span>
					</label>
				</form>
			</div>
			<div class="footer-block footer-block--socials">
				<div class="social-links">
					<a href="#" target="_blank"><i class="i-soc-vk"></i></a>
					<a href="#" target="_blank"><i class="i-soc-insta"></i></a>
					<a href="#" target="_blank"><i class="i-soc-fb"></i></a>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="footer-bottom__policy">© 2012-2018 ООО «3Д Систем Про»</div>
			<div class="footer-bottom__center"><a href="/privacy.php">Политика конфиденциальности</a></div>
			<div class="footer-bottom__right">
				<a href="https://penbrain.ru" target="_blank" title="Сайт разработан в Pen&Brain">
					<img src="/img/logo-develop.svg" alt="Pen&Brain logotype">
				</a>
			</div>
		</div>

	</div>
</footer>


<button class="btn to-top-btn" title="Наверх">
	<i class="i-left-arrow"></i>
</button>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-call" class="modal">
		<div class="modal__icon">
			<img src="/img/modal-order.svg" alt="icon">
		</div>
		<p class="h2 modal__title">Заказать обратный звонок</p>
		<form class="ajax-form vertical-form">
			<input type="hidden" value="Заказ обратного звонка" name="form_subject">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя" class="input-text">
			<input type="tel" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  class="input-text" data-req="true">
			<button type="submit" class="btn btn--blue">Отправить</button>
			<label class="style-check-ios">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Даю свое согласие на&nbsp;обработку моих персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="/privacy.php" target="_blank">политикой конфиденциальности</a></span>
			</label>
		</form>
	</div>



	<div id="modal-addtocart" class="modal">
		<p class="h2 modal__title">Товар добавлен в&nbsp;корзину</p>
		<p class="modal__descr">Количество товара в корзине: 2</p>
		<div class="modal__btns">
			<button class="btn" data-fancybox-close>Вернуться</button>
			<a href="#" class="btn btn--red">Оформить заказ</a>
		</div>
	</div>

	<div id="modal-thanks" class="modal">
		<div class="modal__icon">
			<img src="/img/thanks.svg" alt="icon">
		</div>
		<p class="h2 modal__title">Спасибо!</p>
	</div>

	<div id="modal-error" class="modal">
		<p class="h2 modal__title">Что-то пошло не так.</p>
		<p>Попробуйте еще раз.</p>
		<p>Если постоянно видите эту ошибку, пожалуйста, обратитесь к администратору сайта. Мы будем очень благодарны.</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
