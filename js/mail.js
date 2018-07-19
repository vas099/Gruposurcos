
// Простые типы

var myNumber = 2424,
	myString = "Some string",
	myBool = true,
	myNull = null,
	myUndef = undefined;


// Обьектные типы

var obj = {name: "sorax"},  //обьекты 
	array = [1,2,3],		//массивы
	regexp = /w+/g,			//регулярные выражения
	func = function(){};	//функция

//Оператор присваивания
var a, b, c, d;
a = b = c = d = 5; //присваивается значение сначала d, пото с,b,a (поскольку парсер "читает" слева-направо)

//Условный оператор (тернарный)
//test ? выражение2 : выражение3
var x = 15;
var text = x > 10 ? "х больше десяти" : "х меньше либо равен десяти";

//Лучше записывать так:
var x = 5;
	text = x > 10 ? "х больше десяти" : "х меньше либо равен десяти" : "х равен десяти"

//либо через if и else

// Оператор , (запятая)
// выражение, выражение
// он сначала вычесляет левый операнд, потом правый и присваивает значение правого операнда
var test = (15,20);
//присвоится значение 20

//ЦИКЛЫ

// for (инициализация; тест; инкремент) тело цикла
var i;
for (var i = 0; i < 10; i++)

//цикл while (выражение) инструкция
var i = 10;
while (i--)

//ФУНКЦИИ

function индификатор (аргументы) {
	инструкция
	return выражение
}

// лучше записывать следующим образом
var greet = function(name) {
	return "Hello" + name;
};
// выражение (аргументы)

// вызов функции в функции
var func = function(callback) {
	var name = "Sorax";
	callback(name);
};

func(function(n){
	("Hello" = n);
});

//
var greeting = (function(name) {
	return "Hello" + name;
}("Sorax"));

// Глобальные переменные
var i = 5;

//Локальная переменная
var func = function() {
	var i = 10;
};

//Замыкания
var counter = (function(){
	var count = 0;
	return function(){
		return count++;
	}
}());

//другой пример
var counter = function(num){
	counter.count = num !== undefined ? num : counter.count;
	return counter.count++;
};

counter.count=0;

//ИСКЛЮЧЕНИЯ
//Инструкця throw
// throw выражение
throw "Hello"

// инструкция try
try {
	инструкции
} catch (индификатор) {
	инструкции
}finally {
	инструкции
}

//ОБЪЕКТЫ
var person = {
	name: "Sorax",
	age: 20,
	gender: "male"
}
person.name

//выражение идентификатор

// выражение [выражение]

var object = new Object();
object.property = "value";

//или
var object = Object.create({x: 10, y:20});
object.x = 20;

//delete выражение
delete object.x


//Аксессоры и атрибуты свойств
var person = {
	name: "Sorax",
	_age: 20,
	get age(){
		return this._age;
	},
	set age(value){
		this._age = value;
	}
};

//Прототипы и наследование
var ObjectProto = {
	name: "Sorax"
};

var object = Object.create(ObjectProto);

//Пример создания прототипа для нескольких объектов, чтобы постоянно не прописывать одни и теже свойства
var Person = {
	constructor: function(name, age, gender) {
		this.name = name;
		this.age = age;
		this.gender = gender;
		return.this;
	},
	greet: function() {
		"Hi, my name is " + this.name;
	}
};

var person, anotherPerson, thirdPerson;

person = Object.create(Person).constructor("John", 35, "male"):
anotherPerson = Object.create(Person).constructor("JessicA", 28, "female"):
thirdPerson = Object.create(Person).constructor("Bruce", 38, "male"):

person.greet();
anotherPerson.greet();
thirdPerson.greet();

//КОНСТРУКТОРЫ И КЛАССЫ

var Person, person, anotherPerson;

Person = function(name) {
	this.name = name;
};

Person.prototype.greet = function() {
	console.log("Hello, my name is " + this.name);
};

person = new Person("Jack");

anotherPerson = new Person("Bruce")

//ЦЕПНЫЕ ВЫЗОВЫ МЕТОДОВ

//JSON   метод преобразования обьектов(данных) в строку

var user = {
	name: "Frank",
	id: 3453443
};

var userData = JSON.stringify(user);

//МАССИВЫ 
var array = [1,2,3];

var months = [ "January", "February", "March", "April"];

months[4] = "May";

//length - длинна массива (количество элементов в массиве + 1)
var array = ["Some String", "Another String", "Third String"];

console.log(array.join());

// свойства - join, выводит массив через запятую
			//sort - сортирует массив по алфавиту
			//concat - позволяет добавлять другие элементы в массив
			//slice - 
			//splice - применяется для удаленния и добавления элементов в массив
			//splice(1, 1, "Text1", "Text2") 
				//1 - индекс элементу, который нужно удалить
				//1 - кол-во элементов, которые нужно удалить
				//Text - наименование элементов, которые нужно вставить (заменить)
			// push - вставляет элемент в конец массива
			//unshift - добавляет элемент в начало массива

//ES5 методы массивов (не изменяют массив!!)
var array = ["Some String", "Another String", "Third String", "JavaScript", "Sorax"];

array.forEach(function(element, index, array){
	array[index] = element.toUpperCase(); //присваиваем верхний регистр
});
//метод map - короче предыдущего

var array = ["Some String", "Another String", "Third String", "JavaScript", "Sorax"];
console.log(array.map(function(e){return e.toUpperCase()}));

// метод filtered позволяет отсеивать элементы массива по какому-нибудь критерию

//ОБЪЕКТ Math
//КЛАСС date

//ВЫПОЛНЕНИЕ JS В БРАУЗЕРЕ

//ОБЪЕКТ Window 

//Location 

//DOM











