@extends('layouts.main')

@section('content')

    @if (Session::has('message'))
        <div class="lara-success">{{ Session::get('message') }}</div>
    @endif

   <header class="about-header">
       <div class="a-header-img">
           <img src="/assets/img/a-logo.png" alt="">
       </div>
       <div class="a-header-text">
            <div class="a-h-txt">
            <p>
               <span>ТОО "Фирма Ас-Ан"</span> - группа компаний, ведущих свою деятельность на продовольственном рынке Республики Казахстан с 2006 г., один из крупнейших игроков на рынке сахара (<span>более 60% рынка</span>) и бакалеи (<span>более 20%</span>) в Республике Казахстан.
            </p>
            <p>
                <span>ТОО "Фирма Ас-Ан"</span> - официальный дилер Центральноазиатской Сахарной Корпорации.
           </p>
           </div>
       </div>
    </header>
     
    <section class="a-map">
        <div class="a-map-text">
            <p>Компания производит закуп бакалейной продукции как у отечественных производителей, так и у производственных компаний России, Индии, Пакистана и Китая.</p>
        </div>
        <div class="a-map-img">
            <img src="/assets/img/a-map.png" alt="">
        </div>
    </section>
    
    <section class="a-slider">
        
        <div class="as-title">МЫ ПОСТОЯННО РАБОТАЕМ НАД ПРОДУКТОВЫМ ПОРТФЕЛЕМ</div> 
        
        <div id="slick-slider">
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-1.png" alt=""></div>
                <div class="slick-txt">Сахар<br>(Казахстан)</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-2.png" alt=""></div>
                <div class="slick-txt">Крупа рисовая <br>
                                        (Казахстан, Индия, <br>
                                        Пакистан, Китай)</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-3.png" alt=""></div>
                <div class="slick-txt">Крупа гречневая <br>
                                        (Россия, Казахстан) <br>
                                        и "Серые крупы"</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-4.png" alt=""></div>
                <div class="slick-txt">Ассортимент<br>бобовых</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-5.png" alt=""></div>
                <div class="slick-txt">Макаронные изделия <br>
                                        ТМ "Корона", ТМ "Купеческие", <br>
                                        ТМ "Дамир АА" (Казахстан)</div>
            </div>
               
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-6.png" alt=""></div>
                <div class="slick-txt">Соль "Арал Туз"<br>
                                        (Казахстан)</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-7.png" alt=""></div>
                <div class="slick-txt">Сода пищевая <br>
                                        (Башкирия)</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-8.png" alt=""></div>
                <div class="slick-txt">Подсолнечное масло <br>
                                    ТМ "Заречное", 
                                    "Аскан" (Казахстан)</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-9.png" alt=""></div>
                <div class="slick-txt">Подсолнечное масло <br>
                                        ТМ "Жемчужина Поволжья" <br>
                                        (Россия)</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-10.png" alt=""></div>
                <div class="slick-txt">Подсолнечное масло<br>
                                        ТМ "Аннинское" <br>
                                        (Россия)</div>
            </div>
               
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-11.png" alt=""></div>
                <div class="slick-txt">Продукция <br>
                                        ОАО "Глубокский <br>
                                        молочноконсервный <br>
                                        комбинат" (Беларусь)</div>
            </div>
                
            <div class="slick-slide">
                <div class="slick-img"><img src="/assets/img/a-12.png" alt=""></div>
                <div class="slick-txt">Бакалея под <br>
                                    торговыми марками <br>
                                    "Асан" и "ЭкоПак"</div>
            </div>
                
        </div>
        
    </section>
     
    <section class="a-advantages">
        <div class="adv-title">
            ПРЕИМУЩЕСТВА РАБОТЫ С ФИРМОЙ "АС АН"
        </div>
        <div class="adv-row">
            <div class="adv-1">
                <img src="/assets/img/ap-1.png" alt="">
                <div class="adv-mob"><p>10 лет на продовольственном 
                рынке Республики Казахстан</p></div>
            </div>
            <div class="adv-1">
                <img src="/assets/img/ap-2.png" alt="">
                <div class="adv-mob"><p>Широкий ассортимент 
                бакалейной продукции 
                отечественных и зарубежных 
                производителей</p></div>
            </div>
            <div class="adv-1">
                <img src="/assets/img/ap-3.png" alt="">
                <div class="adv-mob"><p>Долгосрочные партнерские 
                отношения с крупными 
                продовольственными 
                компаниями</p></div>
            </div>
            <div class="adv-1">
                <img src="/assets/img/ap-4.png" alt="">
                <div class="adv-mob"><p>Продукция компании 
                соответствует знакам 
                "Натуральный продукт" и 
                "Халал"</p></div>
            </div>
        </div>
        <div class="adv-row">
            <div class="adv-1 adv-desc">
                <p>10 лет на продовольственном 
                рынке Республики Казахстан</p>
            </div>
            <div class="adv-1 adv-desc">
                <p>Широкий ассортимент 
                бакалейной продукции 
                отечественных и зарубежных 
                производителей</p>
            </div>
            <div class="adv-1 adv-desc">
                <p>Долгосрочные партнерские 
                отношения с крупными 
                продовольственными 
                компаниями</p>
            </div>
            <div class="adv-1 adv-desc">
                <p>Продукция компании 
                соответствует знакам 
                "Натуральный продукт" и 
                "Халал"</p>
            </div>
        </div>
    </section>
     
    <section class="a-partners">
        <div class="ap-title">
            НАШИ ПАРТНЕРЫ
        </div>
        <div class="ap-row">
            <div class="ap-box ap-1">
                <div class="ap-img">
                    <img src="/assets/img/ac-1.png" alt="">
                </div>
                <div class="ap-text">
                    <p>ТОРГОВЫЕ СЕТИ</p>
                </div>
                
                <div class="ap-hover">
                    <div class="aph-title">ТОРГОВЫЕ СЕТИ</div>
                    <div class="aph-row"><div class="aph-text">Magnum Cash&Carry, BioMart, SMALL, Оптовый клуб, Carrefour, Рамстор, Метро, Green Mart, Анвар, Дина</div></div>
                    <button class="aph-button jk">стать партнером</button>
                </div>
            </div>
            <div class="ap-box ap-2">
                <div class="ap-img">
                    <img src="/assets/img/ac-2.png" alt="">
                </div>
                <div class="ap-text">
                    <p>ТРАДИЦИОННАЯ РОЗНИЦА</p>
                </div>
                
                <div class="ap-hover">
                    <div class="aph-title">ТРАДИЦИОННАЯ РОЗНИЦА</div>
                    <div class="aph-row"><div class="aph-text">Производственные магазины малого и среднего бизнеса в городах Казахстана</div></div>
                    <button class="aph-button jk">стать партнером</button>
                </div>
            </div>
            <div class="ap-box ap-3">
                <div class="ap-img">
                    <img src="/assets/img/ac-3.png" alt="">
                </div>
                <div class="ap-text">
                    <p>ПРОИЗВОДСТВЕННЫЕ КОМПАНИИ</p>
                </div>
                
                <div class="ap-hover">
                    <div class="aph-title">ПРОИЗВОДСТВЕННЫЕ КОМПАНИИ</div>
                    <div class="aph-row"><div class="aph-text">DANONE, Алматинские конфеты, Голд Продукт, Фуд Мастер, Галанз Боттлерс, Раимбек Боттлерс</div></div>
                    <button class="aph-button jk">стать партнером</button>
                </div>
            </div>
            <div class="ap-box ap-4">
                <div class="ap-img">
                    <img src="/assets/img/ac-4.png" alt="">
                </div>
                <div class="ap-text">
                    <p>ДИЛЕРСКИЕ СЕТИ</p>
                </div>
                
                <div class="ap-hover">
                    <div class="aph-title">ДИЛЕРСКИЕ СЕТИ</div>
                    <div class="aph-row"><div class="aph-text">Дилерские сети Казахстана, работающие с оптово-розничными рынками</div></div>
                    <button class="aph-button jk">стать партнером</button>
                </div>
            </div>
            
        </div>
    </section>
     
     <section class="a-contacts">
         <div class="ac-title">
             Остались вопросы? Отправьте Ваши контакты и мы обязательно перезвоним
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