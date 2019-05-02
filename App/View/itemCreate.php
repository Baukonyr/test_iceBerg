<?php include_once('App\View\Include\header.php'); ?>
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <form class="col-4" method="POST" action="/test_iceberg/item/store" enctype="multipart/form-data">
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input required type="text" minlength="5" maxlength="15" class="form-control" name="name" id="formGroupExampleInput" placeholder="length 5-15">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">description</label>
				<textarea required  maxlength="500" class="form-control" name="description" id="formGroupExampleInput2" placeholder="length 500"></textarea>
      </div>
			<div class="row">
				<div class="col-3 form-group">
					<label for="formGroupExampleInput3">cost</label>
					<input required type="number" maxlength="11" class="form-control" name="cost" id="formGroupExampleInput3">
				</div>
				<div class="col-9 form-group">
					<label for="formGroupExampleInput4">file</label>
					<input required type="file" class="form-control" name="file" id="formGroupExampleInput4">
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