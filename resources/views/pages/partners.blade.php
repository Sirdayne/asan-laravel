@extends('layouts.main')

@section('content')

    @if (Session::has('message'))
        <div class="lara-success">{{ Session::get('message') }}</div>
    @endif
    
    
    <header class="header-partners">
        <h1>ПАРТНЕРЫ</h1>
    </header>
    
    <section class="partners">
        <div class="part-box part-1">
            <img src="/assets/img/prs-1.png" alt="">
            <div class="part-text">MAGNUM CASH & CARRY</div>
            
            <div class="part-hover">
                <span>MAGNUM CASH & CARRY</span>
                <p>Крупнейшая динамично развивающаяся торгово-розничная сеть в Казахстане, специализирующаяся на реализации товаров широкого потребления</p>
            </div>
        </div>
        <div class="part-box part-2">
            <img src="/assets/img/prs-2.png" alt="">
            <div class="part-text">МЕТРО</div>
            
            <div class="part-hover">
                <span>МЕТРО</span>
                <p>Торговых подразделения, которые предлагают покупателям широчайший ассортимент товаров различных групп, собранных под одной крышей</p>
            </div>
        </div>
        <div class="part-box part-3">
            <img src="/assets/img/prs-3.png" alt="">
            <div class="part-text">РАМСТОР</div>
            
            <div class="part-hover">
                <span>РАМСТОР</span>
                <p>Крупнейшая и стабильно развивающаяся компания, деятельность которой связана с сектором розничных продаж.</p>
            </div>
        </div>
        
        <div class="part-box part-4">
            <img src="/assets/img/prs-4.png" alt="">
            <div class="part-text">DANONE</div>
            
            <div class="part-hover">
                <span>DANONE</span>
                <p>Французская продовольственная компания, известная своими молочными продуктами, завод которой действует в Казахстане с 2010г</p>
            </div>
        </div>
        <div class="part-box part-5">
            <img src="/assets/img/prs-5.png" alt="">
            <div class="part-text">RAIMBEK BOTTLERS</div>
            
            <div class="part-hover">
                <span>RAIMBEK BOTTLERS</span>
                <p>Ведущий производитель соков в Казахстане, в настоящее время владеет 5 брендами: Juicy, Junior, Frutta Mix, Palma и Fantan</p>
            </div>
        </div>
        <div class="part-box part-6">
            <img src="/assets/img/prs-6.png" alt="">
            <div class="part-text">FOOD MASTER</div>
            
            <div class="part-hover">
                <span>FOOD MASTER</span>
                <p>Лидер по производству молочной продукции на рынке Казахстана, выпускает самый большой перечень продуктов среди отечественных производителей</p>
            </div>
        </div>
    </section>
     
     <section class="a-contacts">
         <div class="ac-partner">
             СТАНЬТЕ НАШИМ ПАРТНЕРОМ
         </div>
         <div class="ac-partext">
             Если Вы хотите стать одним из наших партнеров по бакалейной продукции<br>
            и линейки продукции "АСАН", оставьте заявку, и наши менеджеры свяжутся с Вами
         </div>
         
         <div class="a-form">
            <form method="post" action="">
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="asan.kz">
                <input type="hidden" name="admin_email" value="tester@ginnova.kz">
                <input type="hidden" name="form_subject" value="Заявка">
                <!-- END Hidden Required Fields -->

                <div class="btns-row">
                    <input type="text" name="Имя" placeholder="Имя" required>
                    <input type="tel" id="client-tel-for-consult" name="Телефон" placeholder="Телефон" required>
                    <button class="send-btn">Отправить</button>
                </div>
            </form>
         </div>
     </section>

@endsection