const currentUrl = window.location.href;

const allAisles = [
    {
        "name": "Fruits",
        "image": "imgs/Fruits and Vegetables.png",
        "products": [
            {
                "name": "Banana",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great cut of fresh banana",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Grapes",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh grapes",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Lemon",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh lemon",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Raspberry",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh raspberries",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Tomato",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh tomatoes",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Lemon",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh lemon",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Watermelon",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh watermelon",
                "image": "img/fish/sushi.jpg"
            },
        ]
    },
    {
        "name": "Dairy and Eggs",
        "image": "imgs/Dairy, Eggs & Cheese.png",
        "products": [
            {
                "name": "Broccoli",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh broccoli",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Cabbage",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh baggage",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Carrot",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh carrot",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Eggplant",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh eggplant",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Onion",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh onion",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Squash",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great pick of fresh squash",
                "image": "img/fish/sushi.jpg"
            },
        ]
    },
    {
        "name": "Meat",
        "image": "imgs/Deli.png",
        "products": [
            {
                "name": "Beef Ribeye",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great beef",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Chicken Breast",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great chicken",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Turkey Breast",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great turkey",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Chicken Leg",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great chicken",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Groud Beef",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great beef",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "T-Bone Steak",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great steak",
                "image": "img/fish/sushi.jpg"
            },
        ]
    },
    {
        "name": "Fish & Seafood",
        "image": "imgs/seafood.jpg",
        "products": [
            {
                "name": "Cod",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great cod",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Salmon",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great salmon",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Shrimp",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great shrimp",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Squid",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great squid",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Stringray",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great stingray",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Sushi",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great sushi",
                "image": "img/fish/sushi.jpg"
            },
        ]
    },
    {
        "name": "Vegetables",
        "image": "imgs/vegetables.jpg",
        "products": [
            {
                "name": "Caramel Ice Cream",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great ice cream",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Milk Chocolate",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great milk chocolate",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Egg",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great egg",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Milk",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great milk",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Parmesean Cheese",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great cheese",
                "image": "img/fish/sushi.jpg"
            },
            {
                "name": "Provolone Cheese",
                "price": 30,
                "model": 12345611,
                "delivery": "Montreal, Laval",
                "size": "500g",
                "description": "A great provolone cheese",
                "image": "img/fish/sushi.jpg"
            },
        ]
    },
]

function formatAislePreview(aisle) {
    return `
    <td>
        <a href="p2.html?aisle=${aisle['name']}">
            <img src="${aisle['image']}" alt="" class="image">
            <div class="mid">
                ${aisle['name']}
            </div>
        </a>
    </td>
    `;
}

function formatAllAislesPreviews() {
    var htmlCode = "";
    for (const aisle of allAisles) {
        htmlCode += formatAislePreview(aisle) + '\n';
    }

    return htmlCode;
}

function injectAislesPreviews() {
    const htmlCode = formatAllAislesPreviews();
    const div = document.createElement('tr');

    div.innerHTML = htmlCode;
    document.getElementById('products-preview').appendChild(div);
}

function formatProductPreview(product) {
    return `
        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fa fa-heart"></a>
                <a href="#" class="fa fa-share"></a>
                <a href="p3-cod.html" class="fa fa-eye"></a>
            </div>

            <a href="p3.html?product=${product['name']}">
                <img src="${product['image']}" alt="" />
            </a>

            <a href="p3Cod.html" class="text-dark h3 text-decoration-none">
                <h3>${product['name']}</h3>
            </a>


            <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

            <div class="price">${product['price']}$/kg</div>
            <button type="button" class="btn btn-success">Add to cart</button>
        </div>
`
}

function formatAllProductsPreviews(aisle) {
    const allProducts = aisle['products'];
    var htmlCode = "";
    for (const product of allProducts) {
        htmlCode += formatProductPreview(product);
    }

    return `
    <div class="box-container">${htmlCode}</div>
    `
}

function formatAislePage(aisle) {
    return `
    <div id="grocery-header"></div>
    <div class="bg-dark py-3 text-light">
        <div class="container">
            <h1 class="header">${aisle['name']}</h1>
        </div>

        </div>
    ${formatAllProductsPreviews(aisle)}
    `;
}

function injectAislePage() {
    const aisleName = currentUrl.split('?')[1].split('=')[1].split('.')[0];
    var aisle = null;
    for (const currAisle of allAisles) {
        if (currAisle['name'] === aisleName) {
            aisle = currAisle;
        }
    }

    var htmlCode = "Not Found";
    if (aisle !== null) {
        htmlCode = formatAislePage(aisle);
    }

    const div = document.createElement('div');
    div.innerHTML = htmlCode;
    document.getElementById('aisle-content').appendChild(div);
}

if (currentUrl.includes("index")) {
    injectAislesPreviews();
} else if (currentUrl.includes("p2")) {
    injectAislePage();
}

console.log("HELLO")
