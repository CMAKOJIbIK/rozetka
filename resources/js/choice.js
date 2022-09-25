const redactor_img = document.querySelector(".img_block img");

window.choice_img = ()=>{
    const form = document.querySelector(".modal_wrapper form");
    redactor_img.src = form.img.value;
    console.log(form.img.value);
}
