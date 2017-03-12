@extends('layouts.main')

@section('content')

    @if (Session::has('message'))
        <div class="lara-success">{{ Session::get('message') }}</div>
    @endif
    
   <section class="catalog">
        <!--<h1>КАТАЛОГ</h1>-->
    
        <div class="catalog-filters">
            <a name="anchor-catalog" class="anchor"></a>
           
            <div class="catalog-filter cf-active">Оптовая продажа<span class="cf-line"></span></div>
            <div class="catalog-filter">АСАН<span class="cf-line"></span></div>
            <div class="catalog-filter">ЭкоПак<span class="cf-line"></span></div>
            
            
            
            <div class="catalog-filter">Мука и макаронные изделия<span class="cf-line"></span></div>
            <div class="catalog-filter">Консервация<span class="cf-line"></span></div>
            
        </div>
        
        <div class="catalog-category cf-active">
            
            <section class="catalog-page-1 cf-active">
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС ЛИДЕР</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/ris-lider.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>

                <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС ШЛИФОВАННЫЙ  <br />ЭЛИТА</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/ris-shlifovannii-elita.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 10 мес</div>
                    <div class="catalog-set">СТ 940140001313 - ТС-01-2015</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>

                <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС ШЛИФОВАННЫЙ <br />ПРИВОЛЬЕ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/ris-shlifovannii-privole.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>

                <div class="catalog-box">
                    <div class="catalog-title">РИС КАМОЛИНО <br />НАЙ-МИР</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/ris-kamolino-nai-mir.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">СТ РК 1020 - 2000</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>

                <div class="catalog-box">
                    <div class="catalog-title">КРУПА ПШЕНИЧНАЯ <br />ПОЛТАВСКАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-pshenichnaya-poltavskaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 20 кг</div>
                    <div class="catalog-set">Срок хранения: 18 мес</div>
                    <div class="catalog-set">ГОСТ 6292-93</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>

                <div class="catalog-box">
                    <div class="catalog-title">РИС ШЛИФОВАННЫЙ <br />ЛИДЕР КЫЗЫЛОРДА</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/ris-shlifovannii-lider-kyzylorda.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>

                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА РИСОВАЯ <br />РАЗГУЛЯЙ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-risovaya-razgulyai.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>

                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА ГРЕЧНЕВАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-grechnevaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 20 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>

                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА ПШЕНО</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-psheno.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
            </section>
            
            <section class="catalog-page-1">
             
              <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС ОТБОРНЫЙ <br />ЛИДЕР</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/ris-otbornyi-lider.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">КРУПА МАННАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-mannaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 10 мес</div>
                    <div class="catalog-set">ГОСТ 7022-97</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">КРУПА РИСОВАЯ <br />АСАН</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-risovaya-asan.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">РИС ШЛИФОВАННЫЙ <br />КАМОЛИНО ЯНТАРЬ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/ris-shlifovannii-kamolino-yantar.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">КРУПА КУКУРУЗНАЯ <br />КУБАНЬ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-kukuruznaya-kuban.png" alt=""></div>

                    <div class="catalog-set">Вес: 20 кг</div>
                    <div class="catalog-set">Срок хранения: 6 мес</div>
                    <div class="catalog-set">ГОСТ 6002-69</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">САХАР</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/sahar.png" alt=""></div>

                    <div class="catalog-set">Вес: 5, 10, 25 кг</div>
                    <div class="catalog-set">Срок хранения: 48 мес</div>
                    <div class="catalog-set">ГОСТ 31361-2008</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА ЯЧНЕВАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-yachnevaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 18 мес</div>
                    <div class="catalog-set">ГОСТ 5784-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА ГОРОХ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-goroh.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 20 мес</div>
                    <div class="catalog-set">ГОСТ 6201-68</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА ПЕРЛОВАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/krupa-perlovaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 18 мес</div>
                    <div class="catalog-set">ГОСТ 5784-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
            </section>
            
            <section class="catalog-page-1">
            
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС ШЛИФОВАННЫЙ <br/>ОТБОРНЫЙ ЯНТАРЬ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/ris-shlifovannii-otbornii-yantar.png" alt=""></div>

                    <div class="catalog-set">Вес: 50 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">ХЛОПЬЯ ОВСЯНЫЕ ГЕРКУЛЕС</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/hlopya-ovsyannie-gerkules.png" alt=""></div>

                    <div class="catalog-set">Вес: 50 кг</div>
                    <div class="catalog-set">Срок хранения: 8 мес</div>
                    <div class="catalog-set">СТО 00936492-006-2016</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">ФАСОЛЬ КРАСНАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/fasol-krasnaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 50 кг</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set">ГОСТ 7758-75</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">ФАСОЛЬ ЦВЕТНАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/fasol-cvetnaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 50 кг</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set">ГОСТ 7758-75</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">ФАСОЛЬ БЕЛАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog/fasol-belaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 20 кг</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set">ГОСТ 7758-75</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            
            <div class="catalog-paginator">
                <div class="catalog-dot-1 cf-active"></div>
                <div class="catalog-dot-1"></div>
                <div class="catalog-dot-1"></div>
            </div>

        </div>
        
        <div class="catalog-category">
            <section class="catalog-page-2 cf-active">
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">САХАР</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/sahar.png" alt=""></div>

                    <div class="catalog-set">Вес: 900 Г</div>
                    <div class="catalog-set">Срок хранения: 48 мес</div>
                    <div class="catalog-set">ГОСТ 5784-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС ДЛИННОЗЕРНЫЙ <br /> ПРОПАРЕННЫЙ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/ris-dlinnozernii-proparennii.png" alt=""></div>

                    <div class="catalog-set">Вес: 800 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 6292-93</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">ФАСОЛЬ КРАСНАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/fasol-krasnaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 800 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"> ГОСТ 7758-75</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">КРУПА ПЕРЛОВАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/krupa-perlovaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 800 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 5784-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">КРУПА ГОРОХ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/krupa-goroh.png" alt=""></div>

                    <div class="catalog-set">Вес: 900 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"> ГОСТ 6201 - 68</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">РИС КРУГЛОЗЕРНЫЙ <br />ШЛИФОВАННЫЙ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/ris-kruglozernii-shlifovannii.png" alt=""></div>

                    <div class="catalog-set">Вес: 900 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">ФАСОЛЬ БЕЛАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/fasol-belaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 750 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА ПШЕНО <br /> ШЛИФОВАННОЕ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/krupa-psheno-shlifovannoe.png" alt=""></div>

                    <div class="catalog-set">Вес: 900 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 572-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА ГОРОХ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/krupa-goroh-900.png" alt=""></div>

                    <div class="catalog-set">Вес: 800 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set"> ГОСТ 6201 - 68</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            
            <section class="catalog-page-2">
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">КРУПА ГРЕЧНЕВАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/krupa-grechnevaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 900 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 5550-74</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС ДЛИННОЗЕРНЫЙ <br /> ПРОПАРЕННЫЙ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/ris-dlinnozernii-proparennii-2.png" alt=""></div>

                    <div class="catalog-set">Вес: 900 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 6292-93</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС КРУГЛОЗЕРНЫЙ <br /> ШЛИФОВАННЫЙ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/ris-kruglozernii-shlifovannii-2.png" alt=""></div>

                    <div class="catalog-set">Вес: 800 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 6292-93</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">ФАСОЛЬ ЦВЕТНАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-asan/fasol-cvetnaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 750 Г</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 7758-75</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            
            <!--<section class="catalog-page-2">catalog page 3</section>-->
            
            <div class="catalog-paginator">
                <div class="catalog-dot-2 cf-active"></div>
                <div class="catalog-dot-2"></div>
                <!--<div class="catalog-dot-2"></div>-->
            </div>

        </div>
        
        <div class="catalog-category">
            <section class="catalog-page-3 cf-active">
               
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">ФАСОЛЬ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/fasol.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 20 мес</div>
                    <div class="catalog-set">ГОСТ 7758-75</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">ЧЕЧЕВИЦА</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/chechevica.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 18 мес</div>
                    <div class="catalog-set">ГОСТ 13213-7</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">КРУПА КУКУРУЗНАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/kukuruznaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 10 мес</div>
                    <div class="catalog-set">ГОСТ 6002-69</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">КРУПА ЯЧНЕВАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/yachnevaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 15 мес</div>
                    <div class="catalog-set">ГОСТ 5784-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">КРУПА ПШЕНИЧНАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/pshenichnaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 14 мес</div>
                    <div class="catalog-set">ГОСТ 276-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">РИС КАМОЛИНО</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/kamolino.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 6292-93</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">САХАР</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/sahar.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ 21-94</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">КРУПА МАННАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/mannaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 10 мес</div>
                    <div class="catalog-set">ГОСТ 7022-97</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">ГЕРКУЛЕС</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/gerkules.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,35 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ 21149-93</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            
            <section class="catalog-page-3">
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">КРУПА ПЕРЛОВАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/perlovaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 18 мес</div>
                    <div class="catalog-set">ГОСТ 5784-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">КРУПА ГРЕЧНЕВАЯ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/grechnevaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 20 мес</div>
                    <div class="catalog-set">ГОСТ 5550 -74</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">РИС ШЛИФОВАННЫЙ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/shlifovannii.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 18 мес</div>
                    <div class="catalog-set">ГОСТ 6292-93</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">РИС ДЛИННОЗЕРНЫЙ ПРОПАРЕННЫЙ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/dlinnozernii_proparennii.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set">ГОСТ 6292-93</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">КРУПА ПШЕНО</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/krupa-psheno.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set">ГОСТ 572-60</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">ГОРОХ</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-ekopak/goroh.png" alt=""></div>

                    <div class="catalog-set">Вес: 0,7 кг</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ 6201-88</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Гречневые хлопья</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/grechnevie-hlopya.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Кукурузные хлопья</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/kukurznie-hlopya.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Кукурузные хлопья XXL</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/kukuriznie-hlopya-xxl.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                
            </section>
            
            <section class="catalog-page-3">
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Геркулесовые хлопья</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/gerkulesovie-hlopya.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Овсяные хлопья</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/ovsyanie-hlopya.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Рисовые хлопья</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/risovie-hlopya.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                <div class="catalog-box">
                    <div class="catalog-title">Перловая крупа</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/perlovaya-krupa.png" alt=""></div>

                    <div class="catalog-set">Вес: 400 г</div>
                    <div class="catalog-set">Срок хранения: 18 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">MIX</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/mix-ris-grechka.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Кукурузная крупа</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/kukurznaya-krupa.png" alt=""></div>

                    <div class="catalog-set">Вес: 450 г</div>
                    <div class="catalog-set">Срок хранения: 10 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Рис длиннозерный пропаренный</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/ris-dlinnozernii-proparennii.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Гречка ядрица</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/grechka-yadrica.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 20 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Горох крупа</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/goroh.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
            
            </section>
            
            <section class="catalog-page-3">
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Пшеничная крупа</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/pshenichnaya-krupa.png" alt=""></div>

                    <div class="catalog-set">Вес: 450 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Пшено крупа</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/psheno-krupa.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Ячневая крупа</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/yachenva-krupa.png" alt=""></div>

                    <div class="catalog-set">Вес: 450 г</div>
                    <div class="catalog-set">Срок хранения: 9 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Рис длиннозерный белый</div>
                    <div class="catalog-img"><img src="/assets/img/ekopak-2/ris-dlinnozernii.png" alt=""></div>

                    <div class="catalog-set">Вес: 500 г</div>
                    <div class="catalog-set">Срок хранения: 18 мес</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            
            <div class="catalog-paginator">
                <div class="catalog-dot-3 cf-active"></div>
                <div class="catalog-dot-3"></div>
                <div class="catalog-dot-3"></div>
                <div class="catalog-dot-3"></div>
            </div>

        </div>
        
        <div class="catalog-category">
            <section class="catalog-page-4 cf-active">
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Макаронные изделия «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/1.png" alt=""></div>

                    <div class="catalog-set">Вес: 400 г</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ Р 51865-2010</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Макаронные изделия «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/2.png" alt=""></div>

                    <div class="catalog-set">Вес: 1 кг</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ Р 51865-2010</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Макаронные изделия «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/3.png" alt=""></div>

                    <div class="catalog-set">Вес: 2 кг</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ Р 51865-2010</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Макаронные изделия «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/4.png" alt=""></div>

                    <div class="catalog-set">Вес: 5 кг</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ Р 51865-2010</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Жайма «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/5.png" alt=""></div>

                    <div class="catalog-set">Вес: 1 кг</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ Р 51865-2010</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Спагетти «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/6.png" alt=""></div>

                    <div class="catalog-set">Вес: 400 г</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ 31743-2012</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Спагетти «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/7.png" alt=""></div>

                    <div class="catalog-set">Вес: 1 кг</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ 31743-2012</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Спагетти «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/8.png" alt=""></div>

                    <div class="catalog-set">Вес: 2 кг</div>
                    <div class="catalog-set">Срок хранения: 24 мес</div>
                    <div class="catalog-set">ГОСТ 31743-2012</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Мука высший сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/9-10.png" alt=""></div>

                    <div class="catalog-set">Вес: 1 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                
            </section>
            
            <section class="catalog-page-4">
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Мука высший сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/9-10.png" alt=""></div>

                    <div class="catalog-set">Вес: 2 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Мука пельменная «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/11.png" alt=""></div>

                    <div class="catalog-set">Вес: 2 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Мука высший сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/12.png" alt=""></div>

                    <div class="catalog-set">Вес: 5 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Мука высший сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/13.png" alt=""></div>

                    <div class="catalog-set">Вес: 10 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Мука высший сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/14.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Мука высший сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/15.png" alt=""></div>

                    <div class="catalog-set">Вес: 50 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Мука первый сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/16.png" alt=""></div>

                    <div class="catalog-set">Вес: 2 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Мука первый сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/17.png" alt=""></div>

                    <div class="catalog-set">Вес: 5 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Мука первый сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/18.png" alt=""></div>

                    <div class="catalog-set">Вес: 10 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            <section class="catalog-page-4">
                
                <div class="catalog-box border-top-none border-bottom-none">
                    <div class="catalog-title">Мука первый сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/19.png" alt=""></div>

                    <div class="catalog-set">Вес: 25 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none border-bottom-none">
                    <div class="catalog-title">Мука первый сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/20.png" alt=""></div>

                    <div class="catalog-set">Вес: 50 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none border-bottom-none">
                    <div class="catalog-title">Мука второй сорт «Корона»</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-muka/21.png" alt=""></div>

                    <div class="catalog-set">Вес: 50 кг</div>
                    <div class="catalog-set">Срок хранения: 12 мес</div>
                    <div class="catalog-set">ГОСТ Р 52189-2003</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            
            <div class="catalog-paginator">
                <div class="catalog-dot-4 cf-active"></div>
                <div class="catalog-dot-4"></div>
                <div class="catalog-dot-4"></div>
            </div>

        </div>
        
        <div class="catalog-category">
            <section class="catalog-page-5 cf-active">

                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Молоко цельное сгущенное с сахаром</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/sgushenka-ekstra.png" alt=""></div>

                    <div class="catalog-set">Вес: 380 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set">ГОСТ 31688 - 2012 "Экстра"</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Сгущенка с сахаром Юбилейная</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/sgushenka-ubileiinaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 380 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Молоко цельное сгущенное с сахаром</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/sgushenka-gost.png" alt=""></div>

                    <div class="catalog-set">Вес: 380 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set">ГОСТ 31688 - 2012</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Сгущенка с сахаром Столичная</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/sgushenka-stolich.png" alt=""></div>

                    <div class="catalog-set">Вес: 380 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Молоко цельное сгущенное с сахаром</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/sgushen-perevert.png" alt=""></div>

                    <div class="catalog-set">Вес: 600 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set">ГОСТ 31688-2012</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Сливочки сгущенные с сахаром "Славянские"</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/slivochko-slavyanskie.png" alt=""></div>

                    <div class="catalog-set">Вес: 380 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Паштет Нежный из печени индейки </div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/nejnii-pashtet-indeika.png" alt=""></div>

                    <div class="catalog-set">Вес: 95 Г</div>
                    <div class="catalog-set">Срок хранения: 3 года</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Паштет Нежный из куриной печени</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/pashtet-semeini-budjet.png" alt=""></div>

                    <div class="catalog-set">Вес: 380 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Каша Губернаторская рисовая с говядиной</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/guber-kasha-310.png" alt=""></div>

                    <div class="catalog-set">Вес: 340 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            
            <section class="catalog-page-5">
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Сгущенка с сахаром "Птичье молоко"</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/sgushenka-ptichee.png" alt=""></div>

                    <div class="catalog-set">Вес: 270 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Каша Губернаторская гречневая с говядиной</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/kasha-grech-guber.png" alt=""></div>

                    <div class="catalog-set">Вес: 340 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Паштет Нежный из гусиной печени</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/pashtet-gusinoi-pecheni.png" alt=""></div>

                    <div class="catalog-set">Вес: 315 Г</div>
                    <div class="catalog-set">Срок хранения: 3 года</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Каша Губернаторская перловая с говядиной</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/guber-perl.png" alt=""></div>

                    <div class="catalog-set">Вес: 340 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Паштет Нежный из куриной печени</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/pashtet-kurinoi-pecheni.png" alt=""></div>

                    <div class="catalog-set">Вес: 315 Г</div>
                    <div class="catalog-set">Срок хранения: 3 года</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box">
                    <div class="catalog-title">Сгущенка вареная с сахаром</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/varenka-doipak-270.png" alt=""></div>

                    <div class="catalog-set">Вес: 270 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Сгущенка с сахаром "Птичье молоко"</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/ptichee-mologo-jb.png" alt=""></div>

                    <div class="catalog-set">Вес: 380 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Сгущенка Юбилейная с сахаром</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/sgushenka-ubileiinaya.png" alt=""></div>

                    <div class="catalog-set">Вес: 270 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Аджика грузинская </div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/adjika.png" alt=""></div>

                    <div class="catalog-set">Вес: 170 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
            </section>
            
            <section class="catalog-page-5">
            
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Черная смородина протертая с сахаром</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/varene-smorodina.png" alt=""></div>

                    <div class="catalog-set">Вес: 330 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Клюква протертая с сахаром</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/varene-klukva.png" alt=""></div>

                    <div class="catalog-set">Вес: 330 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-top-none">
                    <div class="catalog-title">Клубника протертая с сахаром</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/varene-klubnika.png" alt=""></div>

                    <div class="catalog-set">Вес: 330 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>
                
                <div class="catalog-box border-bottom-none">
                    <div class="catalog-title">Килька балтийская</div>
                    <div class="catalog-img"><img src="/assets/img/catalog-konserv/baltnevod.png" alt=""></div>

                    <div class="catalog-set">Вес: 240 Г</div>
                    <div class="catalog-set"></div>
                    <div class="catalog-set">ГОСТ 16978-99</div>
                    <div class="catalog-set"><button class="catalog-btn-mob jkc">заказать</button></div>

                    <div class="catalog-wrap">
                        <div class="catalog-btn-row"><button class="catalog-btn jkc">заказать</button></div>
                    </div>
                </div>    
                
            </section>
            
            <div class="catalog-paginator">
                <div class="catalog-dot-5 cf-active"></div>
                <div class="catalog-dot-5"></div>
                <div class="catalog-dot-5"></div>
            </div>

        </div>
        
    </section>

@endsection