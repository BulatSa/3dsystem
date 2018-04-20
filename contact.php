<?php include('header.php'); ?>

<section class="big-banner-sec s-def-bottom">
	<div class="container">
		<div class="big-banner big-banner--mini" style="background-image: url('../img/contact/bg-big-banner.jpg')">
			<div class="big-banner__info">
				<div class="user-content">
					<p class="h1">Контактная информация</p>
					<p class="h3">Хотите приехать на машине? <br>
						У нас бесплатная парковка!</p>
					<button class="btn btn--white fancy-modal" data-src="#modal-propusk">Заказать пропуск</button>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="s-def-bottom">
	<div class="container">
		<div class="contact-company row">
				<div class="contact-company__block">
					<div class="contact-company__text">
						<div class="user-content">
							<p class="h1">Казань</p>
						</div>
						<div class="contact-info">
							<div class="contact-info__left">
								<div class="contact-info__static">
									<span>Телефон</span>
									<a href="tel:78432609229" class="h3">+7 (843) 260—92—29</a>
									<a href="tel:78432122327" class="h3">+7 (843) 212—23—27</a>
								</div>
								<div class="contact-info__static">
									<span>E-mail</span>
									<a href="mailto:kzn@abs3d.ru" class="h3">kzn@abs3d.ru</a>
								</div>
								<div class="contact-info__static">
									<a href="https://yandex.ru/map-widget/v1/-/CBqBFDwCxD" class="btn btn--small fancy-map" data-type="iframe">Схема проезда</a>
								</div>
							</div>
							<div class="contact-info__right">
								<div class="contact-info__static">
									<span>Адрес</span>
									<p class="h3">Технопарк "ИДЕЯ", ул. Петербургская, д. 50 корп. 23, оф. 310, Казань, 420107</p>
								</div>
								<div class="contact-info__static">
									<span>Ближайшая станция метро</span>
									<p class="h3">Площадь Габдулы Тукая</p>
								</div>
								<div class="contact-info__static">
									<span>Часы работы</span>
									<p class="h3">10:00 — 18:00 | Пн — пт</p>
								</div>
							</div>
						</div>
					</div>
					<img src="img/contact/city-kazan.jpg" alt="">
				</div>

				<div class="contact-company__block">
					<div class="contact-company__text">
						<div class="user-content">
							<p class="h1">Санкт-Петербург</p>
						</div>
						<div class="contact-info">
							<div class="contact-info__left">
								<div class="contact-info__static">
									<span>Телефон</span>
									<a href="tel:78124253583" class="h3">+7 (812) 425—35—83</a>
								</div>
								<div class="contact-info__static">
									<span>E-mail</span>
									<a href="mailto:kzn@abs3d.ru" class="h3">spb@abs3d.ru</a>
								</div>
								<div class="contact-info__static">
									<a href="https://yandex.ru/map-widget/v1/-/CBqFyNXWWB" class="btn btn--small fancy-map" data-type="iframe">Схема проезда</a>
								</div>
							</div>
							<div class="contact-info__right">
								<div class="contact-info__static">
									<span>Адрес</span>
									<p class="h3">Лиговский проспект, д. 92 Г, Санкт-Петербург, 191119</p>
								</div>
								<div class="contact-info__static">
									<span>Ближайшая станция метро</span>
									<p class="h3">Лиговский проспект</p>
								</div>
								<div class="contact-info__static">
									<span>Часы работы</span>
									<p class="h3">10:00 — 18:00 | Пн — пт</p>
								</div>
							</div>
						</div>
					</div>
					<img src="img/contact/city-piter.jpg" alt="">
				</div>
		</div>
	</div>
</section>


<section class="s-def-bottom">
	<div class="container">
		<div class="contact-requiz">
			<p class="h1">Реквизиты компании</p>
			<div class="row">
				<div class="grid-5 grid-12_s contact-requiz__block">
					<div class="contact-info__static">
						<span>Юридический адрес</span>
						<p class="h3">РТ, г. Казань, ул. Петербургская, д. 50, кор. 23, оф. 414</p>
					</div>
					<div class="contact-info__static">
						<a href="#" class="btn btn--small">Скачать реквизиты</a>
					</div>
				</div>
				<div class="grid-3 grid-12_s contact-requiz__block">
					<div class="user-content">
						<p>
							ОГРН 16 007245359, <br>
							ИНН 165716798990 <br>
							ОГРНИП 315169000036357 <br>
							БИК 042202824
						</p>
					</div>
				</div>
				<div class="grid-4 grid-12_s contact-requiz__block">
					<div class="user-content">
						<p>
							в ФИЛИАЛе "НИЖЕГОРОДСКИЙ" АО "АЛЬФА-БАНК" <br>
							в г. НИЖНИЙ НОВГОРОД <br>
							Р/счёт 40802810629150000242 <br>
							Кор/счёт 30101810200000000824
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="modal-propusk" class="modal">
	<div class="modal__icon">
		<img src="/img/modal-order.svg" alt="icon">
	</div>
	<p class="h2 modal__title">Заказать пропуск</p>
	<form class="ajax-form vertical-form">
		<input type="hidden" value="Заказ пропуск" name="form_subject">
		<input type="text" name="user_car" placeholder="Гос. Номер авто (x999xx116)*" data-label="Гос. Номер авто" class="input-text" data-req="true">
		<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя" class="input-text">
		<input type="tel" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  class="input-text" data-req="true">
		<button type="submit" class="btn btn--blue">Заказать</button>
		<label class="style-check-ios">
			<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
			<span>Даю свое согласие на&nbsp;обработку моих персональных данных и&nbsp;соглашаюсь с&nbsp;<a href="/privacy.php" target="_blank">политикой конфиденциальности</a></span>
		</label>
	</form>
</div>

<?php include('footer.php'); ?>