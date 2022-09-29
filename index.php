<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <?php require_once ROOT . 'link-import.php' ?>
</head>

<body>
  <?php //include ROOT . 'components/header.html' 
  ?>
  <header>
    <!-- header top -->
    <div class="tw-w-full tw-fixed tw-h-[60px] tw-bg-header tw-top-5">
      <div class="container tw-flex tw-justify-between tw-items-center tw-h-full tw-px-28">
        <!-- top-left menu -->
        <div class="tw-h-full">
          <ul class="menu-left nav tw-flex tw-text-white tw-gap-5 tw-h-full">
            <li><a href="!#" class="active">Trang chủ</a></li>
            <li><a href="!#">Về Lafka</a></li>
            <li><a href="!#">Bài viết</a></li>
            <li><a href="!#">Thực đơn</a></li>
          </ul>
        </div>
        <!-- logo -->
        <div class="banner tw-w-[200px] tw-h-[165px] tw-absolute tw-bg-yellow tw-top-[calc(100%+10px)] tw-left-1/2 -tw-translate-x-1/2 -tw-translate-y-1/2">
          <a href="#!" class="tw-flex tw-justify-center tw-items-center tw-h-full">
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
    <div class="tw-fixed tw-justify-between tw-flex tw-bg-slate-700">
      <!-- phone number -->
      <div>
        <span>Đặt hàng online hoặc gọi:</span>
        <span><a href="tel:"><i class="fa-solid fa-phone-flip"></i> +555 234 765 1</a></span>
      </div>
      <!-- right menu holder -->
      <div></div>
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