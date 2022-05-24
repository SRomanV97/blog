<header class="masthead" style="background-image: url('/blog/public/images/home.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>PHP Блог</h1>
                    <span class="subheading">блог на основе mvc фрейморка</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
			<?php else: ?>
				<?php foreach($list as $val): ?>
					<div class="post-preview">
						<a href="/blog/post/<?php echo $val['id']; ?>">
						   <h3 class ="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h3>
						   <h3><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></h3>
						</a>
						<p class="post-meta">Пост № <?php echo $val['id']; ?></p>
					</div>
					<hr>
			     <?php endforeach; ?>
                 <div class="clearfix">
                <?php echo $pagination; ?>
                 </div>
			<?php endif; ?>
        </div>
    </div>
</div>