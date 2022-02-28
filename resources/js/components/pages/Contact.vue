<template>
    <div>


        <div class="container">

            <!-- Contact Email Area Start -->
            <div class="contact-email-area ptb-60">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12">
                            <h3>Обратная связь</h3>
                            <p class="text-capitalize mb-40"></p>

                            <form id="w0" class="contact-form" action="contact" method="post">
                                <input type="hidden" name="_csrf"
                                    value="fi7V_LZwSFluIxNNoiDYd4Ris16VOj0SZpOvJcQV-RkVabu0gUQHPiVuInvSE7ASsSDfFOVxc0gzw5oR81S8cw==">
                                <div class="address-wrapper">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="address-fname">
                                                <div class="form-group field-mailform-name required">

                                                    <input type="name" id="mailform-name" class="form-control"
                                                        name="MailForm[name]" placeholder="Ваше имя"
                                                        aria-required="true">

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="address-email">
                                                <div class="form-group field-mailform-email required">

                                                    <input type="email" id="mailform-email" class="form-control"
                                                        name="MailForm[email]" placeholder="Email" aria-required="true">

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="address-web">
                                                <div class="form-group field-mailform-phone">

                                                    <input type="phone" id="mailform-phone" class="form-control"
                                                        name="MailForm[phone]" placeholder="Телефон">

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="address-subject">
                                                <div class="form-group field-mailform-theme required">

                                                    <input type="theme" id="mailform-theme" class="form-control"
                                                        name="MailForm[theme]" placeholder="Тема" aria-required="true">

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="address-textarea">
                                                <div class="form-group field-mailform-comments required">

                                                    <textarea id="mailform-comments" class="form-control"
                                                        name="MailForm[comments]" rows="16" placeholder="Ваш коментарий"
                                                        aria-required="true"></textarea>

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="form-message ml-15"></p>
                                <div class="col-xs-12 footer-content mail-content">

                                    <div class="send-email">
                                        <button type="submit">Отправить</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Email Area End -->
            <!-- Brand Logo Start -->
            <div class="brand-area pb-60">
                <div class="container">

                </div>
            </div>
            <!-- Brand Logo End -->

        </div>
    </div>
</template>

<script>
    export default {

    }
</script>>