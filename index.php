<?php 
  include("./php/dbconn.php");

  if(isset($mb_id)){ //세션아이디가 있을경우에만
    $mb_id = $_SESSION['ss_mb_id']; //아이디값을 저장하여 출력하게
  }

?>


<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="스카이패스, 사전좌석 배정, 항공권 예매, 수하물 안내">
  <meta name="Description" content="항공 스케쥴, 스카이패스, 할인 항공권, 여행상품 안내">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예매">
  <meta http-equiv="Title" content="대한항공">
  <title>대한항공-모바일웹(앱)</title>
  <!-- css초기화 -->
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <!-- 공통서식 -->
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <!-- 메인서식 -->
  <link rel="stylesheet" href="./css/main.css" type="text/css">
  <!-- switer서식 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



</head>
<body>
  <!-- 헤더영억 -->
  <header>
    <h1>
      <a href="index.html" title="상단로고">
        <img src="./images/txt_logo.png" alt="상단로고">
      </a>
    </h1>
    <?php
      if(isset($mb_id)){
        echo $mb_id . '님';
      }else{
        echo "<a href='login.php' title='로그인' class='login_btn'>로그인하기</a>";
      }
    ?>
  <nav id="side_menu" class="side_menu">
    <div class="inner_slide">
      <a href="#" class="close_btn" id="close_btn">닫기</a>
      <a href="#">로그아웃</a>
      <ul>
        <li><a href="#">메뉴 항목 1</a></li>
        <li><a href="#">메뉴 항목 2</a></li>
        <li><a href="#">메뉴 항목 3</a></li>
        <li><a href="#">메뉴 항목 4</a></li>
      </ul>
    </div>
  </nav>


  </header>

  <!-- 메인영역 -->
  <main>
    <a href="" class="toggle_btn" id="toggle_btn"></a>
    <a href="./php/login.php" title="로그인" class="login_btn">로그인하기</a>

    <div class="grid_container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="./images/banner01.jpg" alt="메인배너1">
            </div>
            <div class="swiper-slide">
              <img src="./images/banner02.jpg" alt="메인배너2">
            </div>
            <div class="swiper-slide">
              <img src="./images/banner03.jpg" alt="메인배너3">
            </div>
            <div class="swiper-slide">
              <img src="./images/banner04.jpg" alt="메인배너4">
            </div>
          </div>
          <div class="swiper-pagination"></div>
      </div>
      <div>
        <a href="#">
          <img src="./images/m_img01.jpg" alt="국내선 예매">
        </a>
      </div>      
      <div>
        <a href="#">
          <img src="./images/m_img02.jpg" alt="국내선 예매">
        </a>
      </div>      
      <div>
        <a href="#">
          <img src="./images/m_img03.jpg" alt="국내선 예매">
        </a>
      </div>      
      <div>
        <a href="#">
          <img src="./images/m_img04.jpg" alt="국내선 예매">
        </a>
      </div>      
      <div>
        <a href="#">
          <img src="./images/m_img05.jpg" alt="국내선 예매">
        </a>
      </div>
      
    </div>
    <div class="skypass">
      <a href="#">
        <img src="./images/skypass.jpg" alt="스카이패스">
      </a>
    </div>   

  </main>


  <!-- 푸터영역 -->
  <footer>
    <div>
      <div class="f_top">
        <a href="#">개인정보취급방침</a>
        <a href="#">pc버전보기</a>
        <a href="#">업다운로드</a>
      </div>
      <div class="f_bottom">
        <p>
          Copyrightⓒ 2022 KOREAN AIR Allrights reserved.
        </p>
        <p>
          사업자등록번호 0000-000-0000 통신판매업 신고번호 : 강저 제00-000
        </p>
      </div>
    </div>
  </footer>

  <!-- swiper.js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



  
  <script>
    let toggle_btn = document.getElementById('toggle_btn');
    let close_btn = document.querySelector('.close_btn'); 
    let side_menu = document.getElementById('side_menu');
    
    toggle_btn.addEventListener('click', function(e) {
      e.preventDefault(); // 기본 링크 동작 방지
      
      side_menu.classList.toggle('open'); // 'open' 클래스를 토글하여 사이드 메뉴를 열거나 닫음
    });
    
    close_btn.addEventListener('click', function(e) {
      e.preventDefault(); // 기본 버튼 동작 방지
      
      side_menu.classList.remove('open'); // 'open' 클래스를 제거하여 사이드 메뉴를 닫음
    });
    </script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 3000,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
  
    </script>
  
</body>
</html>
