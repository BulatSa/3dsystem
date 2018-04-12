<?php include('header.php'); ?>

<section class="section-title">
	<div class="container">
		<h1>Сравнение товаров</h1>
	</div>
</section>


<section class="user-compare-sec s-def-bottom">
	<div class="user-compare container">
		<div class="user-compare__items">
			<div class="user-compare__settings">
				<p>Параметры</p>
				<a href="#" class="active">Различающиеся</a>
				<a href="#">Одинаковые</a>
			</div>
			<div class="user-compare__items-list">
				<div class="user-compare__items-product">
					<div class="product-preview product-preview--compare">
						<header>
							<a href="/catalog-detail.php">
								<img src="/img/preview/pr_1.jpg" alt="224x168">
							</a>
							<div class="product-labels">
								<div class="product-label product-label--green">Новинка</div>
								<div class="product-label product-label--red">-15%</div>
							</div>
						</header>
						<main>
							<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер Picaso Designer X PRO</a>
							<span class="product-preview__price">
							<span class="price--old">6 590 000<span class="rub">c</span></span>
							<span>5 555 590<span class="rub">c</span></span>
						</span>
						</main>
						<footer>
							<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
							<button class="btn btn--round" title="Удалить"><i class="i-remove"></i></button>
						</footer>
					</div>
				</div>
				<div class="user-compare__items-product">
					<div class="product-preview product-preview--compare">
						<header>
							<a href="/catalog-detail.php">
								<img src="/img/preview/pr_3.jpg" alt="1">
							</a>
						</header>
						<main>
							<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер</a>
							<span class="product-preview__price">180 000<span class="rub">c</span></span>
						</main>
						<footer>
							<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
							<button class="btn btn--round" title="Удалить"><i class="i-remove"></i></button>
						</footer>
					</div>
				</div>
				<div class="user-compare__items-product">
					<div class="product-preview product-preview--compare">
						<header>
							<a href="/catalog-detail.php">
								<img src="/img/preview/224x168.png" alt="224x168">
							</a>
						</header>
						<main>
							<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер Picaso Designer X PRO</a>
							<span class="product-preview__price">10 590<span class="rub">c</span></span>
						</main>
						<footer>
							<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
							<button class="btn btn--round" title="Удалить"><i class="i-remove"></i></button>
						</footer>
					</div>
				</div>
				<div class="user-compare__items-product">
					<div class="product-preview product-preview--compare">
						<header>
							<a href="/catalog-detail.php">
								<img src="/img/preview/pr_2.jpg" alt="1">
							</a>
						</header>
						<main>
							<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер</a>
							<span class="product-preview__price">180 000<span class="rub">c</span></span>
						</main>
						<footer>
							<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
							<button class="btn btn--round" title="Удалить"><i class="i-remove"></i></button>
						</footer>
					</div>
				</div>
			</div>
		</div>
		<div class="user-compare__table">
			<p class="user-compare__table h2">Различающиеся:</p>
			<div class="compare-table">
				<div class="compare-table__row">
					<span class="compare-table__set">Пол</span>
					<span class="compare-table__position">Мужской</span>
					<span class="compare-table__position">Универсальный</span>
					<span class="compare-table__position">Женский</span>
					<span class="compare-table__position">Универсальный</span>
				</div>
				<div class="compare-table__row">
					<span class="compare-table__set">Торговая марка</span>
					<span class="compare-table__position">Сурсил</span>
					<span class="compare-table__position">Твики</span>
					<span class="compare-table__position">Ботиллини</span>
					<span class="compare-table__position">Ортек</span>
				</div>
				<div class="compare-table__row">
					<span class="compare-table__set">Сезон</span>
					<span class="compare-table__position">Демисезонная</span>
					<span class="compare-table__position">Летняя</span>
					<span class="compare-table__position">Зимняя</span>
					<span class="compare-table__position">Домашняя</span>
				</div>
				<div class="compare-table__row">
					<span class="compare-table__set">Внутренний материал</span>
					<span class="compare-table__position">-</span>
					<span class="compare-table__position">Байка</span>
					<span class="compare-table__position">Натуральная кожа</span>
					<span class="compare-table__position">Шерсть</span>
				</div>
				<div class="compare-table__row">
					<span class="compare-table__set">Состав</span>
					<span class="compare-table__position"> Каркас из вспененной пробки, полкрытие-натуральная кожа.</span>
					<span class="compare-table__position">Каркас из полимерного материала, основа из вспененного материала, полкрытие-полиуретановая кожа.</span>
					<span class="compare-table__position">Натуральная кожа, эвапласт, клеевой аппликатор.</span>
					<span class="compare-table__position">Каркас из полимерного материала, основа из вспененного материала, полкрытие-полиуретановая кожа.</span>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
