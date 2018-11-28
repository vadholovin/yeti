<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <li class="promo__item promo__item--boards">
            <a class="promo__link" href="all-lots.html">Доски и лыжи</a>
        </li>
        <li class="promo__item promo__item--attachment">
            <a class="promo__link" href="all-lots.html">Крепления</a>
        </li>
        <li class="promo__item promo__item--boots">
            <a class="promo__link" href="all-lots.html">Ботинки</a>
        </li>
        <li class="promo__item promo__item--clothing">
            <a class="promo__link" href="all-lots.html">Одежда</a>
        </li>
        <li class="promo__item promo__item--tools">
            <a class="promo__link" href="all-lots.html">Инструменты</a>
        </li>
        <li class="promo__item promo__item--other">
            <a class="promo__link" href="all-lots.html">Разное</a>
        </li>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
        <select class="lots__select">
            <option>Все категории</option>
            <option>Доски и лыжи</option>
            <option>Крепления</option>
            <option>Ботинки</option>
            <option>Одежда</option>
            <option>Инструменты</option>
            <option>Разное</option>
        </select>
    </div>
    <ul class="lots__list">
        <?php foreach($data['lots'] as $lot) : ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="img/<?=$lot['image'];?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$lot['category']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.html"><?=$lot["title"]; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?=format_cost($lot['cost']); ?></span>
                        </div>
                        <div class="lot__timer timer">
                            16:54:12
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
