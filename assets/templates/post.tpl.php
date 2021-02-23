<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Паперкрафт, развертки, DIY, поделки из бумаги</title>
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a8c7e60bcc.js" crossorigin="anonymous"></script>
</head>

<body>

<div class="shadow"></div>
<header class="header">
	<div class="header__navwrap">
	<nav class="header__nav">
		<a href="/" class="header__nav__item header__nav__item__logo"><img src="/assets/img/logo.png" alt="Papercraft"></a>
		<a href="/post.php" class="header__nav__item">Блог</a>
		<a href="/category.php" class="header__nav__item">Разделы</a>
		<a href="/" class="header__nav__item">Downloads</a>
		<a href="/" class="header__nav__item">Контакты</a>
	</nav>
	<div class="header__right">Papercraft - современное оригами</div>
	</div>
</header>
<div class="wrapper wrapper_mob">
<main class="main main_mob">
	<section class="section">
	<h1 class="section__h1">Паперкрафт, развертки, DIY, поделки из бумаги</h1>

<h2 class="section__article__h2"><?php echo $this->post->title; ?></h2>
    <article class="section__article">
        <div class="section__article__author">
            <i class="far fa-calendar-alt"></i>
            <time datetime="<?php echo $this->post->pubdate; ?>"><?php echo strftime('%e %B %G',strtotime($this->post->pubdate)); ?></time> опубликовал:
            <i class="fas fa-user-circle"></i> <a href="user.php?id=<?php echo $this->post->author_id; ?>" class="section__article__author__link"> <?php echo $this->post->author_id; ?></a>
        </div>
        <figure class="section__article__figure">
            <div class="section__article__figure__link"><img src="<?php echo $this->post->image; ?>" width="200" alt="<?php echo $this->post->title; ?>"></div>
            <figcaption><?php echo $this->post->title; ?></figcaption>
        </figure>
			<div class="section__article__post">
				<p><?php echo $this->post->content; ?></p>			
			</div>
        <footer class="section__article__footer">
            <ul>
                <li><i class="fas fa-eye"></i> 0 </li>
                <li><i class="fas fa-folder-open"></i> <a href="category.php?id=<?php echo $this->post->cat_id; ?>"><?php echo $this->post->cat_id; ?></a></li>
                <li><i class="fas fa-comments"></i> <a href="post.php?id=<?php echo $this->post->id; ?>#comments">Комментарии: 0</a></li>
            </ul>
        </footer>
    </article>

 

 </section>
</main>

<aside class="aside aside_mob">
    <div class="aside__blockwrap">
        <div class="aside__block__title">Авторизация:</div>
        <div class="aside__block__content">
            <div class="aside__block__content__mess"> </div><form method="POST" name="f_login" action="/" enctype="multipart/form-data">
    <div class="form__wrap__item">
        <label for="f_login">Логин:</label>
        <input type="text" id="f_login" name="f_login" required class="wid_60">
    </div>
    <div class="form__wrap__item">
        <label for="f_passw">Пароль:</label>
        <input type="password" id="f_passw" name="f_passw" required class="wid_60">
    </div>
    <div class="form__wrap__item">
        <input name="f_send" type="submit" value="Войти">
    </div>
</form>        </div>
    </div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Топ просмотров</div>
        <div class="aside__block__content"><a href="post.php?id=2"><img src="/assets/img/pic2.jpg" width="300" alt="Новогодний олень"></a></div>
	</div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Скидка дня %</div>
        <div class="aside__block__content"><a href="post.php?id=1"><img src="/assets/img/pic1.jpg" width="300" alt="Голова оленя: papercraft шаблон для скачивания и пошаговая инструкция"></a></div>
	</div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Категории</div>
		<div class="aside__block__content"></div>
	</div>
</aside>
</div>

<div class="line"></div>

<footer class="footer">
	<div class="footer__logo">
		<a href="/"><img src="/assets/img/logo.png" alt="Papercraft"></a>
	</div>
	<div class="footer__text">
		<ul>
			<li class="footer__text__list__item"><i class="fas fa-map-marked-alt"></i><a href="https://yandex.ru/maps/-/CCUAJMhHHC" target="_blank">610000, РФ, г. Киров, ул. Молодой Гвардии, 82</a></li>
			<li class="footer__text__list__item"><i class="fas fa-phone-square"></i><a href="tel:+88001509999">8-800-150-99-99</a></li>
			<li class="footer__text__list__item"><i class="fas fa-envelope"></i><a href="mailto:info@papercraft.com">info@papercraft.com</a></li>
		</ul>
	</div>
	<div class="footer__copyr">
		PaperCraft.com © 2021 | <a href="">Политика защиты персональных данных</a>
	</div>
</footer>
<script src="_js/script.js"></script>
</body>
</html>