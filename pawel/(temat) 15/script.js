window.addEventListener("DOMContentLoaded",()=>{
    const templateToggle=document.querySelector("templateToggle");
    templateToggle.querySelector("[name\"template\"").addEventListener("change",()=>{
        console.log(this);
        document.querySelector("body").classList.toggle(this.value);
    });
});