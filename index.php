<?php include('header.php'); ?>

<section class="header-sec">
	<div class="header">
		<div class="header__top-wrap">
			<div class="header__top container">
				<nav>
					<a href="#">О компании</a>
					<a href="#">Услуги</a>
					<a href="#">Акции</a>
					<a href="#">Блог</a>
					<a href="#">Контакты</a>
				</nav>
				<div class="header__top-contact">
					<a href="tel:88002000574" class="header__top-phone"><i class="i-phone"></i><span>8 800 200-05-74</span></a>
					<a href="#" class="header__top-call fancy" data-fancybox="#modalcall">Обратный звонок</a>
					<a href="#" class="header__cabinet"><i class="i-person"></i><span>Личный кабинет</span></a>
				</div>
			</div>
		</div>
		<div class="header__middle container">
			<a href="#" class="header__logo">
				<img src="img/logo-top.svg" alt="3D System Pro">
			</a>
			<form class="form-search">
				<input type="text" class="input-text input-text--search" placeholder="Поиск">
				<button><i class="i-search"></i></button>
			</form>
			<div class="header__cart-wrap">
				<a href="#" class="header__compare"><i class="i-compare"><sup>52</sup></i></a>
				<a href="#" class="header__cart">
					<i class="i-card"><sup>3</sup></i>
					<span class="header__cart-info">
						<b>Корзина: 3 товара</b>
						<span>на сумму 135 000 a</span>
					</span>
				</a>
			</div>
		</div>
		<div class="header__bottom container">
			<ul>
				<li><a href="#" data-category="catalog">Каталог</a></li>
				<li><a href="#" data-category="printer">3D принтеры</a></li>
				<li><a href="#" data-category="scan">3D Сканеры</a></li>
				<li><a href="#" data-category="access">Аксессуары</a></li>
				<li><a href="#" data-category="gadget">Гаджеты</a></li>
				<li><a href="#" data-category="material">Расходные материалы</a></li>
			</ul>

			<div class="header__bottom-cat-wrap">
				<div class="header__bottom-cat bottom-cat" id="catalog">
					<div class="bottom-cat__deals">
						<a href="#" class="bottom-cat__deal">
							<img src="" alt="">
							<span></span>
						</a>
					</div>
					<div class="bottom-cat__fabricators">
						<a href="#" class="bottom-cat__fabricator">
							<img src="" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>
