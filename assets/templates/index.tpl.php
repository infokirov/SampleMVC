<!DOCTYPE html>
<html lang="ru">

<?php require_once 'parts/head.tpl.php'; ?>

<body>

<div class="shadow"></div>

<?php require_once 'parts/header.tpl.php'; ?>

<div class="wrapper wrapper_mob">
<main class="main main_mob">
	<section class="section">

    <?php if (isset($this->categories)) {require_once 'parts/category_out.tpl.php';} ?>

	<h1 class="section__h1">Паперкрафт, развертки, DIY, поделки из бумаги</h1>

<?php foreach ($this->news as $item) { ?>
<h2 class="section__article__h2"><a href="/post/?id=<?php echo $item->id; ?>" class="section__article__h2__link"><?php echo $item->title; ?></a></h2>
    <article class="section__article">
        <div class="section__article__author">
            <i class="far fa-calendar-alt"></i>
            <time datetime="<?php echo $item->pubdate; ?>"><?php echo strftime('%e %B %G',strtotime($item->pubdate)); ?></time> опубликовал:
            <i class="fas fa-user-circle"></i> <a href="/user/?id=<?php echo $item->author_id; ?>" class="section__article__author__link"> <?php echo $item->author; ?></a>
        </div>
        <figure class="section__article__figure">
            <div class="section__article__figure__link"><a href="/post/?id=<?php echo $item->id; ?>"><img src="<?php echo $item->image; ?>" width="200" alt="<?php echo $item->title; ?>"></a></div>
            <figcaption><?php echo $item->title; ?></figcaption>
        </figure>
			<div class="section__article__post">
				<p><?php echo $item->description; ?></p>			
			</div>
			<a href="/post/?id=<?php echo $item->id; ?>" class="section__article__nextlink">Читать далее  →</a>
        <footer class="section__article__footer">
            <ul>
                <li><i class="fas fa-eye"></i> <?php echo $item->count; ?> </li>
                <li><i class="fas fa-folder-open"></i> <a href="/category/?id=<?php echo $item->cat_id; ?>"><?php echo $item->category; ?></a></li>
                <li><i class="fas fa-comments"></i> <a href="/post/?id=<?php echo $item->comm; ?>#comments">Комментарии: 0</a></li>
            </ul>
        </footer>
    </article>
 <?php } ?>
 

 </section>
</main>

<?php require_once 'parts/sidebar.tpl.php'; ?>

</div>

<div class="line"></div>

<?php require_once 'parts/footer.tpl.php'; ?>

</body>
</html>