<?php include('header.php'); ?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">3D принтеры</h1>
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
							<label class="style-checkbox style-checkbox--disabled">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Picaso 3D</span>
							</label>
							<label class="style-checkbox">
								<input type="checkbox" name="filter_1" value="XXX">
								<span>Zenit</span>
							</label>
							<label class="style-checkbox style-checkbox--disabled">
								<input type="checkbox" name="filter_1" value="XXX">
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
						<span class="filter__title">Min толщина слоя (микрон)</span>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер Picaso Designer X PRO</a>
								<span class="product-preview__price">
								<span class="price--old">6 590 000<span class="rub">c</span></span>
								<span>5 555 590<span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">
								<span class="price--old">590 000 <span class="rub">c</span></span>
								<span>555 590 <span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер Picaso Designer X PRO</a>
								<span class="product-preview__price">10 590<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер Picaso Designer X PRO</a>
								<span class="product-preview__price">
								<span class="price--old">6 590 000<span class="rub">c</span></span>
								<span>5 555 590<span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">
								<span class="price--old">590 000 <span class="rub">c</span></span>
								<span>555 590 <span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер Picaso Designer X PRO</a>
								<span class="product-preview__price">10 590<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер Picaso Designer X PRO</a>
								<span class="product-preview__price">
								<span class="price--old">6 590 000<span class="rub">c</span></span>
								<span>5 555 590<span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">
								<span class="price--old">590 000 <span class="rub">c</span></span>
								<span>555 590 <span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер Picaso Designer X PRO</a>
								<span class="product-preview__price">10 590<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер Picaso Designer X PRO</a>
								<span class="product-preview__price">
								<span class="price--old">6 590 000<span class="rub">c</span></span>
								<span>5 555 590<span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">
								<span class="price--old">590 000 <span class="rub">c</span></span>
								<span>555 590 <span class="rub">c</span></span>
							</span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер Picaso Designer X PRO</a>
								<span class="product-preview__price">10 590<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
								<a href="/catalog-detail.php" class="h3 product-preview__title">3D принтер</a>
								<span class="product-preview__price">180 000<span class="rub">c</span></span>
							</main>
							<footer>
								<button class="btn btn--red">В корзину</button>
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
			</main>

		</div>


	</div>
</section>




<?php include('footer.php'); ?>
