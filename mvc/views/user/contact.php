<main class="container mt-5">
    <div class="container tieude-main py-1">
        <a href="">
            <span class="text-white"><i class="ti-map"></i> Bản đồ website</span>
        </a>
    </div>
    <iframe class="w-100" height="500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6627672021905!2d105.75933304880154!3d21.046175393434403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c2377a3fbf%3A0xf9247c7714a54ee3!2zNDYgTmcuIDEzOSBQaMO6IERp4buFbiwgUGjDuiBEaeG7hW4sIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1686198299287!5m2!1svi!2s" allowfullscreen="" loading="lazy">
    </iframe>
    <div class="row mt-5">
        <div class="col-xl-5">
            <?php if (!empty($post->get_val('info'))) {
                foreach ($post->get_val('info') as $logo) : extract($logo); ?>
                    <div class="container">
                        <div class="col-12 ">
                            <div class="container tieude-main p-3 mt-3 ">
                                <a href="">
                                    <span class="text-white"><i class="fas fa-phone"></i> Số điện thoại</span>
                                </a>
                            </div>
                            <div class="container p-3 lienhe_border">
                                <p> <?= $phone_info ?></p>
                                <p> <?= $phone_info ?></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="container tieude-main p-3 mt-3 ">
                                <a href="">
                                    <span class="text-white"> <i class="far fa-envelope"></i> Email</span>
                                </a>
                            </div>
                            <div class="container p-3 lienhe_border">
                                <p> <?= $email_info ?></p>
                                <p> <?= $email_info ?></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="container tieude-main p-3 mt-3 ">
                                <a href="">
                                    <span class="text-white"><i class="fas fa-map-marker-alt"></i> Địa chỉ</span>
                                </a>
                            </div>
                            <div class="container p-3 lienhe_border">
                                <p>Address goes here,</p>
                                <p><?= $adress_info ?></p>
                            </div>
                        </div>

                    </div>
            <?php endforeach;
            } ?>

        </div>

        <div class="col-xl-7">
            <div class="form__login_contact">
                <div class="container tieude-main p-3 mt-3">
                    <a href="">
                        <span class="text-white"><i class="far fa-address-card"></i> Liên hệ</span>
                    </a>
                </div>
                <form action="" class="grid-column mt-3" method="post">
                    <div class="input__form__icon card ">
                        <i class="far fa-user"></i>
                        <input class=" nhap_input_login" type="text" name="name" placeholder="Tên của bạn" value="<?= $name = isset($name) ? $name : ""; ?>">
                    </div>
                    <div class="input__form__icon card">
                        <i class="far fa-envelope"></i>
                        <input class=" nhap_input_login" type="email" name="email" id="" placeholder="Email của bạn" value="<?= $gmail = isset($gmail) ? $gmail : ""; ?>">>
                    </div>

                    <div class="input__form__icon card ">
                        <i class="far fa-eye"></i>
                        <input class=" nhap_input_login" type="text" name="title" placeholder="Tiêu đề">
                    </div>
                    <div class="card p-3">
                        <i class="far fa-address-card fs-4"></i>
                        <textarea class=" nhap_input_login card mt-2" placeholder="Nhập nội dung" name="content" id="" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="Liên hệ" name="lienhe" class="dang_nhap_dk btn">
                </form>
            </div>
        </div>
    </div>
</main>