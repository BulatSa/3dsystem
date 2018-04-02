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
					<li><a href="#">О компании</a></li>
					<li><a href="#">Гарантийное обслуживание</a></li>
					<li class="active"><a href="#">Доставка и оплата</a></li>
					<li><a href="#">Блог</a></li>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Акции</a></li>
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<div class="footer-block">
				<p class="h2 footer-block__title">Каталог</p>
				<ul class="footer-menu">
					<li><a href="#">3D Принтеры</a></li>
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
						<span>Даю свое согласие на&nbsp;обработку моих персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="#" target="_blank">политикой конфиденциальности</a></span>
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

	</div>
</footer>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-order" class="modal">
		<p>Заказать обратный звонок</p>
		<p>Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form">
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя" class="text-input" >
			<input type="email" name="user_email" placeholder="Введите e-mail*" data-label="Email" class="text-input" data-req="true">
			<input type="tel" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  class="text-input" data-req="true">
			<input type="file" name="user_file" data-label="Файл">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<button type="submit" class="btn">Отправить</button>
			<label class="style-checkbox">
				<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
				<span>Принимаю <a href="#" target="_blank">условия обработки</a> персональных данных</span>
			</label>
		</form>
	</div>

	<div id="modal-thanks" class="modal">
		<p>Спасибо за заявку!</p>
	</div>

	<div id="modal-error" class="modal">
		<p>Что-то пошло не так.</p>
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
