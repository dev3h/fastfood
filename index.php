<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <link rel="stylesheet" href="./assets/font/css/all.min.css">
  <?php require_once ROOT . 'link-import.php' ?>
</head>

<body>
  <?php //include ROOT . 'components/header.html' 
  ?>
  <header class="tw-fixed tw-top-5 tw-w-full">
    <!-- header top -->
    <div class="tw-w-full tw-h-[60px] tw-bg-header">
      <div class="container tw-flex tw-justify-center tw-items-center tw-h-full tw-gap-5">
        <!-- top-left menu -->
        <div class="tw-h-full">
          <ul class="menu-left nav tw-flex tw-text-white tw-gap-5 tw-h-full">
            <li><a href="/fastfood" class="active">Trang chủ</a></li>
            <li><a href="!#">Về Lafka</a></li>
            <li><a href="!#">Bài viết</a></li>
            <li><a href="!#">Thực đơn</a></li>
          </ul>
        </div>
        <!-- logo -->
        <div class="banner tw-w-[200px] tw-h-[165px] tw-bg-yellow tw-mt-[80px] tw-relative">
          <a href="/fastfood" class="tw-flex tw-justify-center tw-items-center tw-h-full">
            <!-- relative path is not work -->
            <img src="https://lafka.althemist.com/fastfood/wp-content/uploads/sites/2/2019/06/logo-lafka-shop.png" alt="logo-Lafka" class="tw-w-[110px] tw-h-[110px]" />
          </a>
        </div>
        <!-- top-right menu -->
        <div class="tw-h-full">
          <ul class="menu-right nav tw-flex tw-text-white tw-gap-5 tw-h-full">
            <li><a href="#">Đặt hàng online</a></li>
            <li><a href="#">Dịch vụ ăn uống</a></li>
            <li><a href="#">Vị trí</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- menu holder -->
    <div class="tw-justify-between tw-flex tw-bg-slate-700 tw-mt-[34px] tw-p-10">
      <!-- phone number -->
      <div class="tw-flex tw-flex-col tw-justify-center tw-px-5 tw-py-[6px] tw-bg-white tw-rounded-full tw-text-gray4b">
        <span>Đặt hàng online hoặc gọi:</span>
        <span class=""><a href="tel:" class="hover:tw-text-yellow tw-transition-all tw-ease-in-out tw-duration-300"><i class="fa-solid fa-phone-flip"></i> +555 234 765 1</a></span>
      </div>
      <!-- right menu holder -->
      <div class="right-menu-holder tw-flex tw-items-center tw-px-[6px] tw-py-[6px] tw-bg-white tw-rounded-full tw-gap-3 tw-text-black333">
        <div class="menu-item" title="tài khoản"><a><i class="fa-light fa-user"></i></a></div>
        <div class="menu-item" title="yêu thích">
          <a>
            <i class="fa-light fa-heart tw-relative">
              <div class="top-0 tw-text-[8px] tw-w-4 tw-h-4 tw-absolute start-100 translate-middle badge rounded-pill bg-dark">
                0
                <span class="visually-hidden">unread messages</span>
              </div>
            </i>
          </a>
        </div>
        <div class="menu-item" title="giỏ hàng">
          <a>
            <i class="fa-light fa-bag-shopping tw-relative">
              <div class="top-0 tw-text-[8px] tw-absolute start-100 translate-middle badge rounded-pill bg-dark tw-w-4 tw-h-4">
                0
                <span class="visually-hidden">unread messages</span>
              </div>
            </i>
          </a>
        </div>
        <div class="menu-item" title="tìm kiếm">
          <i class="fa-light fa-magnifying-glass"></i>
        </div>
      </div>
    </div>
  </header>



  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <!-- JQUERY -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script>
    $('.menu-header li a').click(function() {
      $(this).addClass('active').siblings().removeClass('active');
    })
  </script>
</body>

</html>