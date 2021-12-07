
// if (document.readyState == 'loading') {
// 	document.addEventListener('DOMContentLoaded', cartPrice());
// } else {
// 	cartPrice();
// }

// const totalPrices = {};

function onChangeQuantity(id, e) {
	const newQuantity = parseInt(e.value);

	var allProducts = localStorage.getItem('products');
	allProducts = JSON.parse(allProducts);

	for (const productName in allProducts) {
		if (productName === id) {
			allProducts[productName]['quantity'] = newQuantity;
		}
	}

	allProducts = JSON.stringify(allProducts);
	localStorage.setItem("products", allProducts);

	refreshPrices();
}

function refreshPrices() {
	var sumOfPrices = 0;
	var allProducts = localStorage.getItem("products");
	if (allProducts !== null) {
		allProducts = JSON.parse(allProducts);
		for (const productName in allProducts) {
			const product = allProducts[productName];
			sumOfPrices += product['quantity'] * product['price'];
		}
	}

	const GST = 0.05 * sumOfPrices;
	const QST = 0.1 * sumOfPrices;
	const totalAfterTaxes = sumOfPrices + GST + QST;

	document.getElementById('sum-before-taxes-total').innerHTML = "$" + `${sumOfPrices}`;
	document.getElementById('sum-gst').innerHTML = "$" + `${GST}`;
	document.getElementById('sum-qst').innerHTML = "$" + `${QST}`;
	document.getElementById('sum-after-taxes').innerHTML = "$" + `${totalAfterTaxes}`;
}

// function productPrice() {
// 	var pricePerUnitList = document.getElementsByClassName('product-offer-perKg');
// 	var totalPerProductList = new Array(pricePerUnitList.length);
// 	var i = 0;
// 	for (i; i < totalPerProductList.length; i++) {
// 		totalPerProductList[i] = parseFloat(pricePerUnitList[i].innerText.substring(1)) * document.getElementById(('quantity' + i)).value;
// 	}
// 	cartPrice();
// }

// function cartPrice() {
// 	var productPriceList = document.getElementsByClassName('price');
// 	var i;
// 	var sum = 0.0;
// 	for (i = 0; i < productPriceList.length; i++) {
// 		sum += parseFloat(productPriceList[i].innerText.substring(1));
// 	}

// 	var gst = sum * 0.05;
// 	var qst = sum * 0.15;
// 	var total = sum + gst + qst;

// 	document.getElementsByClassName("sum").innerText = sum.toFixed(2);
// 	document.getElementsByClassName("gst").innerText = gst.toFixed(2);
// 	document.getElementsByClassName("qst").innerText = qst.toFixed(2);
// 	document.getElementsByClassName("total").innerText = +total.toFixed(2);
// }
