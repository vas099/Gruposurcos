/*function demoOpen(openParamStr){
	//open ("http://www.google.ru") - открытие в новом окне(вкладке) без параметров
	open ("http://www.google.ru",
		" myWindows",//внутреннее название открывающегося окна(любое!)
		"width=800, height=400, top=200, left=500, status=1, location=1, menubar=0, toolbar=1, scrollbars=1, resizable=1, fillscreen=0")//задаем параметры открывающемуся окну
}https://www.youtube.com/watch?v=6xVe8HthQTc

function pow2(){
	var num1=document.getElementById("inp1").value;
	alert(num1*num1);
}

var prim, num2;

	prim=12;
	prim="Hello!";
	num2=9;
alert (prim*num2);
*/

/*function plus(){
var num3, num4, result;
	num3 = document.getElementById("inp2").value;
	num3 = parseInt(num3);

	num4 = document.getElementById("inp3").value;
	num4 = parseInt(num4);
	
	result = num3+num4;

	document.getElementById("out").innerHTML = result;
}

function minus(){
var num3, num4, result;
	num3 = document.getElementById("inp2").value;
	num3 = parseInt(num3);

	num4 = document.getElementById("inp3").value;
	num4 = parseInt(num4);
	
	result = num3-num4;

	document.getElementById("out").innerHTML = result;
}*/

/*function out(){
	var p;
	p = document.getElementById("out")
	//добавить информацию к тексту
	//p = document.getElementById("out")
	//p.innerHTML += " <b>Hello!</b>";
	//p.innerText += " <b>Hello!</b>"; //тэги <b> в данном случаи не сработают и выведутся на экран!
	//p.insertAdjacentHTML("beforeBegin", "Hi");
	//beforeBegin - вставляет новую информацию перед открывающим тэгом (<p>)
	//p.insertAdjacentHTML("afterBegin", "Hi"); 
	//afterBegin - вставляет инфу после открывающего тэга(<p>) перед текстом
	//beforeEnd - вставляет инфу перед закрывающим тэгом (</p>), послтекста в его поле
	//afterEnd - вставляет инфу после закрывающего тэга (</p>)
	p.outerHTML = "<div class='one'>hello</div>";
	//outerHTML - заменяет полностью весь параграф (<p>...</p>) на новый
}*/

/*var a, b;
	a = 8;
	b = 8;

if (a>b) {
	alert ("Первое число больше");
}
else if (a==b) {
	alert ("Числа равны");
}
else {
	alert ("Второе число больше");
}*/

/*function f1(){
	var n,p;
	n = document.getElementById("num6").value;
	p = document.getElementById("out3");
	n = parseInt(n);
	if (n==100){
		p.innerHTML = "Число равно 100";
	}
	else if (n<100) {
		p.innerHTML = "Число меньше 100";
	}
	else {
		p.innerHTML = "Число больше 100";
	}
}*/
/*
function f1(){
	var p;
	p = document.getElementById("out");
	// цикл заданного кол-ва повторений
	for (var i=0; i<100; i++){
		p.innerHTML += i + " ";
	}
}*/

/*function f1(){
	var p;
	p = document.getElementById("out");
	p1 = document.getElementById("out1");
	
	var i=0; //счетчик цикла
	while (i<50) {   //условие выполнения цикла
		p.innerHTML += i + " ";  //тело цикла
		i++;					// условие пррирасщения цикла
	}

	var j=100;
	do {
		p1.innerHTML += j + " ";
		j=j-2;
	}
	while (j>30);
}*/

/*var m = [];
var m1 = [99, 33, "Hello"] //значения массива, выводятся при помощи Индекса массива (всегда нач с 0)!!
m1[3] = 444; //добавление в массив нового элемента под индексом 3
m1[4]= 44444;
console.log (m1);
//alert (m1.length);

//for (var i = 0; i < m1.length; i++) {
//	document.getElementById("out").innerHTML += m1[i] + "<br>";
//}

function masOut (){
	var p = document.getElementById("out");
	var str = "";
	for (var i = 0; i < m1.length; i++) {  // length - длинна массива
		str += i + " --- " + m1[i] + "<br>";
	}
	p.innerHTML = str;
}

masOut();

function p1 (){
	var i1 = document.getElementById("i1").value;
	m1.push(i1);  //push - добавляет элемент в массив
	masOut();
}
function p2 (){
	m1.pop();  //pop - удаляет последний элемент из массива
	masOut();
}*/

