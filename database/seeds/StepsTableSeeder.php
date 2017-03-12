<?php

use Illuminate\Database\Seeder;

class StepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert([
            [
                'recipe_id' => '1',
                'body' => 'Заготовьте овощи. Для этого тщательно их помойте, лук и чеснок очистите, с помидор удалите кожицу, с фасоли – твердые хвостики, а с перцев – сердцевину. Затем порежьте чеснок тонкими пластинками, лук – полукольцами, перец – соломкой, помидоры – кубиками, фасоль – кусочками, длиной около двух сантиметров.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Обжарьте лук, перец и чеснок около четырех минут в сковороде с разогретым маслом. Потом положите к ним рис и шафран, постоянно помешивая, жарьте их порядка трех минут на большом огне.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '1',
                'body' => 'Добавьте бульон и помидоры, доведите смесь до кипения и тушите четверть часа на слабом огне. Далее положите фасоль, перец и соль, выдержите паэлью с овощами на небольшом огне еще около десяти минут.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Поставить казан на сильный огонь, прогреть, аккуратно по стеночке налить 300-400 мл подсолнечного масла, либо вытопить курдючный жир. В раскаленное масло бросить целую очищенную и сухую луковицу, и со всех сторон ее обжарить. Мясо нарезать крупными кусками по 5-10 см, промыть и обсушить бумажным полотенцем, из масла шумовкой выловить луковицу, выбросить ее, и аккуратно выложить в раскаленное масло куски мяса, накрыть казан крышкой.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Нарезать некрупные луковицы на 4 части, очистить морковь и нарезать ее соломкой или брусочками. Выложить лук в казан, убавить огонь до среднего и накрыть крышкой, после этого добавить в казан морковь (не перемешивать), накрыть крышкой и потушить все до мягкости моркови. Приправить содержимое казана солью, специями для плова, поперчить, обжаривать продукты со специями 5-10 мин.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'В казан налить кипяток – он должен покрыть содержимое на 1 см, сделать сильный огонь, накрыть крышкой и прокипятить все 5-7 мин, добавить стручок целый острого перца, целые головки чеснока, накрыть крышкой и проварить все еще 5-7 мин. Попробовать содержимое казана на вкус – оно должно быть немного пересоленным. Добавить в казан промытый рис, долить кипяток – вода должна покрыть рис на 1 см, накрыть казан крышкой, сделать максимальный огонь, довести плов до выпаривания воды.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '2',
                'body' => 'Когда вода выпарится, тыльной стороной шумовки или любого другого прибора с длинной ручкой сделать в плове ямки до самого дна казана (узкие длинные ямки), таких ямок должно быть до 10 штук равномерно по всей площади содержимого казана. В ямки в плове налить кипяток (наполняя ямки на половину-две трети), накрыть казан крышкой, сделать медленный огонь и готовить плов еще 20-30 мин. Готовый плов перемешать, чтобы все слои продуктов смешались, выложить на большое блюдо, посыпать зеленью.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'В большой сковороде поджарьте лук. Отложите. На той же сковороде поджарьте фарш, пока он не покоричневеет, разбивая его лопаточкой. Добавьте в фарш 500 мл томатного соуса и тушите 5 минут. В конце добавьте поджаренный лук, соль по вкусу и перемешайте.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Пока готовится мясная начинка, натрите сыр, и сварите макароны в большой кастрюле подсоленной воды. Варите около 8 минут.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Разогрейте духовку до 180 C. Смажьте сливочным маслом прямоугольную форму для выпечки. В форму выложите слоями: половина макарон, стакан тертого сыра, сметана, половина мясной начинки, снова макароны, стакан сыра, мясная начинка. Залейте сверху второй банкой томатного соуса. Сверху посыпьте тертым сыром Пармезан.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '3',
                'body' => 'Выпекайте 30 минут в разогретой духовке, или пока сыр сверху не расплавится.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Зачистить куриную грудку от жира и пленки. Отправить в кастрюлю, залить водой и отправить на огонь, варить до полной готовности мяса (20 минут). Куриное мясо достать из кастрюли и остудить, затем измельчить небольшими кусочками.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Поставить сковороду на огонь, выложить в нее кусочек сливочного масла, растопить. Очистить луковицу, затем нарезать небольшими кусочками произвольной формы и отправить на раскаленную поверхность. Обжарить лук до мягкости, затем добавить кусочки курицы, перемешать и готовить еще 5 минут.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Влить сливки (10% жирности), перемешать и накрыть крышкой, готовить на слабом огне 3-5 минут. В отдельной кастрюле в подсоленной воде отварить спагетти до готовности, затем откинуть их на дуршлаг.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '4',
                'body' => 'Готовые спагетти переложить на сковороду к луку и курице, перемешать и прогреть еще пару минут. Перед подачей посыпать спагетти прованскими травами и подать блюдо со свежими овощами.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'Отварить куриную грудку. Пока она варится, необходимо хорошо промыть гречку. Порезанный лук с нашинкованной соломкой морковью обжарить на сковороде. Картошку порезать соломкой, как и морковь.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '5',
                'body' => 'В куриный бульон добавить гречку и варить ее до полуготовности около 15 минут, затем добавить поджарку, а через 10 минут — картошку и порезанные помидоры. Как только картофель будет готов, суп можно есть.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'На водяной бане растопить 125 грамм сливочного масла, добавить сахар, мед, размешать и нагревать, периодически помешивая. Нужно чтобы масса стала однородной.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Добавить разрыхлитель (если под рукой разрыхлителя нет, подойдет сода в том же объеме) и мешать до тех пор, пока масса не побелеет. Снять с бани и остудить.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Добавить яйца и хорошо размешать. Затем аккуратно ввести муку и замесить мягкое тесто. Разделить на 6-8 частей и раскатать коржи (удобнее всего раскатывать тесто прямо в форме, это можно сделать ложкой, размяв его по дну, так как тесто слишком мягкое и может прилипать к скалке). Выпекать коржи в нагретой до 170-180 градусов духовке примерно 5-10 минут.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Для крема 300 грамм размягченного сливочного масла взбить миксером до получения пышной массы. Затем, не прекращая взбивать, добавить в масло небольшими порциями вареное сгущенное молоко и снова взбить все вместе до получения пышной однородной массы.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '6',
                'body' => 'Готовые коржи сложить друг на друга и ровно обрезать края с помощью ножа. Промазать коржи кремом и сложить один на другой, последний верхний корж также обмазать кремом, бока торта — тоже. Украсить толчеными грецкими орехами.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Кладем печенье в пару пакетов и размалываем в не очень мелкую крошку. В печенье добавляем мелко порубленное и сильно охлажденное сливочное масло и тщательно перемешиваем.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Выкладываем получившуюся массу в форму и формируем бортики высотой около 2-х сантиметров. Тесто надо распределить как можно ровнее. Ставим форму в разогретую до 180 градусов духовку на 15 минут.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Пока запекается основа, приготовим начинку. Для этого взбиваем желтки и добавляем в них сгущенку. Продолжая взбивать, добавляем сок половинки лимона.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Достав из духовки форму, выкладываем начинку на основу. Равномерно распределяем и опять отправляем в духовку на 10 минут.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '7',
                'body' => 'Достав из духовки, украшаем ягодами, фруктами или взбитыми сливками по своему вкусу.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'Гречку промыть, подсушить на сковороде, смазанной маслом.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'Обжарить мелко порезанный лук, фарш и натертую на крупной терке морковь до золотистого цвета. Добавить томатную пасту, тщательно перемешать.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '8',
                'body' => 'ПК мясу и овощам выложить гречку, залить кипятком так, чтобы гречка была слегка прикрыта водой. Посолить. Тушить на медленном огне под крышкой. В готовую гречку добавить мелко порезанный чеснок, перемешать. Можно добавить черный молотый перец и лавровый лист.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Отварить макароны (желательно спиралевидные, с ними салат выглядит аппетитнее) в подсоленной воде, без масла, вынуть и просушить немного от воды. Макароны должны быть слегка жестковаты («по-итальянски»), т.к. могут еще немного разбухнуть в салате.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Ветчину, соленый огурчик (либо корнишоны, в этом случае их можно использовать штуки 2-4 в зависимости от размера), помидоры, предварительно отваренные яйца нарезать тонкой длинной соломкой.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Мелко покрошить укроп, на крупной терке натереть сыр.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '9',
                'body' => 'Все подготовленные ингредиенты смешать, добавить по вкусу майонез.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Отделить белки от желтков. Белки убрать в холодильник, а желтки выложить в глубокую и широкую миску, добавить к ним сахар, пару щепоток молотой корицы и растереть до однородной массы.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Влить небольшой струйкой в миску полный стакан молока и смешать с яично-сахарной смесью венчиком, стараясь при этом не взбивать жидкость до образования пены.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Аккуратно всыпать в яично-молочную смесь просеянную муку, не переставая помешивать венчиком. Добавить соду, гашенную уксусом. Осторожно перемешать.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Вымесить венчиком однородное густое тесто, по возможности максимально разбивая образовавшиеся комочки. По консистенции масса должна напоминать густую сметану.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'В охлажденные белки добавить щепотку соли и взбить венчиком в крутую пену. Если под рукой есть миксер, то лучше воспользоваться им — на высоких оборотах весь процесс займет не больше минуты.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Бережно, силиконовой лопаткой или деревянной ложкой, постепенно вмешать взбитые белки в тесто, стараясь не повредить их хрупкую текстуру. Широкую сковороду с антипригарным покрытием смазать половиной чайной ложки сливочного масла и разогреть на умеренном огне.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Вылить на сковороду два полных половника теста — один половник на один блинчик. Печь примерно полторы минуты, затем перевернуть и подрумянить с другой стороны. Переложить на блюдо, а на сковороду вылить следующую порцию теста.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'recipe_id' => '10',
                'body' => 'Добавлять в сковороду масло при этом больше не нужно: все остальные блинчики должны не жариться, а печься на слабом огне до приобретения легкого равномерного румянца. Готовые панкейки выложить на блюдо, смазать оставшимся сливочным маслом и сразу подавать.',
                'created_at' => date('Y-m-d H:i:s')
            ],
            
        ]);
    }
}
