class Person{
    constructor(firstName, lastName, birthYear){
        this.firstName=firstName;
        this.lastName=lastName;
        this.birthYear=birthYear;
    }
    getData(){
        //return this.firstName+" "+this.lastName+"ma"+this.age()+"lat.";
        return{
            firstName: this.firstName,
            lastName: this.lastName,
            personAge: this.age()
        };
    }
    age(){
        return(new Date()).getFullYear()-this.birthYear;
    }
    static hello(){
        return "Cześć!";
    }
}

const osoba1=new Person("Adam", "Nowak", 1589);

console.log(osoba1.firstName);
console.log(osoba1.lastName);
console.log(osoba1.age());

let adam=osoba1.getData();
console.log(adam);
console.log(Person.hello());