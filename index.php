<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__banner uk-position-relative uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg_banner.png" uk-img>
    <div class="uk-position-cover home__banner__overlay"></div>
    <div class="uk-section-xsmall uk-position-relative">
        <div class="uk-container uk-padding-remove">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-padding-small home__banner__box">

                    </div>
                </div>
                <div class="uk-width-2-5@m">
                    <div class="uk-card home__banner__card uk-box-shadow-small">
                        <div class="uk-card-header">
                            <div class="home__banner__card__txt1">ĐĂNG KÝ</div>
                            <div class="home__banner__card__txt2">(Chương trình Hội Viên)</div>
                        </div>
                        <div class="uk-card-body">
                            <form>

                                <div class="uk-margin-small">
                                    <div class="uk-position-relative uk-display-block">
                                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                                        <input class="uk-input home__banner__card__input" type="text" placeholder="Nhập họ và tên...">
                                    </div>
                                </div>
                                <div class="uk-margin-small">
                                    <div class="uk-position-relative uk-display-block">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input home__banner__card__input" type="text" placeholder="Nhập địa chỉ Email...">
                                    </div>
                                </div>
                                <div class="uk-margin-small">
                                    <div class="uk-position-relative uk-display-block">
                                        <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                                        <input class="uk-input home__banner__card__input" type="text" placeholder="Nhập số điện thoại/Zalo...">
                                    </div>
                                </div>
                                <div class="uk-margin-small">
                                    <div class="uk-position-relative uk-display-block">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input home__banner__card__input" type="text" placeholder="Nhập mật khẩu...">
                                    </div>
                                </div>
                                <div class="uk-margin-small">
                                    <div class="uk-position-relative uk-display-block">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input home__banner__card__input" type="text" placeholder="Nhập lại mật khẩu...">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>