//document.getElementById("slider-left").onclick = sliderLeft; // Запуск по нажатию кнопки
/*autoSlider();
var left = 0;
var timer;

function autoSlider(){
	//timer = setTimeout (sliderLeft, 1000); меняем sliderLeft на функцию без имени в вносим в ее значение блок функции sliderLeft!
	timer = setTimeout (function(){
		var polosa = document.getElementById("polosa");
		left = left - 128;
		if (left < -512){
			left = 0;
			clearTimeout(timer);
		}
		polosa.style.left = left +"px";
		autoSlider();
	}, 1000);
}*/
/*function sliderLeft(){
	var polosa = document.getElementById("polosa");
	left = left - 128;
	if (left < -512){
		left = 0;
		clearTimeout(timer);
	}*/

/*var p = document.getElementsByTagName("p");
var one = document.getElementsByClassName("one");
console.log(p);
//p.onclick = f1; не работает!!
for (var i = 0; i < p.length; i++) {
	p[i].onclick = f1;
}
for (var i = 0; i < one.length; i++) {
	one[i].onclick = f2;
}
function f1(){
	//alert("hello");
	console.log(this);
	this.style.background = "green";
}    
function f2(){
	this.style.fontWeight = "bold";
}*/

/*var radio = document.getElementsByName("fruit");

for (var i = 0; i < radio.length; i++) {
	radio[i].onchange = testRadio;
}

function testRadio(){
	console.log (this.value);
}

document.getElementById("one").onclick = checkRadio;

function checkRadio(){
	var m = document.getElementsByName("fruit");
	for ( var i = 0; i < m.length; i++) {
		if ( m[i].checked ) {
			alert( m[1].value );
			break;
		}
	}
}*/

/*document.getElementById("r1").oninput = cssGenerator;

function cssGenerator(){
	//прямоугольник
	var div = document.getElementById("test");
	//получаю textarea
	var out = document.getElementById("out");
	//console.log(this.value);
	div.style.borderRadius = this.value + "px";
	//border-radius: 30px;
	out.innerHTML = "-webkit-border-radius: "+this.value+"px;\n";
	out.innerHTML += "border-radius: "+this.value+"px";
}*/

//var m=[4,12, "hello"]; обычный массив
//console.log(m[2]);

/*
//обьявляем АССОЦИАТИВНЫЙ массив
var m = {};
var n = {
	"one" : 12,     // ключ : значение
	"hello" : "world",
	"prim" : 2000,
	"double key" : 777
};
n.hello = 909809;
//console.log(n["prim"]);  способ №1 (для вывода значения массива)
//console.log(n.hello);//способ №2
//console.log(double key); - ошибка из-за пробела!
console.log( n["double key"] );
var ppp = "prim";
console.log(n[ppp]); //n.ppp - ошибка
var out = document.getElementById( "out");
for (var key in n) {  // key - название переменной (любое), in  -обязательно!!! (берет из), n - название массива
	out.innerHTML += key + " --- " +n[key]+ "<br >";//.innerHTML - вставляет инфу в парный тэг HTML
}*/

 /*var man = {
	"name" : "Jose",
	"age" : 67,
	"id" : "56787",
	"sex" : "male"
};

var man2 = {
	"name" : "Jose",
	"age" : 50,
	"id" : "56787",
	"sex" : "male",
	"year" : function(){
		return 2018 - this.age;
	}
};


//console.log(man);
//console.log(man.name); //для вывода конкретного значения - наим.масиива.(точка!)конкретный ключ
//console.log(man["name"]); // 2-й способ вывода
//var a = "name"          // 3-й способ - через переменную
//console.log(man[a]);  //переменная без кавычек!

console.log ( man2.year() );


var m = {
	"mas" : [5, 6, 34, 12, 45],
	"sum" : function(){
		var sum = 0;
		for (var i = 0; i < this.mas.length; i++) {
			sum = sum + this.mas[i];
		}
		return sum;
	}
}

console.log(m.sum());*/


