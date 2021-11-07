function getPersistedValue  (v){
    if (!localStorage.getItem(v)) {
        return "1";
    }
    return localStorage.getItem(v);
}

function persistValue(e){
    var val = e.value;
    var id = e.id;
    localStorage.setItem(id, val);
}

       function calc() {
  var price = parseFloat(document.getElementById("price").innerHTML);
  var quantity = document.getElementById("num").value;
  var total = price * quantity;
  
  if (!isNaN(total))
    document.getElementById("totall").innerHTML = total;
}
document.getElementById("num").value = getPersistedValue("num");    // set the value to this input
