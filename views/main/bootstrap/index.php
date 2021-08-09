
<?php echo $this->managelayout->add_js("/assets/js/swiper.min.js"); ?>
<?php echo $this->managelayout->add_css("https://unpkg.com/swiper/swiper-bundle.min.css"); ?>
<?php echo $this->managelayout->add_css("/assets/css/common.css"); ?>

<body>
    <div class="wrap">
        <div class="d_main">
            <!-- No.1 반려동물 맞춤 제품 추천 플랫폼 , 댕구루 -->
            <section class="sect_title">
                <div class="inner_center">
                    <h1 class="title_logo"><img src="/assets/images/logo-horizontal.svg" alt="댕구루 로고" class="img"></h1>
                    <div class="title_box">
                        <div class="title01">댕구루</div>
                        <div class="title05">No.1 반려동물 맞춤 제품 추천 플랫폼</div>
                    </div>
                    <div class="txt06">내 반려견에게 꼭 맞는 믿을 수 있는 제품을 <br>빅데이터를 통해 맞춤 추천해드립니다.</div>
                </div>
                <span class="bg_round bg_round01"></span>
                <span class="bg_round bg_round02"></span>
            </section>
            <!-- 타이틀 다운로드 -->
            <section class="sect_title_download">
                <div class="inner_center">
                    <div class="download_btn_box">
                        <h2 class="title06">
                            내 반려견의 맞춤 아이템이 궁금하다면 
                            <br> 지금 바로 댕구루를 만나보세요! 
                        </h2>
                        <a href="" class="d_btn btn_img"><img src="/assets/images/btn-googleplay-accent.svg" alt="구글플레이에서 앱다운받기" class="img"></a>
                    </div>
                    <div class="link_box">
                        <a href="#sectUserIos" class="link" onclick="scrollSect(this)">
                            아이폰을 사용하세요?
                            <img src="/assets/images/icon-angle-right.svg" alt=">" class="icon">
                        </a>
                    </div>
                    <div class="img_mobile"></div>
                </div>
            </section>
            <!-- 스토어 브랜드 용품 개수 -->
            <section class="sect_numbers">
                <div class="inner_center">
                    <h2 class="blind">댕구루 입점 스토어, 브랜드, 용품 개수</h2>
                    <ul class="numbers_list clearfix">
                        <li class="numbers_item">
                            <div class="number_tit">스토어</div>
                            <div class="number js-counter" data-count="300">0</div>
                            <!-- data-count :: 실제 값 -->
                        </li>
                        <li class="numbers_item">
                            <div class="number_tit">브랜드</div>
                            <div class="number js-counter" data-count="1000">0</div>
                        </li>
                        <li class="numbers_item">
                            <div class="number_tit">용 품</div>
                            <div class="number js-counter" data-count="60000">0</div>
                        </li>
                    </ul>
                    <div class="numbers_date">2020.05 기준</div>
                </div>
            </section>
            <!-- 작고 소중한 너를 위해 사랑한다면, 댕구루 -->
            <section class="sect_denguru fadein_ani">
                <div class="inner_center clearfix">
                    <div class="icon_box">
                    </div>
                    <div class="txt_box">
                    	<h2 class="title02 slide_right_ready">작고 소중한 너를 위해 <br>사랑한다면, <span class="emph_bold">댕구루</span></h2>
                    	<ul class="txt_list">
                    	    <li class="txt_item slide_right_ready">내 반려견에게 꼭 맞는 믿을 수 있는 제품을 <span class="emph_bold">빅데이터를 통해 맞춤 추천!</span></li>
                    	    <li class="txt_item slide_right_ready">나의 반려동물과 <span class="emph_bold">같은 품종, 같은 조건의 리뷰만</span> 콕콕 선택해서 확인!</li>
                    	    <li class="txt_item slide_right_ready">각각 다른 쇼핑몰에서 구매한 목록의 <span class="emph_bold">주문배송 현황을 한 눈에 확인</span> 할 수 있고!</li>
                    	    <li class="txt_item slide_right_ready">자주가는 쇼핑몰, 찜한 상품을 한 눈에 모아 볼 수 있는 <span class="emph_bold">취향 저격 서비스!</span></li>
                    	</ul>
                    </div>
                </div>
            </section>
            <!-- 댕구루 서비스 - 마이펫 맞춤 / 스토어 즐겨찾기 / 찜한 아이템 / 주문 배송을 한눈에 -->
            <section class="sect_service_tab">
                <h2 class="blind">댕구루 서비스</h2>
                <div class="service_tab_list swiper-pagination">
                    <!-- swiper로 생성 -->
                    <!-- <button type="button" class="service_tab swiper-pagination-bullet-active">마이펫 맞춤</button>
                    <button type="button" class="service_tab">스토어 즐겨찾기</button>
                    <button type="button" class="service_tab">찜한 아이템</button>
                    <button type="button" class="service_tab">주문/배송을 한눈에</button> -->
                </div>
                <div class="service_panel_container inner_center clearfix">
                    <div class="service_txt_box ">
                        <ul class="service_txt_list">
                            <!-- 마이펫 맞춤 -->
                            <li class="service_txt show">
                                <div class="title02">
                                    내 반려동물을 위한 <br>
                                    맞춤 아이템 추천
                                </div>
                                <div class="txt03">
                                    마이펫 프로필 등록으로 <br class="pc">
                                    나의 반려동물에게 <br class="mo">꼭 맞는 맞춤 아이템을 추천해 드립니다.
                                </div>
                                <div class="txt03">
                                    우리 아이만의 프로필을 꾸며보세요! <br>
                                    견종별, 특징별 취향저격 아이템을 <br class="mo_sm">확인할 수 있습니다.
                                </div>
                            </li>
                            <!-- 스토어 즐겨찾기 -->
                            <li class="service_txt">
                                <div class="title02">
                                    내 반려동물에게 딱 맞는 <br>
                                    취향저격 스토어 즐겨찾기
                                </div>
                                <div class="txt03">
                                    300개 이상 반려동물 쇼핑몰 & 1000개 이상 <br class="mo">브랜드가 <br class="pc">
                                    매일 업데이트됩니다.
                                </div>
                                <div class="txt03">
                                    내 반려동물에게 딱 맞는 나만의 취향저격 스토어 담기! <br>
                                    실시간으로 업데이트되는 신상품을 가장 빠르게 확인하세요!
                                </div>
                            </li>
                            <!-- 찜한 아이템 -->
                            <li class="service_txt">
                                <div class="title02">
                                    여러 스토어에서 찜한 <br> 상품들을
                                    모아모아 저장!
                                </div>
                                <div class="txt03">
                                    내 반려동물을 위한 상품만 모아서 저장!
                                </div>
                                <div class="txt03">
                                    여기저기에서 찜한 쇼핑리스트를 <br class="mo_sm">한 눈에 편리하게 확인 해 보세요!
                                </div>
                                <div class="txt03">
                                    어떤 걸 살지 고민될 때엔 찜! 해놓고 비교 해 보세요.
                                </div>
                            </li>
                            <!-- 주문/배송을 한눈에 -->
                            <li class="service_txt">
                                <div class="title02">
                                    여러 스토어에서 구매해도 <br>
                                    주문 배송 현황을 한 눈에!
                                </div>
                                <div class="txt03">
                                    매번 여기저기 스토어에 들어가서 <br>
                                    주문 배송현황 확인하느라 힘드셨죠? 
                                </div>
                                <div class="txt03">
                                    이젠 모든 주문 배송현황을 댕구루에서 확인하세요!
                                </div>
                                <div class="txt03">
                                    댕구루에서는 나의 주문 배송현황을 <br class="mo_sm">한 눈에 확인할 수 있습니다.
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="service_phone_box">
                        <div class="service_phone_screen_box swiper-container">
                            <ul class="service_phone_screen_list swiper-wrapper">
                                <li class="service_phone_screen swiper-slide"><img src="/assets/images/mobile-ex01.png" alt="예시 화면" class="img"></li>
                                <li class="service_phone_screen swiper-slide"><img src="/assets/images/mobile-ex02.png" alt="예시 화면" class="img"></li>
                                <li class="service_phone_screen swiper-slide"><img src="/assets/images/mobile-ex03.png" alt="예시 화면" class="img"></li>
                                <li class="service_phone_screen swiper-slide"><img src="/assets/images/mobile-ex04.png" alt="예시 화면" class="img"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="bg_img bg_ball"></div>
                <div class="bg_img bg_bone"></div>
                <div class="bg_img bg_paw01"></div>
                <div class="bg_img bg_paw02"></div>
                <div class="bg_img bg_toy"></div>
            </section>
            <!-- 마케팅 -->
            <section class="sect_marketing">
                <h2 class="title03">반려동물 용품 마케팅 시작은 <br class="mo_sm">댕구루에서</h2>
                <div class="txt03">댕구루 광고를 통해 반려동물 용품 고관여 유저에게 <br class="mo_sm">자사제품을 알리세요.</div>
                <ul class="icons_list clearfix">
                    <li class="icon_item fadein_ani_ready">
                        <div class="icon_box"><img src="/assets/images/icon-macketing01.png" alt="아이콘" class="icon"></div>
                        <div class="icon_txt">타겟에 효과적으로 도달</div>
                    </li>
                    <li class="icon_item fadein_ani_ready">
                        <div class="icon_box"><img src="/assets/images/icon-macketing02.png" alt="아이콘" class="icon"></div>
                        <div class="icon_txt">효과적인 제품 브랜딩</div>
                    </li>
                    <li class="icon_item fadein_ani_ready">
                        <div class="icon_box"><img src="/assets/images/icon-macketing03.png" alt="아이콘" class="icon"></div>
                        <div class="icon_txt">마케팅 방향성 수립</div>
                    </li>
                </ul>
                <div class="container_contact">
                    <div class="inner_center slide_left_ready">
                        <h3 class="blind">광고 제휴 문의</h3>
                        <div class="txt04">
                            댕구루 광고 상품 관련 문의사항이 있는 경우,<br>
                            광고제휴 문의 폼을 작성해 주시면 담당자가 <br class="mo">확인 후 24시간 내로 답변 드리겠습니다.
                        </div>
                        <dl class="contact_email_list">
                            <div class="list_box clearfix">
                                <dt class="contact_email_title">파트너 광고제휴문의</dt>
                                <dd class="contact_email">partner@denguru.kr</dd>
                            </div>
                            <div class="list_box clearfix">
                                <dt class="contact_email_title">고객문의</dt>
                                <dd class="contact_email">support@denguru.kr</dd>
                            </div>
                        </dl>
                        <a href="contact_form.html" target="_blank" class="d_btn btn_accent">
                            광고 제휴 문의 <img src="/assets/images/icon-angle-right-white.svg" alt=">" class="icon">
                        </a>
                    </div>
                </div>
            </section>
            <!-- 아이폰을 사용하세요? -->
            <section class="sect_user_ios" id="sectUserIos">
                <div class="inner_center">
                	<div class="txt_box slide_right_ready">
                        <h2 class="title03">아이폰을 사용하세요?</h2>
                        <div class="txt04">
                            현재 iOS 앱은 열심히 개발중입니다. <br>
                            미리 사전 신청하고 앱 출시 소식을 받아보세요.
                        </div>
                        <a href="https://forms.gle/9KRNmgefKoaMdJgt8" target="_blank" class="d_btn btn_accent">
                            iOS 사전신청하기 <img src="/assets/images/icon-angle-right-white.svg" alt=">" class="icon">
                        </a>
                    </div>
                    <div class="img_developer"></div>
                </div>
            </section>
            <section class="sect_download">
                <div class="inner_center download_txt_box">
                    <h2 class="title04">No.1 반려동물<br class="mo"> 맞춤제품 추천 플랫폼,<br class="mo_sm"> 댕구루</h2>
                    <div class="txt05">지금 다운로드 받으세요</div>
                    <a href="" class="d_btn btn_img"><img src="/assets/images/btn-googleplay-white.svg" alt="구글플레이에서 앱다운받기" class="img"></a>
                </div>
            </section>
        </div>
        <!-- footer -->
        <footer class="footer">
            <div class="inner_center">
                <div class="f_brand">DENGURU</div>
                <div class="f_company_info_box">
                    <div class="row01">
                        <span class="f_company_info">하이애드원</span>
                        <span class="f_company_info">서울특별시 금천구 가산디지털1로 128 STX-V 타워 1206~1208호</span>
                        <span class="f_company_info">사업자등록번호 101-86-15488</span>
                    </div>
                    <div class="row02">
                        <span class="f_company_info">대표 조 성 진</span>
                        <!-- <span class="f_company_info">대표번호 1234-1234</span><br class="mo"> -->
                        <span class="f_company_info"><a href="mailto:support@denguru.kr" class="f_link">문의하기</a></span>
                        <span class="f_company_info"><a href="contact_form.html" target="_blank" class="f_link">광고/제휴문의</a></span>
                    </div>
                </div>
                <div class="f_sns_box">
                    <a href="https://www.facebook.com/%EB%8C%95%EA%B5%AC%EB%A5%B4-102419277912891/" target="_blank" class="btn_img btn_sns btn_facebook"><img src="/assets/images/logo-facebook.svg" alt="댕구루 페이스북으로 가기" class="img"></a>   
                    <a href="https://www.instagram.com/denguru.official/" target="_blank" class="btn_img btn_sns btn_instagram"><img src="/assets/images/logo-instagram.svg" alt="댕구루 인스타그램으로 가기" class="img"></a>   
                </div>
                <div class="f_copyright">
                    © HIADONE. ALL RIGHTS RESERVED
                </div>
            </div>
        </footer>
    </div>

    <script>
        // 숫자 자리수 콤마 넣기
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        //.sect_numbers 스토어 브랜드 용품 count
        
        var counter_chk = 0;

        function counterAni(){
            $('.js-counter').each(function(index) {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                if (counter_chk <= index){
                    counter_chk++ ;

                    $({ countNum: $this.text()}).animate({
                        countNum: countTo
                    },
                    {
                        duration: 2500,
                        easing:'linear',
                        step: function() {
                            $this.text(numberWithCommas(Math.floor(this.countNum)));
                        },
                        complete: function() {
                            $this.text(numberWithCommas(this.countNum));
                        }
                    });  
                }
            });
        }

        // 아이폰을 사용하세요? scroll animation
        function scrollSect(v){
            event.preventDefault();
            
            var sectId = $(v).attr('href');
            var scrollName = $(sectId).offset().top;

            $('html,body').animate({
                scrollTop: scrollName 
            }, 400, 'swing');

            return false;
        };

        $(window).scroll(function() {
            //스크롤시 요소 fadeIn animation
            $(".fadein_ani_ready, .slide_right_ready, .slide_left_ready").each(function() {
                paragraphMiddle = $(this).offset().top + (0.4 * $(this).height());
                windowBottom = $(window).scrollTop() + $(window).height();

                if (paragraphMiddle < windowBottom) {
                    $(this).addClass("fadein_ani");
                }
            });

            // swiper 화면에 나타난 이후에 autoplay 작동
            var paragraphMiddle02 = $(".service_panel_container").offset().top + (0.5 * $(".service_panel_container").height());
            var windowBottom02 = $(window).scrollTop() + $(window).height();

            if (paragraphMiddle02 < windowBottom02) {
                swiperService.autoplay.start();
            }

            var paragraphCount = $(".numbers_list").offset().top + (0.25 * $(".service_panel_container").height());

            if(paragraphCount < windowBottom02) {
                counterAni();
            }
        });
        $(window).scroll();
        // 서비스 탭 swiper
        var swiperService = new Swiper('.service_phone_screen_box', {
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            speed: 800,
            spaceBetween: 0,
            cssMode: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    var tabText = ['마이펫 <br class="mo_sm">맞춤','스토어 <br class="mo_sm">즐겨찾기','찜한 <br class="mo_sm">아이템','주문/배송을 <br class="mo_sm">한눈에'];
                    return '<button type="button" class="service_tab ' + className + '">' + tabText[index] + '</button>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        // swiper 서비스 텍스트 부분 효과
        swiperService.on('slideChange', function () {
            $('.service_txt').removeClass('show');
            $('.service_txt:nth-child(' + (this.activeIndex + 1) + ')').addClass('show');
        });
        swiperService.autoplay.stop(); //autoplay stop
    </script>
</body>
</html>