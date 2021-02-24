<h1 class="section__h1">Разделы сайта паперкрафт, творчество, мастерклассы</h1>

    <?php foreach ($this->categories as $item) { ?>
		<figure class="section__figure">
			<div class="section__figure__link">
				<a href="/category/?id=<?php echo $item->id; ?>">
					<img src="<?php echo $item->image; ?>" alt="<?php echo $item->cat_name; ?>">
				</a>
			</div>
			<figcaption><a href="/category/?id=<?php echo $item->id; ?>"><?php echo $item->cat_name; ?></a></figcaption>
		</figure>
 <?php } ?>