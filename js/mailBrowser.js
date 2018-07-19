/*var counter = function(num){
	counter.count = num !== undefined ? num : counter.count;
	return counter.count++;
};

counter.count=0;

console.log(counter());
console.log(counter());
console.log(counter(500));
console.log(counter());

*/
var Person = {
	constructor: function(name, age, gender) {
		this.name = name;
		this.age = age;
		this.gender = gender;
		return this;
	},
	greet: function() {
		console.log("Hi, my name is " + this.name);
	}
};

var person, anotherPerson, thirdPerson;

person = Object.create(Person).constructor("John", 35, "male");
anotherPerson = Object.create(Person).constructor("JessicA", 28, "female");
thirdPerson = Object.create(Person).constructor("Bruce", 38, "male");

console.log(person.name);
console.log(anotherPerson.name);
console.log(thirdPerson.name);

person.greet();
anotherPerson.greet();
thirdPerson.greet();


var user = {
	name: "Frank",
	id: 3453443,
	lastVisit: Date.now(),
	friends: [2434, 7667, 6734],
	toJSON: function() {
		return {
			name: this.name,
			lastVisit: this.lastVisit
		}
	}
};

var userData = JSON.stringify(user);

console.log(userData);


var array = ["Some String", "Another String", "Third String"];

console.log(array.join());







