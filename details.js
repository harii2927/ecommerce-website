document.getElementById("orderForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var customerName = document.getElementById("customerName").value;
    var product = document.getElementById("product").value;
    var quantity = document.getElementById("quantity").value;
    
    var orderSummary = "Customer Name: " + customerName + "<br>";
    orderSummary += "Product: " + product + "<br>";
    orderSummary += "Quantity: " + quantity;
    
    document.getElementById("orderSummary").innerHTML = orderSummary;
    
    document.getElementById("orderForm").reset();
  });