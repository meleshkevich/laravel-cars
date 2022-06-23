//Api consumer
const searchData = async (url) => {
    const res = await fetch(url);
    const data = await res.json();

    const container = document.getElementById("search_results");

    data.forEach((product) => {
        const element = makeElement(product);
        container.appendChild(element);
    });
};

// create list of searched products
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

//clear list of rendered products each time button is clicked
const clearList = () => {
    const list = document.getElementById("search_results");
    while (list.hasChildNodes()) {
        list.removeChild(list.firstChild);
    }
};

//add eventListener for each button and execute list render
const input_search = document.getElementById("input_field");

input_search.addEventListener("input", () => {
    let url = "/api/product/search/?search=";
    url += input_search.value;
    searchData(url);
});

btn_search.addEventListener("click", (el) => {
    // el.preventDefault();
    clearList();
    searchData(url);
    // product_line = el.target.innerText;
    // let url = "/api/products/" + product_line;
    // clearList();
    // loadData(url);
});
