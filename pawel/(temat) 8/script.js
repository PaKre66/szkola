// window.addEventListener("DOMContentLoaded",()=>{
//     const form=document.forms[0];
// });
//jak nie ma id w form

window.addEventListener("DOMContentLoaded", () => {
    const form = document.forms.formularz;
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        let inputs = document.querySelectorAll("div.input > input");
        //document.querySelector("body").style.backgroundColor = inputs[0].value;
        form.style.borderColor = inputs[0].value;
        form.style.borderWidth = inputs[1].value + "px";
        form.style.borderStyle = inputs[2].value;
        // let suma = 0;
        // inputs.forEach(input => {
        //     suma += parseFloat(input.value);
        // });
        // document.querySelector("#suma").innerHTML = suma;
    });
});
//jak jest id w form dodaje .formularz
//preventDefault zapobiega podstawowej akcji strony(przeładowaznie strony w tym przypadku)
