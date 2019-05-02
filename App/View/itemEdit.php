<?php include_once('App\View\Include\header.php'); ?>
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <form class="col-4" method="POST" action="/test_iceberg/item/update/<?php print($item['id']) ?>" enctype="multipart/form-data">
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input required type="text" minlength="5" maxlength="15" class="form-control" name="name" id="formGroupExampleInput" placeholder="length 5-15" value="<?php print($item['name']) ?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">description</label>
				<textarea required  maxlength="500" class="form-control" name="description" id="formGroupExampleInput2" placeholder="length 500"><?php print($item['name']) ?></textarea>
      </div>
			<div class="row">
				<div class="col-3 form-group">
					<label for="formGroupExampleInput3">cost</label>
					<input required type="number" maxlength="11" class="form-control" name="cost" id="formGroupExampleInput3" value="<?php print($item['cost']) ?>">
				</div>
				<div class="col-9 form-group">
					<label for="formGroupExampleInput4">file</label>
					<input type="file" class="form-control" name="file" id="formGroupExampleInput4">
				</div>
				<input type="hidden" name="fileName" value="<?php print($item['image']) ?>">
				<div class="col-9 form-groupe">
					<img src="/test_iceberg/Storage/<?php print($item['image']) ?>" width="100" height="111" alt="...">
					<p> Текущая картинка <p>
				</div>
			</div>
			<div class="form-group">
				<a href="/test_iceberg/item/index" class="btn btn-danger">Отмена</a>
				<input class="btn btn-primary" type="submit">
			</div>
    </form>   
  </div>  
</div>
<?php include_once('App\View\Include\footer.php'); ?>