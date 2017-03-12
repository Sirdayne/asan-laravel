<div class="modal-back"></div>

    <div class="modal-wrapper">
        <div class="modal">
            <div class="modal-close"></div>

            <div class="modal-title">Оставьте ваши данные</div>

            <form method="POST" action="/feedback/send_mail">
                {{ csrf_field() }}
                <div class="btns-row">
                    <input type="text" name="name" placeholder="Имя" required>
                    <input type="tel" id="client-tel-for-consult" name="telephone" placeholder="Телефон" required>
                    <button class="send-btn btn-pur">Отправить</button>
                </div>
            </form>
        </div>

        <div class="modal-catalog">
            <div class="modal-close"></div>

            <div class="modal-title">Оставьте ваши данные</div>

            <form method="POST" action="/feedback/send_catalog">
                {{ csrf_field() }}
                <div class="btns-row">
                    <input type="text" name="name" placeholder="Имя" required>
                    <input type="tel" id="client-tel-for-consult-3" name="telephone" placeholder="Телефон" required>
                    <input type="hidden" id="js-production" name="product" value="Пусто">
                    <button class="send-btn btn-pur">Отправить</button>
                </div>
            </form>
        </div>

        @if (Session::has('mail'))
            <div class="thx js-lara-thx"><p>{{ Session::get('mail') }}</p></div> 
        @endif

</div>