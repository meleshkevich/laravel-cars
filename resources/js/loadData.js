//Api consumer
const loadData = async (url) => {
    const res = await fetch(url);
    const data = await res.json();

    const container = document.getElementById("selected_cars");

    data.forEach((product) => {
        const element = makeElement(product);
        container.appendChild(element);
    });
};

//create list of selected products
const makeElement = (product) => {
    const element = document.createElement("div");
    element.classList.add("products");
    element.innerHTML = `
        <a href='/product/${product.id}'>
        <p class='product__name'>${product.productName}</p>
        </a>

    `;
    return element;
};

//clear list of selected products each time button is clicked
const clearList = () => {
    const list = document.getElementById("selected_cars");
    while (list.hasChildNodes()) {
        list.removeChild(list.firstChild);
    }
};

//add eventListener for each button and execute list render
const btn = document.querySelectorAll("button");

btn.forEach((el) => {
    el.addEventListener("click", (el) => {
        product_line = el.target.innerText;
        let url = "/api/products/" + product_line;
        clearList();
        loadData(url);
    });
});
