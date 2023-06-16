<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
?>


<section class="sec_top main">

<article class="mainVisual">
    <!--메인 슬라이드 관리자 등록입니다.-->
    <div class="contentBox">
        <div class="inner">
            <div class="content">
                <h1>
                    MONOLITH <span class="green">GREEN</span><br/>
                    TECHNOLOGY
                </h1>
                <p>
                    MONOLITH SOLUTION
                </p>
            </div>
            <ul class="btnWrap">
                <li>
                    <img src="<?=G5_IMG_URL ?>/main-slide-arrow.svg" alt="nextBtn" class="nextBtn" />
                </li>
                <li>
                    <img src="<?=G5_IMG_URL ?>/main-slide-arrow2.svg" alt="prevBtn" class="prevBtn" />
                </li>
            </ul>
        </div>
    </div>

    <div class="swiper slideBox">
        <!-- 참고 : slide갯수 최대 4개까지 지정할 수 있게 해주세요!! -->
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="filter"></div>
            <div class="imgBox img01"></div> <!--imgBox에 이미지를 Style로 넣어주세요.-->
          </div>

          <div class="swiper-slide">
            <div class="filter"></div>
            <div class="imgBox img02"></div> <!--imgBox에 이미지를 Style로 넣어주세요.-->
          </div>

          <div class="swiper-slide">
            <div class="filter"></div>
            <div class="imgBox img03"></div> <!--imgBox에 이미지를 Style로 넣어주세요.-->
          </div>
          
          <div class="swiper-slide">
            <div class="filter"></div>
            <div class="imgBox img04"></div> <!--imgBox에 이미지를 Style로 넣어주세요.-->
          </div>
        </div>
        <div class="swiper-pagination"></div>

    </div>

</article>
<article class="globalArti">
    <ul class="haflContainer ani">

        <li>
            <div class="s_inner">
                <img src="<?=G5_IMG_URL ?>/header-logo.svg" class="logo" alt="모노리스" />
                <h2>
                    최고의 기술과 솔루션으로<br/>
                    지속 가능한 <b>미래를<br/>
                    선도하는 글로벌 기업</b>
                </h2>
                <a href="<?=G5_BBS_URL;?>/content.php?co_id=sub01_1" class="moreBtn">
                    <span>View More</span>
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.00651 13.3359L7.10938 7.23275L1.00651 1.12988" stroke="#7F7F7F" stroke-width="2"/>
                    </svg>
                </a>
            </div>  
        </li>

        <li>
            <div class="swiper globalSlide">
                <div class="swiper-wrapper">
                    
                  <div class="swiper-slide">
                    <div class="imgBox img01"></div>
                  </div>

                  <div class="swiper-slide">
                    <div class="imgBox img02"></div>
                  </div>

                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div class="btnWrap">
                <p class="label"><b>친환경기술개발</b> (Ecofriendly Technology Development)</p>
                <ul>
                    <li class="prevBtn">
                        <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.00651 13.3359L7.10938 7.23275L1.00651 1.12988" stroke="#FFFFFF" stroke-width="2"/>
                        </svg>
                    </li>
                    <li class="nextBtn">
                        <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.00651 13.3359L7.10938 7.23275L1.00651 1.12988" stroke="#FFFFFF" stroke-width="2"/>
                        </svg>
                    </li>
                    
                </ul>
            </div>
            <p class="mo_label"><b>친환경기술개발</b> (Ecofriendly Technology Development)</p>
        </li>
        
    </ul>
</article>
<article class="naviArti ">
    <ul class="halfNavi">
        <li>
            <a href="<?=G5_BBS_URL;?>/content.php?co_id=sub02_1">
                <div class="item ani">
                    <div class="bgBox"></div>
                    <div class="content">
                        <h2>친환경 소재 기술</h2>
                        <p class="list">친환경 플라스틱 소재 폴리부텐-1/폴리올레핀엘라스토머(PB-1/POE) 및 PEF생산기술</p>
                        <p class="list">니켈 원광석으로부터 이차전지용 니켈 제련 기술</p>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="<?=G5_BBS_URL;?>/content.php?co_id=sub02_2">
                <div class="item ani">
                    <div class="bgBox"></div>
                    <div class="content">
                        <h2>산업폐기물 <br/>재자원화 기술</h2>
                        <p class="list">정유사 탈황용 사용후 촉매로부터 유가금속(Mo,V, Ni, Al등) 회수기술</p>
                        <p class="list">제철소 Fe-Ni 슬래그로 부터 수산화마그네슘 회수 및 이를 이용한 이산화탄소 고정/자원화 기술</p>
                        <p class="list">유독 폐기물이 없는 Clean Technology</p>
                    </div>
                </div>
            </a>
            <a  href="<?=G5_BBS_URL;?>/content.php?co_id=sub02_3">
                <div class="item ani">
                    <div class="bgBox"></div>
                    <div class="content">
                        <h2>전자 부품 소재 기술</h2>
                        <p class="list">
                            전기차, 태양광, UPS, MEMORY BACK-UP용 <br/>초저 저항(Ultra low impedance) <br/>슈퍼커패시터(EDLC) 전극 및 제품 제조기술
                        </p>
                        <p class="list">
                            친환경 산업에 발맞춘 연료전지용 고전도성 <br/>분리판(Bipolar plate) 제조기술
                        </p>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</article>