/*//СОЗДАЕМ СТРАНИЦУ ИНТЕРНЕТ-МАГАЗИНА

var goods = {
	"28292" : {
		"name" : "Банан",
		"cost" : 30,
		"img" : "https://cdn3.iconfinder.com/data/icons/veggies/128/bananas.png",
		"sklad" : "Да"
	},
	"23729" : {
		"name" : "Помидор",
		"cost" : 40,
		"img" : "https://cdn0.iconfinder.com/data/icons/fruits/128/Tomato.png",
		"sklad" : "Да"
	},
	"23654" : {
		"name" : "Яблоко",
		"cost" : 25,
		"img" : "https://cdn4.iconfinder.com/data/icons/X-Mac/education_icons/png/128/teachers_day.png",
		"sklad" : "Да"
	}
};

console.log(goods);
var out = "";
for (var key in goods) {
	out += "Название: " + goods[key].name + "<br>";
	out += "Цена: " + goods[key].cost + "<br>";
	out += "Наличие на складе: " + goods[key].sklad + "<br>";
	out += "<img src='"+goods[key].img+"'>";
		//  <img src=""> - вставили картинку
	out+="<hr>";
}
document.getElementById("out").innerHTML = out; */

//ФУНКЦИИ

/*function one(){
	alert ("Hello");
};
//one();  //вызов функции - можно располагать как и до, так и после самой функ-и
//one();  //можно вызывать несколько раз
//function one (){
//	return 9; //return - окончание действия функции
//};
//console.log ( 8 + one());

function summa (a,b){
	var c = 50;  // в данном случаи переменная С будет действовать только внутри функции (до return!!!)
	a = a || 10;  // undefined или 10
	b = b || 20;
	//return (a+b);
	alert (a+b);
}
//console.log (summa (4, 5)); // если один из или оба параметра не передаются, то присваивается значение из условия а = (в данном примере 10)
//document.getElementById("one").onclick = summa; - так не сработает!!
document.getElementById("one").onclick = function () { //вызов через "анонимную" функцию!
	summa (12, 6);
}*/

/*var block = document.getElementById("one");
// клик мышью
//block.onclick = function(){
//this.style.background = "green";
//	this.onclick = null;
//}

//двойной клик мышью
//block.ondblclick = function (){
//	this.style.background = "red";
//}

//вывоз контекстного меню (правая кнопка мыши)
block.oncontextmenu = function (){
	this.style.background = "black";
	return false;
}
//document.oncontextmenu = function (){
//	return false; //запрещвем вызов контекстного меню на всем документе
//}

// наведение мышью на элемент
//block.onmouseenter = function (){
//	console.log("in!!!");
//	this.style.background = "gold";
//}
//мышь уходит с элемента
//block.onmouseleave = function (){
//	this.style.background = "orange";
//}

//движение мышью внутри блока
//var a=0;
//block.onmousemove = function (){
//	a++;
//	this.style.width = 100 + a + "px";
//}

//нажимаем и держим кнопку мыши (любую)
block.onmousedown = function (event){
	this.style.background = "cyan";
	console.log("button:" +event.button);
	console.log("which:" +event.which);
}
//отпускаем кнопку мышки внутри блока
block.onmouseup = function (){
	this.style.background = "gray";
}*/


/*если картинка загружена в HTML
//var cat = document.getElementById("cat");
//
//document.onmousemove = function(event){
//	cat.style.position = "fixed";
//	cat.style.left = event.clientX + 20 + "px";
//	cat.style.top = event.clientY + 20 + "px";
//}

//загружаем картинку при помощи JS!
document.onmousemove = function (){
	document.getElementsByTagName("body")[0].insertAdjacentHTML("beforeEnd", "<img src = 'https://cdn0.iconfinder.com/data/icons/streamline-emoji-1/48/096-grinning-cat-face-48.png' id = 'cat'>");
	var cat = document.getElementById("cat");
	cat.style.position = "fixed";

	document.onmousemove = function(event){
	cat.style.left = event.clientX + 20 + "px";
	cat.style.top = event.clientY + 20 + "px";
	}
}*/

/*document.getElementById("portret").onmousemove = function (event){
	var x = event.offsetX;//относительно родителя!
	document.getElementById("two").style.width = x + "px";
}

document.getElementById("portret").onmouseleave = function (event){
	document.getElementById("two").style.width = "600px";
}*/

/*var sdvig = 0;
var timer;

var test = document.getElementById("test");
//setInterval (function_name, time)
move();
function move(){                         //функция сдвига элемента
	test.style.marginLeft = sdvig + "px";
	sdvig= sdvig +10;
	timer = setTimeout(move, 50); //вызов анимации через setTimeout
}

//var timer =  setInterval (move, 50);  //1s = 1000 ms

document.getElementById("stop").onclick = function(){
//	clearInterval (timer);
	clearTimeout(timer);
}

//setTimeout(move, 5000);*/

