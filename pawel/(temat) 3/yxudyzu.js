// //yxudyzu
// let arr = new Array(1,2,3,4,6,7,8,13,22);
// Array.prototype.sum=function(){
//     let sum=0;
//     for(let i=0;i<this.length;i++){
//         sum+=this[i];
//     }
//     return sum;
// }
// arr.sum();
// Array.prototype.mno=function(){
    
//     let mno=1;
//     for(let x=1;x<this.length;x++){
//         mno*=this[x];
//     }
//     return mno;
// }
// arr.mno();


// Array.prototype.dziel=function(){
//     let dziel=1;
//     for(let y=1;y<this.length;y++){
//         dziel/=this[y];
//     }
//     return dziel;
// }
// arr.dziel();


// Array.prototype.odejmij=function(){
//     let odejmij=0;
//     for(let z=0;z<this.length;z++){
//         odejmij-=this[z];
//     }
//     return odejmij;
// }
// arr.odejmij();
// console.log(arr);
Array.prototype.sum = function() {
    let sum = 0;
    for (let i = 0; i < this.length; i++)
        sum += this[i];
    return sum;
}
Array.prototype.sub = function() {
    let sub = 0;
    for (let i = 0; i < this.length; i++)
        sub -= this[i];
    return sub;
}
Array.prototype.mul = function() {
    let mul = 1;
    for (let i = 0; i < this.length; i++)
        mul *= this[i];
    return mul;
}
Array.prototype.div = function() {
    let div = 1;
    for (let i = 0; i < this.length; i++)
        div /= this[i];
    return div;
}