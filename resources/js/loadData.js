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
    element.classList.add("block");
    element.innerHTML = `
        <a href='/product/${product.id}'>
    <div class="box box_bowShadow">
      <div class="split">
        <div class="split-left">
          <div class="totem">
            <p class="totem-hd">${product.productName}</p>
            <p class="totem-bd">Scale: ${product.productScale}</p>
            <p class="totem-ft">${product.productVendor}</p>
          </div>
        </div>
        <div class="split-right">
          <img src="https://via.placeholder.com/110x130" alt="" />
        </div>
      </div>
    </div> 
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
