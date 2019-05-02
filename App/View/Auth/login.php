<?php include_once('App\View\Include\header.php'); ?>
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <form class="col-4" method="POST" action="/test_iceberg/auth/login">
				<?php if($_SESSION['massage']): ?>
					<small><?php echo $_SESSION['massage']; ?>
				<?php endif; ?>
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input required type="text" minlength="5" maxlength="15" class="form-control" name="name" id="formGroupExampleInput" placeholder="length 5-15">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Password</label>
        <input required type="password" minlength="5" maxlength="30" class="form-control" name="password" id="formGroupExampleInput2" placeholder="length 5-30">
      </div>
			<div class="form-group">
				<a href="/test_iceberg/" class="btn btn-danger">Отмена</a>
				<input class="btn btn-primary" type="submit">
			</div>
    </form>   
  </div>  
</div>
<?php include_once('App\View\Include\footer.php'); ?>