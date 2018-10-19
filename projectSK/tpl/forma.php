        <!-- Forma -->
        <div id="formGlobal">
            <div id="contactForms">
                <form id="contactFormsContainer" action="php/application.php" method="POST" name="application">
                    <div class="containerTextH">
                        <div>Отправьте свой индивидуальный запрос и мы подберем для Вас наилучшее предложение</div>
                    </div>
                    <div class="regContTotal">
                        <div class="formName">
                            <div class="nameName">
                                <div class="name">
                                    <input class="inputFormName" type="text" name="name" placeholder="Ваше имя..." required>
                                </div>
                                <div class="name">
                                    <input type="text" class="inputFormName" name="telephone" placeholder="Ваш телефон...">
                                </div>
                                <div class="name">
                                    <input type="email" class="inputFormName" name="email" placeholder="Адрес электронной почты..." required>
                                </div>
                            </div>
                        </div>
                        <div class="nameSurname">
                            <div class="surname">
                                <textarea cols="40" rows="10" name="message" class="formControl" placeholder=" Введите Ваше сообшение..."required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="inform">
                        <div class="registration">
                            <button type="submit" class="registrationButton1" form="contactFormsContainer">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
