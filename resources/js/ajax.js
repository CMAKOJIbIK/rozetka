const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// window.url_info = document.querySelector('meta[name="url_info"]').getAttribute('content');
console.log("hello")

window.Post = (url, func = () => {
}, parameters = {}) => {
    getResource(url, parameters)
        .then(data => {

            func(data)
        })
        .catch(error => console.error(error));

    async function getResource(url, parameters) {
        const res = await fetch(url, {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token
            },

            body: JSON.stringify(parameters)
        });

        if (!res.ok) {
            throw new Error(`Не удалось получить ${url}, статус: ${res.status}`);
        }
        // return await res;
        return await res.json();
    }
}


window.PostForm = (form, func) => {
    const parameters = {}
    const temp = [...document.querySelectorAll('input, select, textarea')];
    const temp_checkbox = [...document.querySelectorAll('input[type="checkbox"]')];
    temp.forEach((item) => {
        parameters[item.name] = item.value
    })

    temp_checkbox.forEach((item) => {

        parameters[item.name] = item.checked
    })
    // console.log(parameters);
    Post(form.action, func, parameters);
}
