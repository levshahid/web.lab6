$('document').ready(function() {

    var moved = 0; //переменная для определения  направления анимации(направо если 0 и наоборот)
    var numOfSelected = 0;//количество выбранных предпочтений
        numOfSelectedRestrict = false;//переменная для запрета вывода новых окон предпочтений

    var edu=false, //переменные, которые определяют, были ли эти категории выбраны
        sport = false,
        reading = false, 
        music = false,
        dance = false;
    
    $('.hosting').click(function() { //обработчик события клика по кнопке hosting
        setTimeout(function() {
            window.location.href = 'Lab6.HostingPage.php';
        })    
    })

    $('.header').click(function() { //обработчик события клика по главной картинке (переход на главную страницу)
        setTimeout(function() {
            window.location.href = 'Lab6.MainPage.php';
        }, 1 * 1000)   //таймер 1 секундa
    })

    $('.services').click(function() { //обработчик события клика по кнопке services
        setTimeout(function() {
            window.location.href = 'Lab6.ServicesPage.php';
        })
    })

    $('.support').click(function() { //обработчик события клика по кнопке support
        setTimeout(function() {
            window.location.href = 'Lab6.Support.php';
        })
    })

    

    $('.contact').click(function() { //обработчик события клика по кнопке contact
        alert('+380661488777 Шахид')//выскакивает сообщение браузера
    })

    $("#Учёба").click(function() { //выбор хобби учёба

        if(numOfSelected===3 && numOfSelectedRestrict === false) {//если уже есть три выбранных хобби, то выводит сообщение, что нельзя выбирать больше трех
            $('#nein').append("Нельзя выбирать больше 3-х!"); 
            numOfSelectedRestrict = true;//запрещает повторный вызов события
        }
        else if(edu===false && numOfSelectedRestrict === false){//если кнопка не нажималась еще и ввод не запрещен
            numOfSelected++;//количество выбранных хобии +1
            $('.selected').append("<div class='add1'>Учёба</div>");//добавление дочернего div 
            edu = true; //данная кнопка уже выбрана
        }
    })

    $('.selected').on('click', 'div.add1', function() {
        $(".add1").remove();//если нажали по сгенерированному div, то он удаляется
        if(numOfSelected === 3) {//разрешает заново выбирать хобби, если было запрещено
            numOfSelectedRestrict=false;
        }
        numOfSelected--;//количество выбранных хобии -1
        edu = false;//выбранная кнопка теперь выключена
        $('#nein').html("");//убирает сообщение о запрете ввода больше трех хобби
        
    })

    $('#Спорт').click(function() { //выбор хобби спорт
        if(numOfSelected===3 && numOfSelectedRestrict === false) {//дальше еще 4 точно таких же события клика и события удаления новых div
            $('#nein').append("Нельзя выбирать больше 3-х!"); 
            numOfSelectedRestrict = true;
        }
        else if(sport===false && numOfSelectedRestrict === false){
            numOfSelected++;
            $('.selected').append("<div class='add2'>Спорт</div>");
            sport = true; 
        }
    })

    $('.selected').on('click', 'div.add2', function() {
        $(".add2").remove();
        if(numOfSelected === 3) {
            numOfSelectedRestrict=false;
        }
        numOfSelected--;
        sport = false;
        $('#nein').html("");
        
    })

    $('#Чтение').click(function() { //выбор хобби чтение
        if(numOfSelected===3 && numOfSelectedRestrict === false) {
            $('#nein').append("Нельзя выбирать больше 3-х!"); 
            numOfSelectedRestrict = true;
        }
        else if(reading===false && numOfSelectedRestrict === false){
            numOfSelected++;
            $('.selected').append("<div class='add3'>Чтение</div>");
            reading = true; 
        }

    })

    $('.selected').on('click', 'div.add3', function() {
        $(".add3").remove();
        if(numOfSelected === 3) {
            numOfSelectedRestrict=false;
        }
        numOfSelected--;
        reading = false;
        $('#nein').html("");
        
    })

    $('#Музыка').click(function() { //выбор хобби музыка
        if(numOfSelected===3 && numOfSelectedRestrict === false) {
            $('#nein').append("Нельзя выбирать больше 3-х!"); 
            numOfSelectedRestrict = true;
        }
        else if(music===false && numOfSelectedRestrict === false){
            numOfSelected++;
            $('.selected').append("<div class='add4'>Музыка</div>");
            music = true; 
        }
    })

    $('.selected').on('click', 'div.add4', function() {
        $(".add4").remove();
        if(numOfSelected === 3) {
            numOfSelectedRestrict=false;
        }
        numOfSelected--;
        music = false;
        $('#nein').html("");
        
    })

    $('#Танцы').click(function() { //выбор хобби танцы
        if(numOfSelected===3 && numOfSelectedRestrict === false) {
            $('#nein').append("Нельзя выбирать больше 3-х!"); 
            numOfSelectedRestrict = true;
        }
        else if(dance===false && numOfSelectedRestrict === false){
            numOfSelected++;
            $('.selected').append("<div class='add5'>Танцы</div>");
            dance = true; 
        }
    })

    $('.selected').on('click', 'div.add5', function() {
        $(".add5").remove();
        if(numOfSelected === 3) {
            numOfSelectedRestrict=false;
        }
        numOfSelected--;
        dance = false;

        $('#nein').html("");
        
    })

    $('#nein').click(function() {//если нажать по сообщению, то оно исчезает
        $('#nein').html("");
        numOfSelectedRestrict=false;
    })
    

    $('.triangle').click(function() {//событие нажатия на треугольник на панели с кнопками

        var hexagons = document.querySelector('.hex');
        var hexBack = document.querySelector('.navi');

        var id = setInterval(move, 10);

        var count=0;

        function move() {//АНИМАЦИЯ!!!!!
            if (moved==0) {
                if(count==102) {
                    clearInterval(id);
                    //hexBack.style.width = '60.9%';
                    moved = 1;
                    count=0;
                }
                else {//через каждый интервал времени значение ширины для двух элементов меняется и это дает эффект передвижения шестиугольников направо (или обратно)

                    hexagons.style.width = String((parseFloat(hexagons.style.width.replace(/%/g, '') - 0.5))+'%');
                    hexBack.style.width = String((parseFloat(hexBack.style.width.replace(/%/g, '') - (-0.5)))+'%');
                    
                    count++;
                    
                }

            }
            else {
                if(count==102) {
                    clearInterval(id);
                    //hexBack.style.width = '60.9%';
                    moved = 0;
                }
                else {
                    
                    hexagons.style.width = String((parseFloat(hexagons.style.width.replace(/%/g, '') -(-0.5)))+'%');
                    hexBack.style.width = String((parseFloat(hexBack.style.width.replace(/%/g, '')  - 0.5))+'%');
                    
                    count++;
                    
                }

            }
        }

        
    
    })  

    let ban1 = document.querySelector('#firstInput');//запрет ввода чисел и пробелов в начале строки

    ban1.oninput = function() {
        if(ban1.value===' ') {
            this.value = this.value.replace(' ', '');
        }
        this.value = this.value.replace(/[0-9]/, '');
    }

    let ban2 = document.querySelector('#secondInput');

    ban2.oninput = function() {
        if(ban2.value===' ') {
            this.value = this.value.replace(' ', '');
        }
        this.value = this.value.replace(/[0-9]/, '');
    }

    let ban3 = document.querySelector('#thirdInput');

    ban3.oninput = function() {
        if(ban3.value===' ') {
            this.value = this.value.replace(' ', '');
        }
        this.value = this.value.replace(/[0-9]/, '');
    }
})

