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
                            <img src="<?= G5_IMG_URL;?>/cn/header-logo.svg" alt="MONOLITH" class="logo"/>
                        </div>
                        <div class="scrollBox">
                            <div class="titleBox">
                                隱私政策
                            </div>
                            <div class="contentBox">
                            <?=nl2br($config['cf_privacy_cn']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="inner">
                <ul class="menu">

                    <li><a href="<?=G5_BBS_URL?>/write.php?bo_table=write">客戶詢價</a></li>
                    <li><a href="" class="privacyBtn">隱私政策</a></li>
                </ul>
                <img src="<?= G5_IMG_URL;?>/cn/footer-logo.svg" alt="MONOLITH" class="logo"/>
                <ul class="info">
                    <li>代表 : Minkyu Park</li>
                    <li>全罗南道光阳市实业路283（光阳泰仁国家产业园区）</li>
                    <li>公司註冊號碼 : 120 87 54382</li>
                    <!-- <li>사업자등록번호 : </li> -->
                </ul>
                <ul class="info">
                    <li>Tel 061-795-1841</li>
                    <li>Fax 061-795-1842</li>
                    <li>Email : cjakrcn@mono-biz.com</li>
                </ul>
                <div class="copyright">
                    Copyright © 2023 by MONOLITH. INC. ALL RIGHTS RESERVED.
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