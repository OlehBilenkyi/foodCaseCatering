<?php
// Настройка логирования ошибок
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/logs/error_log.log'); // Логирование ошибок в корректный путь
?>

<!-- navbar -->
<div class="navbar">Zamów na 20 dni lub więcej i uzyskaj rabat: 20+ dni — rabat 4%, 24+ dni — rabat 5%, 28+ dni — rabat 7%</div>
<!-- end navbar -->

<!-- header -->
<header class="header" itemscope itemtype="http://schema.org/WPHeader">
  <div class="container header__container">
    <a href="/index.php" class="header__logo">
      <img src="../assets/img/logo.png" alt="">
    </a>
    <ul class="header-menu header__menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
      <li class="header-menu__link">
        <a href="/index.php" class="header-menu__link">Strona główna</a>
      </li>
      <li class="header-menu__link">
        <a href="<?= ($_SERVER['PHP_SELF'] == '/index.php') ? '#menu' : '/index.php#menu' ?>" class="header-menu__link js-scroll-link">Zobacz menu</a>
      </li>
      <li class="header-menu__link">
        <a href="/prices/" class="header-menu__link">Nasze Ceny</a>
      </li>
      <li class="header-menu__link">
        <a href="/index2/" class="header-menu__link">Złóż zamówienie</a>
      </li>
      <li class="header-menu__link">
        <a href="/regulamin/" class="header-menu__link">Regulamin</a>
      </li>
    </ul>
    <a href="/index2/" class="btn header__btn">Złóż zamówienie</a>
    <div class="header__mobile-btn">
      <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.66667C0 1.22464 0.180612 0.800716 0.502103 0.488156C0.823594 0.175595 1.25963 0 1.71429 0H22.2857C22.7404 0 23.1764 0.175595 23.4979 0.488156C23.8194 0.800716 24 1.22464 24 1.66667C24 2.10869 23.8194 2.53262 23.4979 2.84518C23.1764 3.15774 22.7404 3.33333 22.2857 3.33333H1.71429C1.25963 3.33333 0.823594 3.15774 0.502103 2.84518C0.180612 2.53262 0 2.10869 0 1.66667ZM0 10C0 9.55797 0.180612 9.13405 0.502103 8.82149C0.823594 8.50893 1.25963 8.33333 1.71429 8.33333H22.2857C22.7404 8.33333 23.1764 8.50893 23.4979 8.82149C23.8194 9.13405 24 9.55797 24 10C24 10.442 23.8194 10.866 23.4979 11.1785C23.1764 11.4911 22.7404 11.6667 22.2857 11.6667H1.71429C1.25963 11.6667 0.823594 11.4911 0.502103 11.1785C0.180612 10.866 0 10.442 0 10ZM0 18.3333C0 17.8913 0.180612 17.4674 0.502103 17.1548C0.823594 16.8423 1.25963 16.6667 1.71429 16.6667H22.2857C22.7404 16.6667 23.1764 16.8423 23.4979 17.1548C23.8194 17.4674 24 17.8913 24 18.3333C24 18.7754 23.8194 19.1993 23.4979 19.5118C23.1764 19.8244 22.7404 20 22.2857 20H1.71429C1.25963 20 0.823594 19.8244 0.502103 19.5118C0.180612 19.1993 0 18.7754 0 18.3333Z" fill="black"/>
      </svg>
    </div>
  </div>
</header>

<script>
  // JavaScript для корректной работы ссылки на меню на всех страницах
  document.addEventListener('DOMContentLoaded', function () {
    const menuLink = document.querySelector('.js-scroll-link');
    
    if (menuLink) {
      menuLink.addEventListener('click', function (e) {
        // Проверяем, на какой странице находится пользователь
        if (window.location.pathname !== '/index.php') {
          e.preventDefault(); // Предотвращаем стандартное поведение
          // Перенаправляем на главную страницу с якорем
          window.location.href = '/index.php#menu';
        }
      });
    }
  });
</script>
