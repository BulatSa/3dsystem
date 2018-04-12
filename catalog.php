<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">3D принтеры</h1>
	</div>
</section>


<section class="s-catalog-subcats">
	<div class="container">
		<ul>
			<li><a href="/catalog.php" class="btn btn--small">Лучшие предложения</a></li>
			<li><a href="/catalog.php" class="btn btn--small">Промышленные</a></li>
			<li><a href="/catalog.php" class="btn btn--small">Строительные</a></li>
			<li><a href="/catalog.php" class="btn btn--small">Персональные</a></li>
			<li><a href="/catalog.php" class="btn btn--small">Профессиональные</a></li>
			<li><a href="/catalog.php" class="btn btn--small">Готовые решения</a></li>
		</ul>
	</div>
</section>


<section class="s-catalog-mob-btns">
	<div class="container">
		<button class="btn mob-open-filter">Фильтр <i class="i-down"></i></button>
		<button class="btn mob-open-sort">Сортировка <i class="i-down"></i></button>
		<button class="filter-block-close"></button>
	</div>
</section>


<section class="s-sort s-def-bottom">
	<div class="container">
		<div class="sort-panel">
			<div class="sort-panel__block">
				<div class="sort-panel__title h3">Сортировать по:</div>
				<select name="xxx" class="select-style" title="Сортировка товаров">
					<option value="По умолчанию">По умолчанию</option>
					<option value="Цены по возрастанию">Цены по возрастанию</option>
					<option value="Цены по убыванию">Цены по убыванию</option>
					<option value="По популярности">По популярности</option>
				</select>
			</div>
			<div class="sort-panel__block">
				<div class="sort-panel__title h3">Показывать по:</div>
				<ul class="pagination-list">
					<li><a href="#" rel="nofollow" class="active">20</a></li>
					<li><a href="#" rel="nofollow">40</a></li>
					<li><a href="#" rel="nofollow">60</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<section class="s-catalog s-def">
	<div class="container">

		<div class="catalog-wrapper">

			<aside class="catalog-aside">
				<div class="filter-block">

					<div class="filter opened">
						<span class="h3 filter__title">Цена</span>
						<div class="filter__values">
							<div class="price-filter">
								<div class="price-filter__header">
									<input type="text" placeholder="1100" class="price-filter--from">
									<figure></figure>
									<input type="text" placeholder="25000" class="price-filter--to">
								</div>
								<input type="text" class="price_range" data-min="1100" data-max="25000" data-from="2000" data-to="8000">
							</div>
						</div>
					</div>

					<div class="filter opened">
						<a href="#" class="filter-mod" id="modef">
							<div class="filter-mod__num">
								Выбрано:
								<span id="modef_num">53</span>
							</div>
							<span class="filter-mod__show">Показать</span>
						</a>
						<span class="filter__title">Производитель</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Cyberon</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>MakerBot</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Picaso 3D</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Zenit</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Imprinta</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>3D Quality</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Cyberon</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>MakerBot</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Picaso 3D</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Zenit</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Imprinta</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>3D Quality</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Cyberon</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>MakerBot</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Picaso 3D</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Zenit</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Imprinta</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>3D Quality</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Cyberon</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>MakerBot</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Picaso 3D</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Zenit</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Imprinta</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>3D Quality</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>Cyberon</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>MakerBot</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Picaso 3D</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Zenit</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" disabled>
								<span>Imprinta</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>3D Quality</span>
							</label>

						</div>
					</div>

					<div class="filter opened">
						<span class="filter__title">Технология печати</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>DLP</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>FDM</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>SLA</span>
							</label>
						</div>
					</div>

					<div class="filter opened">
						<span class="h3 filter__title">Min толщина слоя (микрон)</span>
						<div class="filter__values">
							<div class="range-filter">
								<div class="range-filter__header">
									<input type="text" placeholder="5" class="range-filter--from">
									<figure></figure>
									<input type="text" placeholder="150" class="range-filter--to">
								</div>
								<input type="text" class="range-filter__slider" data-min="5" data-max="150" data-from="5" data-to="150">
							</div>
						</div>
					</div>

					<div class="filter">
						<span class="filter__title">Количество экструдеров</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>DLP</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>FDM</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>SLA</span>
							</label>
						</div>
					</div>

					<div class="filter">
						<span class="filter__title">Область печати (см)</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>DLP</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>FDM</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>SLA</span>
							</label>
						</div>
					</div>

					<div class="filter">
						<span class="filter__title">Материал печати</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>DLP</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>FDM</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>SLA</span>
							</label>
						</div>
					</div>

					<div class="filter">
						<span class="filter__title">Материал поддержки</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>DLP</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>FDM</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>SLA</span>
							</label>
						</div>
					</div>

					<div class="filter">
						<span class="filter__title">Толщина нити (мм)</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>DLP</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>FDM</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>SLA</span>
							</label>
						</div>
					</div>

					<div class="filter">
						<span class="filter__title">Вес (кг)</span>
						<div class="filter__values">
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>DLP</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX" checked>
								<span>FDM</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>SLA</span>
							</label>
						</div>
					</div>

					<div class="filter-block__footer">
						<a href="#" class="btn btn--red">Показать</a>
						<a href="#" class="link filter-block__reset">Сбросить</a>
					</div>

				</div>
			</aside>

			<main class="catalog-main">

				<div class="border-block">
					<p class="h2">В этой категории нет товаров</p>
				</div>

				<div class="row product-list">
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/pr_1.jpg" alt="220x180">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/pr_2.jpg" alt="1">
								</a>
								<div class="product-labels">
									<div class="product-label product-label--red">-25%</div>
								</div>
							</header>
							<main>
								<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер MakerBot Replicator + (PLUS)</a>
								<span class="product-preview__price">
								<span class="price--old">590 000 <span class="rub">c</span></span>
								<span>555 590 <span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/vert.png" alt="1">
								</a>
							</header>
							<main>
								<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">PLA пластик 1,75 Экофил Стримпласт серебристо-серый</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/pr_1.jpg" alt="220x180">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/pr_2.jpg" alt="1">
								</a>
								<div class="product-labels">
									<div class="product-label product-label--red">-25%</div>
								</div>
							</header>
							<main>
								<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер</a>
								<span class="product-preview__price">
								<span class="price--old">590 000 <span class="rub">c</span></span>
								<span>555 590 <span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/vert.png" alt="1">
								</a>
							</header>
							<main>
								<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/pr_1.jpg" alt="220x180">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/pr_2.jpg" alt="1">
								</a>
								<div class="product-labels">
									<div class="product-label product-label--red">-25%</div>
								</div>
							</header>
							<main>
								<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер</a>
								<span class="product-preview__price">
								<span class="price--old">590 000 <span class="rub">c</span></span>
								<span>555 590 <span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/vert.png" alt="1">
								</a>
							</header>
							<main>
								<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/pr_1.jpg" alt="220x180">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/pr_2.jpg" alt="1">
								</a>
								<div class="product-labels">
									<div class="product-label product-label--red">-25%</div>
								</div>
							</header>
							<main>
								<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер</a>
								<span class="product-preview__price">
								<span class="price--old">590 000 <span class="rub">c</span></span>
								<span>555 590 <span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
							<header>
								<a href="/catalog-detail.php">
									<img src="/img/preview/vert.png" alt="1">
								</a>
							</header>
							<main>
								<a href="/catalog-detail.php" class="h3 product-preview__title" title="Название принтера">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red fancy-modal" data-src="#modal-addtocart">В корзину</button>
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
					<div class="grid-5-in-row grid-3_xxl grid-4_m grid-6_s">
						<div class="product-preview">
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
								<button class="btn btn--round" title="Добавить к сравнению"><i class="i-compare"></i></button>
							</footer>
						</div>
					</div>
				</div>

				<div class="pagination">
					<a href="#" class="pagination__link pagination__link--disabled">Назад</a>
					<ul class="pagination-list">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">8</a></li>
					</ul>
					<a href="#" class="pagination__link">Вперед</a>
				</div>

				<div class="catalog-description border-block user-content">
					<h2>Домашние 3Д-принтеры</h2>
					<p>
						Распространенное мнение, что трехмерная техника — сложное, исключительно профессиональное устройство, без сомнения, устарело. Сегодня принтеры, способные создавать 3D-объекты, приобретают и для использования вне офисного пространства — в рабочих и творческих целях. Известен пример американской энтузиастки многомерного моделирования, которая изготовила виниловую пластинку, предварительно обеспечив ее специализированным ПО.
					</p>
					<img src="/img/home/banner.jpg" title="Распространенное мнение, что трехмерная техника — сложное, исключительно профессиональное устройство">
					<p>
						Если владелец не планирует масштабный «технический прорыв», а хочет печатать объекты небольшими партиями, нуждается в негабаритной технике, домашний 3D-принтер станет ему прекрасным помощником: купить его можно с легкостью, цена достаточно невелика, а работать можно и с пластиками, и по металлу. На рынке представлено много устройств, которые подходят под требования техники для дома:
					</p>
					<ul>
						<li>достаточно компактные, чтобы не занимать место на рабочем столе или полке — по размерам они приближены к стандартным лазерным принтерам;</li>
						<li>простые в использовании — даже если бытовой 3D-принтер нужно собирать самостоятельно в домашних условиях, с ним не возникнет трудностей — производители поставляют в комплекте с ним подробные инструкции;</li>
						<li>безопасные — с ними может работать совершенно неподготовленный человек, который хочет познакомиться с технологией;</li>
						<li>недорогие — многие (если не все) пользователи согласятся, что самый лучший 3D-принтер для дома — это бюджетный, но полноценно выполняющий свои «обязанности» агрегат.</li>
					</ul>
					<table>
						<tr>
							<td>достаточно компактные</td>
							<td>даже если бытовой 3D-принтер</td>
						</tr>
						<tr>
							<td>даже если бытовой 3D-принтер</td>
							<td>пользователи согласятся</td>
						</tr>
						<tr>
							<td>недорогие — многие (если не все) пользователи согласятся, что самый лучший 3D-принтер для дома</td>
							<td>это бюджетный, но полноценно выполняющий свои «обязанности» агрегат</td>
						</tr>
					</table>
					<p>
						Приобрести подходящую модель от <a href="#">Wanhao</a> или другого бренда всегда можно в нашей компании. ABS3D — поставщик надежной, высококачественной и доступной техники для профессиональных нужд. Мы предлагаем технику для <a href="#">бизнеса</a>, проектирования, строительства, производства, а также расходные материалы к ней.
					</p>
					<h3>Бытовые 3D-принтеры: выбор и возможности</h3>
					<p>
						Лучшие 3D-принтеры для дома назвать сложно, ведь на рынке представлены разнообразные устройства, и у каждого из них — свои достоинства. Если хочется приобрести то, которое печатает при помощи нескольких материалов, стоит обратить внимание на небольшие и облегченные CubeProTrio. В них предусмотрена поддержка одновременно трех видов сырья, что актуально для проектирования, архитектурных работ — например, корпус моделей будет изготовлен из ABS-пластика, а внутренние элементы — из нейлона или PLA. По тому же принципу работает 3D-принтер для домашнего пользования AirWolf 3D HD2x — он поддерживает два вида материалов.
					</p>
					<p>
						Модели от известной марки MakerBot (например, Replicator 2) подойдут перфекционистам, которым важна высокая точность, и они готовы за это платить — не самые дешевые устройства.
					</p>
					<p>
						Продукцию компании нередко приобретают те, кому нужен 3Д-принтер для домашнего бизнеса. Компенсируют стоимость надежность, отменное качество печати, минимальный коэффициент усадки материала и расширенная рабочая область. Если нужно купить 3D-принтер для дома недорого, стоит обратить внимание на наш каталог — цена техники доступна, а возможности широки. Мы предлагаем компактные модели, которые можно брать с собой во время деловых поездок, устройства, поддерживающие работу с разными пластиками, нейлоном. Принтеры от <a href="#">Picaso</a> или любого другого представленного у нас бренда — гарантированно качественная и надежная техника.
					</p>
					<h2>Сколько стоит 3Д-принтер для дома</h2>
					<p>
						Выбирая технику (и ее стоимость), нужно ориентироваться на цели приобретения. Профессиональная модель для проектирования, архитектуры, дизайна должна иметь расширенный функционал — подобные 3Д-принтеры для дома могут обойтись в более, чем 1000 американских долларов, но быстро окупают себя. Можно найти технику от российских брендов, которые мало отличаются от западных. Например, техника <a href="#">Hercules</a> оснащена закрытыми камерами и LCD-дисплеями. Она точна, совместима с профильным и сложным ПО, производительна и доступна.
					</p>
					<p>
						Домашний 3Д-принтер — это, как правило, небольшая модель из нижнего ценового сегмента (до 400-500 долларов). Он подходит для требующих точности, но не «объемных» пространственных работ. Базовое приспособление можно приобрести менее чем за 300 долларов. При этом принтеры печатают полноценные модели, совместимы с популярными ОС, весят не больше ноутбука и весьма производительны.
					</p>
				</div>
			</main>

		</div>


	</div>
</section>




<?php include('footer.php'); ?>