<article class="noticeArti">
    <div class="bottom_bar"></div>
    <ul class="haflContainer ani">
        <li>
            <div class="s_inner">
                <img src="<?=G5_IMG_URL ?>/header-logo.svg" class="logo" alt="모노리스" />
                <h2>
                    모노리스 <b>공지사항</b>
                </h2>
                <p class="produce">모노리스의 공지사항, 정보등을 알려드립니다. </p>
                <a href="<?=get_pretty_url('sub03_1'); ?>" class="moreBtn">
                    <span>View More</span>
                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.00651 13.3359L7.10938 7.23275L1.00651 1.12988" stroke="#7F7F7F" stroke-width="2"/>
                    </svg>
                </a>
            </div>  
        </li>
        <li>
            <div class="swiper noticeSlide">

                <div class="swiper-wrapper">
                    <?php
                        $sql = "select * from g5_write_sub03_1 order by `wr_id` desc limit 10";
                        $result = sql_query($sql);
                        for($i=0; $row=sql_fetch_array($result); $i++) {
                        $thumb = get_list_thumbnail('sub03_1', $row['wr_id'], 1, 1, false, true);    
                    ?>
                    <div class="swiper-slide">
                        <a href="<?=get_pretty_url('sub03_1',$row['wr_id']); ?>">
                            <div class="item">
                                <div class="imgBox"style="background-image: url('<?=$thumb['ori']; ?>');"></div>
                                <div class="contentBox">
                                    <p class="title">
                                       <?=strip_tags($row['wr_subject']) ?>
                                    </p>
                                    <ul class="info">
                                        <!-- <li class="green">대외행사</li> -->
                                        <li><?php echo date("y.m.d", strtotime($row['wr_datetime'])) ?></li>
                                        <!-- 23.01.01 -->
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                </div>


              </div>
        </li>
    </ul>
</article>
<!-- <article class="companionArti ani">
    <div class="inner">
        <p class="en">Corporation</p>
        <h2>모노리스 <b>첨단 기술과 동행</b>하세요</h2>
        <ul>
            <li>
                <span class="number" data-count="2020">0</span>
                <span class="title">창립일</span>
            </li>
            <li>
                <span class="number" data-count="102">0</span>
                <span class="title">매출액</span>
            </li>
            <li>
                <span class="number" data-count="1053">0</span>
                <span class="title">구성원 수</span>
            </li>
        </ul>
    </div>
</article> -->
<article class="companyArti">
    <ul class="layoutList">
        <li class="green ani">
            <div class="wrap">
                <p class="label">E-Mail</p>
                <p class="content">cjakrcn@mono-biz.com</p>
            </div>
            <div class="wrap">
                <p class="label">Fax</p>
                <p class="content">02-575-1842</p>
            </div>
        </li>
        <li class="dark-blue ani">
            <div class="wrap">
                <p class="label">Phone</p>
                <p class="content">02-575-1842</p>
                <p class="discription">
                    영업시간 10:00 - 18:00 [월-금]
                </p>
            </div>
        </li>
        <li class="gray ani">
            <p class="t1">오시는길</p>
            <ul class="halfList">
                <li>
                    <p class="t2">본사</p>
                    <p class="t3">전남 광양시 산업로 283(광양 태인 국가 산업단지)</p>
                </li>
                <li>
                    <p class="t2">서울 사무소</p>
                    <p class="t3">서울시 중구 중림로 50-1 스카이천사빌딩 14층</p>
                </li>
            </ul>
            <ul class="btnWrap">
                <li>
                    <a href="<?=G5_URL;?>/download/Technical-Introduction_Korea.pdf" download class="downloadBtn">
                        기술 및 회사소개서(kr)
                    </a>
                </li>
                <li>
                    <a href="<?=G5_URL;?>/download/Technical-Introduction_English.pdf" download class="downloadBtn">
                        기술 및 회사소개서(en)
                    </a>
                </li>
                <li>
                    <a href="<?=G5_URL;?>/download/Technical_Introduction_China.pdf" download class="downloadBtn">
                        기술 및 회사소개서(ch)
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</article>
</section>






<?php
include_once(G5_THEME_PATH.'/tail.php');