/*
//ОБРАТНЫЙ ОТЧЕТ ТАЙМЕРА
var sdvig = 0;
var timer;

var test = document.getElementById("test");

function move(){
	test.style.marginLeft = sdvig + "px";
	sdvig= sdvig +10;
	timer = setTimeout(move, 50); 
}


document.getElementById("stop").onclick = function(){
	clearTimeout(timer);
}

var a = 10;
obr();
function obr(){
	document.getElementById("out").innerHTML = a;
	a--;
	if (a<0){
		clearTimeout(timer);
		alert("Таймер отключен");
	}
	timer = setTimeout(obr, 1000);
}*/

//document.onkeypress = function(event){
//	console.log(event.key);
//}

/*document.querySelector("#menu").onmouseover = menuShow;
document.querySelector("#menu").onmouseout = menuHide;

document.onkeydown = function(event) {
	if (event.code == "KeyM") menuShow();
	if (event.code == "Escape") menuHide();
}


function menuShow(){
	document.querySelector("#menu").style.left = 0;
}

function menuHide(){
	document.querySelector("#menu").style.left = "-230px";
}*/

//ПИШЕМ СИСТЕМУ ВКЛАДОК!!
/*
document.querySelector(".tabs-header").addEventListener("click", fTabs);

function fTabs(event) {
	console.log(event);
	if (event.target.className == "tab-h"){
		//dataTab - номер вкладки, которую нужно отобразить
		var dataTab = event.target.getAttribute("data-tab");
		//отключаем класс active!
		var tabH = document.getElementsByClassName("tab-h");
		for (var i=0; i < tabH.length; i++){
			tabH[i].classList.remove("active");
		}
		event.target.classList.add("active");
		//все вкладки с содержимым
		var tabBody = document.getElementsByClassName("tabs-b");
		for (var i = 0; i < tabBody.length; i++) {
			if (dataTab==i) {
				tabBody[i].style.display = "block";
			}
			else {
				tabBody[i].style.display = "none";
			}
		}
	}
}*/
//ДЕЛАЕМ ОДИНАКОВУЮ ВЫСОТУ КОЛОНОК - начальный вариант (1)
/*function equalHeight(){
	document.querySelector(".left").style.height = "auto";
	document.querySelector(".right").style.height = "auto";
	var left = document.querySelector(".left").offsetHeight;
	var right = document.querySelector(".right").offsetHeight;
	var max = Math.max(left, right);
	document.querySelector(".left").style.height = max +"px";
	document.querySelector(".right").style.height = max +"px";
}
equalHeight();

window.onresize = equalHeight;*/

//вариант 2 - сокращенная запись
/*var left = document.querySelector(".left");
var right = document.querySelector(".right");
function equalHeight(){
	left.style.height = "auto";
	right.style.height = "auto";
	var leftH = left.offsetHeight;
	var rightH = right.offsetHeight;
	var max = Math.max(leftH, rightH);
	left.style.height = max +"px";
	right.style.height = max +"px";
}
equalHeight();

window.onresize = equalHeight;*/

//смотрим на каком устройстве просматривает страницу user

//ocument.querySelector("#out").innerHTML = navigator.userAgent;
//	console.log(navigator);

//РАБОТАЕМ С DOM

//var div4 = document.getElementById("four4"); // 1 элемент
//var p = div4.getElementsByTagName("p");
//var div = document.getElementsByTagName("div"); //всегда массив
//var p = document.getElementsByClassName("test"); //всегда массив
//console.log(p);
//div[2].style.background = "yellow";
//---------------------
//var div = document.querySelector("#four4 p"); //достаем параграф "р" из div c id=four4
//var div2 = document.querySelectorAll("div p");  // все параграфы из div, содержащих р
//console.log(div2);
//----------------------
//four4.style.background = "red"; //укрощенная запись через id="four4"

var div = document.querySelector("div")//первый div
var child = div.childNodes;  // содержимое первого div в виде массива вместе с стекстами
//console.log(div.firstChild); // первый элемент div
//console.log(div.lastChild); // последний элемент div
child = div.children;
//console.log(child); //получаем только вложенные элементы без текстов!!

var hyper = document.querySelector("a");
//console.log(hyper.parentElement); //получаем родительский элемент (div) по гиперссылке (а)
console.log(hyper.parentElement.nextElementSibling); //следующий элемент (div) в body
console.log(hyper.parentElement.previousElementSibling); //предыдущий элемент (div) в body








