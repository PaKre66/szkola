class Person{
    constructor(firstName, lastName, birthDate){
        this.firstName=firstName;
        this.lastName=lastName;
        this.birthDate=birthDate;
    }
    getFullName(){
        return{
            firstName:this.firstName,
            latname:this.lastName
        };
    }
    getAge(){
        let age=(new Date()).getFullYear()-this.birthDate;
        return{
            ...this.getFullName(),
            age:age
        }
    }
}
const adam=new Person("adam", 'nowak',1969);
const jan=new Person('jan','kowalski',1420);
Person.prototype.weight=undefined;
Person.prototype.getWeight=function(){
    return{
        ...this.getFullName,
        weight:this.weight
    }
}
adam.weight=68;
jan.weight=881637;
const tab=[adam, jan];
for(let i=0;i<tab.length;i++){
    tab[i].getAge()
}
tab.forEach(el=>{
    el.getAge()
});