<!DOCTYPE html>
<html lang="ru">

<?php require_once 'parts/head.tpl.php'; ?>

<body>

<div class="shadow"></div>

<?php require_once 'parts/header.tpl.php'; ?>

<div class="wrapper wrapper_mob">
<main class="main main_mob">
	<section class="section">
	<h1 class="section__h1">Паперкрафт, развертки, DIY, поделки из бумаги</h1>

<h2 class="section__article__h2"><?php echo $this->post->title; ?></h2>
    <article class="section__article">
        <div class="section__article__author">
            <i class="far fa-calendar-alt"></i>
            <time datetime="<?php echo $this->post->pubdate; ?>"><?php echo strftime('%e %B %G',strtotime($this->post->pubdate)); ?></time> опубликовал:
            <i class="fas fa-user-circle"></i> <a href="/user/?id=<?php echo $this->post->author_id; ?>" class="section__article__author__link"> <?php echo $this->post->author; ?></a>
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
                <li><i class="fas fa-eye"></i> <?php echo $this->post->incCount(); ?> </li>
                <li><i class="fas fa-folder-open"></i> <a href="/category/?id=<?php echo $this->post->cat_id; ?>"><?php echo $this->post->category; ?></a></li>
                <li><i class="fas fa-comments"></i> Комментарии: 0</li>
            </ul>
        </footer>
    </article> 

 </section>
</main>

<?php require_once 'parts/sidebar.tpl.php'; ?>

</div>

<div class="line"></div>

<?php require_once 'parts/footer.tpl.php'; ?>

</body>
</html>