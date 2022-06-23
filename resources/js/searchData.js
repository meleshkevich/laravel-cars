// container to render the search results
const container = document.getElementById("search_results");

// input field from the search
const input_search = document.getElementById("input_field");

// search button
const btn_search = document.getElementById("search_btn");

//Api consumer
const searchData = async (url) => {
    const res = await fetch(url);
    const data = await res.json();

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

//add eventListener for input field
input_search.addEventListener("input", () => {
    let url = "/api/product/search/?search=";
    url += input_search.value;
    searchData(url);
});

btn_search.addEventListener("click", (el) => {
    el.preventDefault();
    clearList();
    if (input_search.value) {
        let url = "/api/product/search/?search=";
        url += input_search.value;
        searchData(url);
    } else {
        const element = document.createElement("div");
        element.classList.add("not__found");
        element.innerHTML = `         
        <p class='not__found'>We dont find any results :(</p>        
    `;
        container.appendChild(element);
    }
});
