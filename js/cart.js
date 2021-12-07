const currentUrl = window.location.href;

function extractProduct() {
    const htmlName = document.getElementsByTagName("h3");
    const name = htmlName[0].textContent.trim();

    const htmlPrice = document.getElementById("price");
    const price = htmlPrice.textContent.trim();

    const htmlImage = document.getElementsByClassName("img-big-wrap");
    const image = htmlImage[0].children[0].children[0].getAttribute("src");

    const quantity = document.getElementsByTagName("input")[0].value;

    payload = {
        name,
        price: parseInt(price, 10),
        image,
        quantity: !!quantity ? parseInt(quantity, 10) : null
    };

    return payload;
}

function initializeStorage() {
    const products = localStorage.getItem("products");
    if (products === null) {
        localStorage.setItem('products', "{}");
    }
}

function saveProduct() {
    const product = extractProduct();
    if (product['quantity'] !== null) {
        const productName = product['name'];

        var allProducts = localStorage.getItem("products");
        allProducts = JSON.parse(allProducts);

        allProducts[productName] = product;

        allProducts = JSON.stringify(allProducts);

        localStorage.setItem('products', allProducts);
    } else {
        var allProducts = localStorage.getItem("products");
        if (allProducts !== null) {
            allProducts = JSON.parse(allProducts);
            const storedProduct = allProducts[product['name']];
            if (!!storedProduct) {
                const quantity = storedProduct['quantity'];
                if (quantity !== null) {
                    document.getElementsByTagName("input")[0].value = quantity;
                }
            }
        }
    }
}

function removeProduct(productName) {
    var allProducts = localStorage.getItem("products");
    if (allProducts !== null) {
        allProducts = JSON.parse(allProducts);
        if (productName in allProducts) {
            delete allProducts[productName];

            allProducts = JSON.stringify(allProducts);
            localStorage.setItem('products', allProducts);
        }
    }

    refreshPrices();
    injectAllProducts();
}

function formatProduct(product) {
    return `
    <div class="product">
        <img
            src="${product['image']}">
        <div class="product-info">
            <h3 class="product-name">${product['name']}</h3>
            <h4> $ <span id="${product['name']}">${product['price']}</span> /Kg</h4>
            <h4 class="product-offer">${product['price'] / 2}$/LB</h4>

            <p class="product-quantity">Quantity:
                <input id="quantity" type="number" min="1" max="100" value="${product['quantity']}"
                    onchange="onChangeQuantity('${product['name']}', this)" />
                    <button onclick="removeProduct('${product['name']}')">
                        <i class="fas fa-trash"></i>
                    </button>
        </div>
    </div>
    `;
}

function injectAllProducts() {
    var allProducts = localStorage.getItem("products");
    if (allProducts !== null) {
        allProducts = JSON.parse(allProducts);
        var htmlProducts = "";
        for (const productName in allProducts) {
            const product = allProducts[productName];
            htmlProducts += formatProduct(product);
        }

        const div = document.createElement('div');

        div.innerHTML = htmlProducts;
        document.getElementsByClassName('products')[0].innerHTML = '';
        document.getElementsByClassName('products')[0].appendChild(div);
    }
}

// Start here
initializeStorage();

if (currentUrl.includes('p3')) {
    saveProduct();
} else if (currentUrl.includes('p4')) {
    injectAllProducts();
}
