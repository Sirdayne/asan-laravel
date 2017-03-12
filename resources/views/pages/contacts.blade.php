@extends('layouts.main')

@section('content')

    @if (Session::has('message'))
        <div class="lara-success">{{ Session::get('message') }}</div>
    @endif

    <header class="header-contacts">
        <h1>КОНТАКТЫ</h1>
    </header>
    
    <div id="map" style="float:left; width: 100%; height:500px; position:relative; z-index:1;">
        <div class="map-inner">
            <div class="mapin-title">ЦЕНТРАЛЬНЫЙ ОФИС</div>
            <div class="mapin-row"><img src="/assets/img/con-1.png" alt=""><p>Республика Казахстан, г. Алматы, п. Боралдай, ул. Бостанова 2</p></div>
            <div class="mapin-row"><img src="/assets/img/con-2.png" alt=""><p>тел. +7 727 387 65 60</p></div>
            <div class="mapin-row"><img src="/assets/img/con-3.png" alt=""><p>e-mail. info-aktobe@as-an.kz</p></div>
        </div>
        
    </div>
    
    <section class="contacts-box">
         <div class="contacts-title">ФОРМА ОБРАТНОЙ СВЯЗИ</div>
         
         <div class="a-form">
            <form method="POST" action="/feedback/send_contacts">
                {{ csrf_field() }}
                <div class="contacts-form">
                    <div class="contacts-row"><input type="text" name="name" placeholder="Имя" required></div>
                    <div class="contacts-row"><input type="tel" id="client-tel-for-consult-2" name="telephone" placeholder="Телефон" required></div>
                    <div class="contacts-row"><input type="email"  name="email" placeholder="E-mail" required></div>
                    <div class="contacts-row"><button class="send-btn">Отправить</button></div>
                </div>
            </form>
         </div>
     </section>
     
     <section class="commands-box">
         <div class="commands-title">ТОРГОВЫЕ КОМАНДЫ</div>
         
         <div class="commands-part">
             <div class="commands-part-title">г. Актобе</div>
             <div class="commands-row"><img src="/assets/img/con-1.png" alt=""><p>41-й разъезд, д. 134</p></div>
             <div class="commands-row"><img src="/assets/img/con-2.png" alt=""><p class="com-fix-1">+7 7132 98 73 28</p></div>
         </div>
         
         <div class="commands-part">
             <div class="commands-part-title">г. Шымкент</div>
             <div class="commands-row"><img src="/assets/img/con-1.png" alt=""><p>Каратобинское шоссе б/н</p></div>
             <div class="commands-row"><img src="/assets/img/con-2.png" alt=""><p class="com-fix-2">+7 7282 95 82 42</p></div>
         </div>
         
     </section>

    
    <script src="http://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    
    <script type="text/javascript">
    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [43.356665, 76.863688],
            zoom: 17
        });
        DG.marker([43.356735, 76.861183]).addTo(map);
    });
    </script>

@endsection