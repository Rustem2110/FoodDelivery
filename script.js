document.getElementById('order-form').addEventListener('submit', validateForm);

function validateForm(event) {
    event.preventDefault();

    //get form input elements
    var farmerSelect = document.getElementById('farmer-select');
    var productName = document.getElementById('product-name');
    var quantity = document.getElementById('quantity');
    var customerName = document.getElementById('customer-name');
    var customerAddress = document.getElementById('customer-address');
    var customerPhone = document.getElementById('customer-phone');

    //check if farmer is selected
    if (farmerSelect.value === "") {
        alert("Please select a farmer");
        return;
    }

    //check if product name is not empty
    if (productName.value === "") {
        alert("Please enter a product name");
        return;
    }

    //check if quantity is greater than 0
    if (quantity.value <= 0) {
        alert("Quantity must be greater than 0");
        return;
    }

    //check if customer name is not empty
    if (customerName.value === "") {
        alert("Please enter your name");
        return;
    }

    //check if customer address is not empty
    if (customerAddress.value === "") {
        alert("Please enter your address");
        return;
    }

    //check if customer phone is not empty
    if (customerPhone.value === "") {
        alert("Please enter your phone number");
        return;
    }

    //submit form
    document.getElementById('order-form').submit();
    const form = document.querySelector("#order-form");
form.addEventListener("submit", function(e) {
    e.preventDefault();
    // Handle form submission
});

}
