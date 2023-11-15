
class Figure {
    squareFull(a) {
        let pattern = "";
        a = parseInt(a);
        for(let i = 0; i < a; i++) {
            for(let j = 0; j < a; j++) {
                pattern += "*";
            }
            pattern += "\n";
        }
        return pattern;
    }
    squareEmpty(a){
        let pattern ="";
        a = parseInt(a);
        for(let i = 1; i < a; i++) {
            for(let j = 0; j < a; j++) {
                pattern += "*";
            }
            for(let x=0;x<a-j;x++){
                pattern+=" ";
            }
            pattern += "\n";
        }
    }
    tringleRight(a){
        let pattern="";
        a=parseInt(a);
        for(let i=1;i<=a;i++){
            for(let j=0;j<a-i;j++){
                pattern+=" ";
            }
            for(let k=0;k<i;k++){
                pattern+="*";
            }
            pattern +="\n";
        }
        return pattern;
    }
    tringleLeft(a){
        let pattern="";
        a=parseInt(a);
        for(let i=1;i<=a;i++){
            for(let j=0;j<a-i;j++){
                pattern+=" ";
            }
             for(let k=0;k<i;k++){
                 pattern+="*";
             }
            // for(let k = 1; k < i; k++) {
            //     pattern += "*";
            // }
            pattern +="\n";
        }
        return pattern;
    }
}

window.addEventListener("DOMContentLoaded", () => {
    const form = document.forms[0];
    form.addEventListener("submit", (event) => { 
        event.preventDefault();
        let figure;
        switch(document.querySelector("#figure").value) {
            case "squareFull":
                figure = (new Figure).squareFull(form.querySelector("#figure-size").value);
            break;
            case "squareEmpty":
                figure = (new Figure).squareEmpty(form.querySelector("#figure-size").value);
            break;
            case "tringleLeft":
                figure=(new Figure).tringleLeft(form.querySelector("#figure-size").value);
            break;
            case "tringleRight":
                figure=(new Figure).tringleRight(form.querySelector("#figure-size").value);
            break;
        }
        document.querySelector("#pattern").innerHTML = figure;
    });
});