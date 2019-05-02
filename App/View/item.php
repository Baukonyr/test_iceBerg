<?php include_once('App\View\Include\header.php'); ?>
<?php include_once('App\View\Include\navBar.php'); ?>
<div class="container">
<div class="container" style="margin-top: 1rem;">
	<a href="/test_iceberg/item/create" class="btn btn-primary">Добавить</a>
</div>
<hr style="color: blue;">
	<div class="row">
	<?php if($itemArray !== false): ?>
		<?php foreach($itemArray as $array): ?>
		<div class="col-3" style="margin-top: 1rem;">
			<div class="card" style="width: 18rem;">
				<img src="/test_iceberg/Storage/<?php print($array['image']) ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php print($array['name']) ?></h5>
					<h5 class="card-title"><?php print($array['cost']) ?></h5>
					<p class="card-text"><?php print($array['description']) ?></p>
					<a href="/test_iceberg/item/edit/<?php print($array['id']) ?>" class="btn btn-primary">редактировать</a>
					<a href="/test_iceberg/item/destroy/<?php print($array['id']) ?>" class="btn btn-primary">Удалить</a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	<?php endif; ?>
	</div>
</div>

<?php include_once('App\View\Include\footer.php'); ?>