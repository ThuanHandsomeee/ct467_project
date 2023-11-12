<div class="modal-content">
    <div class="modal-header">
        <h4>ĐĂNG NHẬP HOẶC TẠO TÀI KHOẢN</h4>
        <button type="button" data-dismiss="modal">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.99586 8L15.5824 2.41348C15.8475 2.14881 15.9967 1.78966 15.997 1.41503C15.9973 1.0404 15.8488 0.680986 15.5841 0.415851C15.3195 0.150716 14.9603 0.00157854 14.5857 0.0012477C14.2111 0.000916852 13.8517 0.14942 13.5865 0.414087L8 6.00061L2.41348 0.414087C2.14834 0.148952 1.78874 0 1.41378 0C1.03882 0 0.679222 0.148952 0.414087 0.414087C0.148952 0.679222 0 1.03882 0 1.41378C0 1.78874 0.148952 2.14834 0.414087 2.41348L6.00061 8L0.414087 13.5865C0.148952 13.8517 0 14.2113 0 14.5862C0 14.9612 0.148952 15.3208 0.414087 15.5859C0.679222 15.851 1.03882 16 1.41378 16C1.78874 16 2.14834 15.851 2.41348 15.5859L8 9.99939L13.5865 15.5859C13.8517 15.851 14.2113 16 14.5862 16C14.9612 16 15.3208 15.851 15.5859 15.5859C15.851 15.3208 16 14.9612 16 14.5862C16 14.2113 15.851 13.8517 15.5859 13.5865L9.99586 8Z"
                    fill="#6D6E72"></path>
            </svg>
        </button>
    </div>
    <div class="modal-body">
        <div class="box-popup-account">
            <div class="box-popup-account-form">
                <!-- Form Đăng Nhập -->
                <div id="acc-login-box" class="acc-content-box">


                    <form accept-charset="UTF-8" action="/account/login" id="customer_login" method="post"><input
                            name="return_to" value="https://gearvn.com/" type="hidden">
                        <input name="form_type" type="hidden" value="customer_login">
                        <input name="utf8" type="hidden" value="✓">


                        <div class="form__input-wrapper form__input-wrapper--labelled">
                            <input type="email" id="login-customer[email]" class="form__field form__field--text"
                                name="customer[email]" required="required">
                            <label for="login-customer[email]" class="form__floating-label">Email</label>
                        </div>
                        <div class="form__input-wrapper form__input-wrapper--labelled">

                            <input type="password" id="login-customer[password]" class="form__field form__field--text"
                                name="customer[password]" required="required" autocomplete="current-password">
                            <label for="login-customer[password]" class="form__floating-label">Mật khẩu</label>

                        </div>
                        <div class="form__input-wrapper text-right ">
                            <a href="javanonoscript:void(0);" data-box="acc-recovery-box"
                                class="btn-recovery acc-trigger js-acc">Quên mật khẩu?</a>
                        </div>
                        <div class="form__input-wrapper last">
                            <button class="btn btn-acc" type="submit" id="form_submit-login">ĐĂNG NHẬP</button>
                        </div>

                        <input id="b87d1330ffe94794ba7cad26e5659bf8" name="g-recaptcha-response" type="hidden"><noscript
                            src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></noscript><noscript>grecaptcha.ready(function()
                            {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action:
                            'submit'}).then(function(token)
                            {document.getElementById('b87d1330ffe94794ba7cad26e5659bf8').value = token;});});</noscript>
                    </form>

                </div>

                <!-- Form Đăng Ký -->
                <div id="acc-register-box" class="acc-content-box d-none">


                    <form accept-charset="UTF-8" action="/account" id="create_customer" method="post">
                        <input name="form_type" type="hidden" value="create_customer">
                        <input name="utf8" type="hidden" value="✓">


                        <input type="hidden" name="return_to" value="/">
                        <input type="hidden" id="register-customer[last_name]" name="customer[last_name]"
                            placeholder="Họ">
                        <input type="hidden" id="register-customer[first_name]" name="customer[first_name]"
                            placeholder="Tên">
                        <div class="form__input-wrapper form__input-wrapper--labelled">
                            <input type="text" id="register-customer[name]" class="form__field form__field--text"
                                name="customer[name]" required="required">
                            <label for="register-customer[name]" class="form__floating-label">Họ và Tên</label>
                        </div>
                        <div class="form__input-wrapper form__input-wrapper--labelled">
                            <input type="email" id="register-customer[email]" class="form__field form__field--text"
                                name="customer[email]" required="required">
                            <label for="register-customer[email]" class="form__floating-label">Email</label>
                        </div>
                        <div class="form__input-wrapper form__input-wrapper--labelled">
                            <input type="password" id="register-customer[password]"
                                class="form__field form__field--text" name="customer[password]" required="required"
                                autocomplete="new-password">
                            <label for="register-customer[password]" class="form__floating-label">Mật khẩu</label>
                        </div>
                        <div class="form__input-wrapper">
                            <div class="form-checkbox">
                                <input type="checkbox" id="customer_tags" value="Có nhận email quảng cáo"
                                    name="customer[tags]" checked="">
                                <label for="customer_tags" class="title">Đăng ký nhận tin khuyến mãi qua Email</label>
                            </div>
                        </div>
                        <div class="form__input-wrapper last">
                            <button type="submit" class="btn btn-acc" id="form_submit-register">TẠO TÀI KHOẢN</button>
                        </div>

                        <input id="5452b5d1f7314fe98275044f53aa5844" name="g-recaptcha-response" type="hidden"><noscript
                            src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></noscript><noscript>grecaptcha.ready(function()
                            {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action:
                            'submit'}).then(function(token)
                            {document.getElementById('5452b5d1f7314fe98275044f53aa5844').value = token;});});</noscript>
                    </form>

                </div>

                <!-- Form footer -->
                <div class="form-btn-social text-center">
                    <div class="line"><span>hoặc đăng nhập bằng</span></div>
                    <div class="btn-social-list text-center">
                        <button type="button" class="btn-gg button" id="btn-google-login">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.96 16.5599V20.0159H18.648C18.432 21.5279 16.92 24.3359 12.96 24.3359C9.504 24.3359 6.69601 21.4559 6.69601 17.9999C6.69601 14.5439 9.504 11.6639 12.96 11.6639C14.904 11.6639 16.2 12.5279 16.992 13.2479L19.728 10.5839C17.928 8.92792 15.696 7.91992 12.96 7.91992C7.41601 7.91992 2.88 12.4559 2.88 17.9999C2.88 23.5439 7.41601 28.0799 12.96 28.0799C18.792 28.0799 22.608 23.9759 22.608 18.2159C22.608 17.5679 22.536 17.0639 22.464 16.5599H12.96ZM34.56 16.5599H31.68V13.6799H28.8V16.5599H25.92V19.4399H28.8V22.3199H31.68V19.4399H34.56V16.5599Z"
                                    fill="white"></path>
                            </svg>
                            <span>Google</span>
                        </button>
                        <button type="button" class="btn-fb button" id="btn-facebook-login">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.198 21.5H13.198V13.49H16.802L17.198 9.51H13.198V7.5C13.198 7.23478 13.3034 6.98043 13.4909 6.79289C13.6784 6.60536 13.9328 6.5 14.198 6.5H17.198V2.5H14.198C12.8719 2.5 11.6002 3.02678 10.6625 3.96447C9.72479 4.90215 9.198 6.17392 9.198 7.5V9.51H7.198L6.802 13.49H9.198V21.5Z"
                                    fill="white"></path>
                            </svg>
                            <span>Facebook</span>
                        </button>
                    </div>
                </div>
                <div data-box="acc-login-box" class="form-btn-bottom text-center">
                    <div>Bạn chưa có tài khoản? <a href="#" data-box="acc-register-box"
                            class="btn-register acc-trigger js-acc">Đăng ký ngay!</a></div>
                </div>
                <div data-box="acc-register-box" class="form-btn-bottom text-center d-none">
                    <div>Bạn đã có tài khoản? <a href="#" data-box="acc-login-box"
                            class="btn-register acc-trigger js-acc">Đăng nhập!</a></div>
                </div>

                <!-- Form Quên Mật Khẩu -->
                <div id="acc-recovery-box" class="acc-content-box d-none">


                    <form accept-charset="UTF-8" action="/account/recover" method="post">
                        <input name="form_type" type="hidden" value="recover_customer_password">
                        <input name="utf8" type="hidden" value="✓">


                        <div class="form__input-wrapper form__input-wrapper--labelled">
                            <input type="email" id="recover-customer[recover_email]"
                                class="form__field form__field--text" name="email" required="required">
                            <label for="recover-customer[recover_email]" class="form__floating-label">Email</label>
                        </div>
                        <div class="form__input-wrapper last">
                            <button type="submit" class="btn btn-acc" id="form_submit-recover">KHÔI PHỤC</button>
                        </div>

                        <input id="0ce7996c255940e0aa8e2004099f0b92" name="g-recaptcha-response" type="hidden"><noscript
                            src="https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></noscript><noscript>grecaptcha.ready(function()
                            {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action:
                            'submit'}).then(function(token)
                            {document.getElementById('0ce7996c255940e0aa8e2004099f0b92').value = token;});});</noscript>
                    </form>
                    <div class="form-btn text-center">
                        <div>Bạn đã nhớ mật khẩu? <a href="#" data-box="acc-login-box"
                                class="btn-recover acc-trigger js-acc">Trở về đăng nhập</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>