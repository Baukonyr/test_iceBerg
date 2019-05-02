<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Test_IceBerg</a>
	<?php if(!$_SESSION['auth']):?>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="/test_iceberg/auth/create">register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/test_iceberg/auth/loginForm">login</a>
  </li>
</ul>
	<?php else: ?>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="/test_iceberg/auth/logout">logout</a>
  </li>
</ul>
	<?php endif; ?>
</nav>