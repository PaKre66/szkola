window.addEventListener("DOMContentLoaded",()=>{
    const button=document.querySelector("#submit");
    button.addEventListener("click",()=>{
        let input=document.querySelector("#input-01").value;
        const result=document.querySelector("#result");
        try{
            if(input.trim()=="")throw{message:"jest pusta"};
            if(isNaN(input))throw{message:"nie jest liczbą"}
            input=Number(input);
            if(input < 0) throw { message: "mniejsza niż zero" };
            if(input == 0) throw { message: "równa zero" };
            if(input > 0) throw { message: "większa niż zero" };
        }catch(error){
            result.innerHTML="wartość "+error.message+".";
        }
    });
});