function isnotnull() {
    var form = document.getElementsByTagName('form')[0];
    var func1 = document.getElementsByClassName("info1");
        style1 = func1[0].style;//стили для первого слова в меню слева

        func2 = document.getElementsByClassName("info2");
        style2 = func2[0].style;//второе слово

        func3 = document.getElementsByClassName("info3");
        style3 = func3[0].style;//третье слово

        inp1 = document.querySelector('#firstInput');//первое поле ввода
        inp2 = document.querySelector('#secondInput');//второе поле ввода
        inp3 = document.querySelector('#thirdInput');//третье поле ввода

    if(inp1.value!=='' && inp2.value!=='' && inp3.value!=='') {
        alert("Saved!");//если все поля заполнены, то выскакивает сообщение браузера
        return true;
    }
    else {//иначе подсвечивает красным пустое поле 
        if(inp1.value==='') {
            style1.color = "#eb4040";
            inp1.style.borderColor = "#eb4040";
            inp1.style.backgroundColor = "#f0a8a8";
            

            setTimeout(function() {
                style1.color = "#000000";
                style2.color = "#000000";
                style3.color = "#000000";

                inp1.style.borderColor = "#2d4758";
                inp1.style.backgroundColor = "#c2d2ea";
            }, 3*1000)
        }

        if(inp2.value==="") {
            style2.color = "#eb4040";
            inp2.style.borderColor = "#eb4040";
            inp2.style.backgroundColor = "#f0a8a8";

            setTimeout(function() {
                style1.color = "#000000";
                style2.color = "#000000";
                style3.color = "#000000";

                inp2.style.borderColor = "#2d4758";
                inp2.style.backgroundColor = "#c2d2ea";
            }, 3*1000)
        }

        if(inp3.value==="") {
            style3.color = "#eb4040";
            inp3.style.borderColor = "#eb4040";
            inp3.style.backgroundColor = "#f0a8a8";

            setTimeout(function() {
                style1.color = "#000000";
                style2.color = "#000000";
                style3.color = "#000000";

                inp3.style.borderColor = "#2d4758";
                inp3.style.backgroundColor = "#c2d2ea";
            }, 3*1000)
        }
        
    }
    return false;
}
