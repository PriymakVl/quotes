<?php
  $url = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
  $controller = explode('/', $url)[1];

  $search_name = ''; $placeholder = '';
  if ($controller == 'book') {
    $search_name = 'title';
    $placeholder = 'Найти книгу';
  }
  else if ($controller == 'author') {
    $search_name = 'last_name'; 
    $placeholder = 'Найти автора';
  }
?>
<style>
    .nav-link {
        margin-right: 30px;
    }
</style>

  <nav class="navbar navbar-expand-sm  navbar-light bg-light"> <!-- bg-dark navbar-dark -->
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav mx-auto">
    <li class="nav-item">
      <a class="nav-link" href="/quote/list">Цитаты</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/author/list">Авторы</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/book/list">Книги</a>
    </li>

    <!-- Dropdown -->
<!--     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li> -->
  </ul>

  <? if ($search_name): ?>
    <form class="form-inline navbar-right" action="/<?=$controller?>/search">
        <input class="form-control mr-sm-2" type="text" name="<?=$search_name?>" placeholder="<?=$placeholder?>">
        <button class="btn btn-outline-success" type="submit">Поиск</button>
    </form>
  <? endif; ?>
</nav> 

