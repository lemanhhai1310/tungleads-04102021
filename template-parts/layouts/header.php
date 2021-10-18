<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tùng Lê Ads - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body class="">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<div id="offcanvas-tungleads" class="offTungleads" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <div class="uk-flex-1">
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="toggle: >.uk-icon">
                <li class="uk-active"><a href="#" style="--background: url('images/icon_home.png')">Trang chủ</a></li>
                <li><a href="" href="#" style="--background: url('images/icon_about.png')">Giới thiệu</a></li>
                <li class="uk-parent">
                    <a href="#" style="--background: url('images/icon_khoahoc.png')">Khóa học</a>
                    <span class="uk-icon uk-position-top-right"></span>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Khóa học google ads</a></li>
                        <li><a href="#">Khóa học facebook Ads</a></li>
                        <li><a href="#">Khóa học tiktok Ads</a></li>
                        <li><a href="#">Khóa học SEO web</a></li>
                    </ul>
                </li>
                <li><a href="#" style="--background: url('images/icon_thanhtoan.png')">Thanh toán</a></li>
            </ul>
        </div>
        <div class="uk-section-xsmall uk-background-muted uk-text-center offTungleads__holtine">
            <div class="uk-container">
                <span class="offTungleads__holtine__txt">Hotline: 0966.0808.67</span>
            </div>
        </div>
    </div>
</div>
<div class="header" uk-sticky>
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">
                <a href="" uk-toggle="target: #offcanvas-tungleads" class="uk-navbar-item header__iconMenu uk-hidden@m"><img src="images/icon_menu.png" alt=""></a>
                <a href="" class="uk-navbar-item uk-logo uk-visible@m" uk-toggle="cls: uk-padding-remove-left; mode: media; media: @l"><img src="images/logo.png" alt=""></a>
                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="uk-active"><a href="#" data-src="images/icon_home.png" uk-img>Trang chủ</a></li>
                    <li><a href="#" data-src="images/icon_about.png" uk-img>Giới thiệu</a></li>
                    <li>
                        <a href="#" data-src="images/icon_khoahoc.png" uk-img>Khóa học</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="#">Khóa học google ads</a></li>
                                <li><a href="#">Khóa học facebook Ads</a></li>
                                <li><a href="#">Khóa học tiktok Ads</a></li>
                                <li><a href="#">Khóa học SEO web</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" data-src="images/icon_thanhtoan.png" uk-img>Thanh toán</a></li>
                </ul>

            </div>
            <div class="uk-navbar-center uk-hidden@m">
                <a href="" class="uk-navbar-item uk-logo"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item uk-visible@m"><a href=""><img src="images/icon_lock.png" alt=""></a></div>
                <div class="uk-navbar-item uk-visible@m" uk-toggle="cls: uk-padding-remove-right; mode: media; media: @l"><a href="" class="header__btn uk-button uk-button-secondary">ĐĂNG KÝ</a></div>
                <div class="uk-navbar-item header__navM uk-hidden@m">
                    <a href="" class="header__boxMenu"><img class="uk-responsive-width uk-responsive-height" src="images/icon_phone_m.png" alt=""></a>
                </div>
                <div class="uk-navbar-item header__navM uk-hidden@m">
                    <a href="" class="header__boxMenu"><img class="uk-responsive-width uk-responsive-height" src="images/icon_user_m.png" alt=""></a>
                </div>
            </div>

        </nav>
    </div>
</div>