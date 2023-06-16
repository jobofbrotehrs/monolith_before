<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}


if($co_id){
    include_once(G5_THEME_PATH."/important/$co_id.php");
}
?>
<!------------------------- footer start ------------------------->
        <!--아래 코드는 푸터에 다 넣어주세요!!-->

        <section class="PrivacyPopup">
            <div class="inner">
                <div class="contentWrap">
                    <div class="closeBtn">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="contentBox">
                        <div class="logoBox">
                            <img src="<?= G5_IMG_URL;?>/header-logo.svg" alt="MONOLITH" class="logo"/>
                        </div>
                        <div class="scrollBox">
                            <div class="titleBox">
                                개인정보처리방침
                            </div>
                            <div class="contentBox">
                            <?=nl2br($config['cf_privacy']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="inner">
                <ul class="menu">

                    <li><a href="<?=G5_BBS_URL?>/write.php?bo_table=write">고객문의</a></li>
                    <li><a href="" class="privacyBtn">개인정보처리방침</a></li>
                </ul>
                <img src="<?= G5_IMG_URL;?>/footer-logo.svg" alt="MONOLITH" class="logo"/>
                <ul class="info">
                    <li>대표 : 박민규</li>
                    <li>전남 과양시 산업로 283(광양 태인 국가 산업단지)</li>
                    <li>사업자등록번호 : 120 87 54382</li>
                    <!-- <li>사업자등록번호 : </li> -->
                </ul>
                <ul class="info">
                    <li>Tel 061-795-1841</li>
                    <li>Fax 061-795-1842</li>
                    <li>Email : cjakrcn@mono-biz.com</li>
                </ul>
                <div class="copyright">
                    © 2023 by MONOLITH. INC. ALL RIGHTS RESERVED.
                </div>
            </div>
        </footer>
        <!------------------------- footer end -------------------------->

        


<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");