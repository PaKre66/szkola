class Client{
    constructor(firstName,lastName,birthYear,footLength,height){
        this.firstName=firstName;
        this.lastName=lastName;
        this.birthYear=birthYear;
        this.footLength=footLength;
        this.height=height;
    }
    getFullName(){
        return {
            firstName:this.firstName,
            lastName:this.lastName
        }
    }
    getAge(){
        return {
            firstName:this.firstName,
            lastName:this.lastName,
            birthYear:this.age()
        }
    }
    getFootLength(){
        return {
            firstName:this.firstName,
            lastName:this.lastName,
            footLength:this.footLength
        }
    }
    getHeight(){
        return{
            firstName:this.firstName,
            lastName:this.lastName,
            height:this.height
        }
    }
    age(){
        return(new Date()).getFullYear()-this.birthYear;
    }
}
Client.prototype.weight=null;
Client.prototype.getBMI=function(){
    this.weight/(this.height*this.height)
}



const klient1=new Client(Jan,Kowalski,2005,80,150);
const klient2=new Client(Bill,Gates,1969,35,179);
const klient3=new Client(Kamil,Slimak,700,1,2);

klient1.weight=(70);
klient2.weight=(80);
klient3.weight=(9000);