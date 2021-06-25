if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('pesanProd')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
    alert('Thank you for your purchase')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var namakue = shopItem.getElementsByClassName('prodnama')[0].innerText
    var harga = shopItem.getElementsByClassName('prodharg')[0].innerText
    var gambarSrc = shopItem.getElementsByClassName('prodimg')[0].src
    addItemToCart(namakue, harga, gambarSrc)
    console.log (namakue, harga)
    updateCartTotal()
}

function addItemToCart(namakue, harga, gambarSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-prodnama')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == namakue) {
            alert('This item is already added to the cart')
            return
        }
    }
    
    var cartRowContents = `
    

            <div class="dropdown-item d-flex align-items-center">
        <div class="row">
                <div class="dropdown-list-image col-md-2">
                    <img class="rounded-circle" src="${gambarSrc}" alt="">
                    <div class="status-indicator"></div>
                </div>
                <div class="col-md-5">
                    <div class="text-truncate">${namakue}</div>
                    <div class="small text-gray-500 cart-harga">${harga}</div>
                </div>
                <div class="col-md-5">
            <input class="form-control mr-1 cart-quantity-input" style="width:100%;" type="number" value="1">
            </div>
            <button class="ml-1 btn btn-sm btn-danger mt-2" style="width:94%;"  type="button">Batal</button>
                
        </div>
            </div>
        
                
                `
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var hargaElement = cartRow.getElementsByClassName('cart-harga')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var harga = parseFloat(hargaElement.innerText.replace('Rp.', ''))
        var quantity = quantityElement.value
        total = total + (harga * quantity)
        document.getElementById("BadgeCardJumlah").innerHTML =  quantityElement.value;
        
        total = Math.round(total * 100) / 100

        
    var	number_string = total.toString(),
        sisa 	= number_string.length % 3,
        rupiah 	= number_string.substr(0, sisa),
        ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
    
    
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
}
document.getElementsByClassName('cart-total-price')[0].innerText = 'Rp.' + rupiah + '.000'

}

