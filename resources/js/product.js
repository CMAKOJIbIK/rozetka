let body = document.querySelector('body');
const navbar = document.querySelector('.navbar');
const navbar_position = navbar.offsetTop;
// body.addEventListener('scroll', () => {
//     let scrollTop = body.scrollHeight;
//     console.log(scrollTop);
// });
// console.log(body);

window.addEventListener('scroll', function () {
    // console.log(pageYOffset);

    // console.log(navbar.offsetTop);
    if (pageYOffset >= navbar_position - 72) {
        navbar.style.position = "fixed";
        navbar.style.top = "72px";
        navbar.style.left = "0";
    } else {
        navbar.style = "";
    }
});
window.update_product = (form) => {
    const func = (responce) => {
        const h1 = document.querySelector(".product_name h1");
        const title = document.querySelector("title");
        h1.innerHTML = responce["data"];
        title.innerHTML = responce["data"];
        update_name()
    }
    PostForm(form, func)
}
window.update_price = (form) => {
    const func = (responce) => {
        const sale = document.querySelector(".product_price");
        const price = document.querySelector(".product_old_price");
        sale.innerHTML = responce["data"];
        price.innerHTML = responce["data"];
        console.log(responce)
        console.log(responce["data"])
    }
    PostForm(form, func)
}


window.update_name = () => {
    const form_name = document.querySelector(".product_name .form_name")
    const name = document.querySelector(".product_name h1")
    name.classList.toggle("hidden")
    form_name.classList.toggle("hidden")

}

window.update_price = () => {
    const name = document.querySelector(".product_trade")
    name.classList.toggle("hidden")
}



