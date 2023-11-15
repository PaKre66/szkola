window.addEventListener("DOMContentLoaded",()=>{
    const form=document.forms.formularz;
    form.addEventListener("submit",(event)=>{
        event.preventDefault();
    });
    let liczba1=parseFloat(document.getElementById("pole-1").value);
    let liczba2=parseFloat(document.getElementById("pole-2").value);
    let liczba3=parseFloat(document.getElementById("pole-3").value);
    let liczba4=parseFloat(document.getElementById("pole-4").value);
    
    let p=((liczba1+liczba2+liczba3+liczba4)/2);
    let S=(((p-liczba1)*(p-liczba2)*(p-liczba3)*(p-liczba4))^0.5);
    
    let blad;
    blad="błąd"
    
    const resultElement=document.getElementById("S");
    
    if(typeof S==="number"){
        resultElement.textContent=S;
    }else{
        resultElement.textContent=blad;
    }
});

