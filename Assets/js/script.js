const cartContainer = document.getElementsByClassName('cartContainer')[0];
let addToCartBtn = document.getElementsByClassName('addToCartBtn');

console.log(addToCartBtn);

for (var i = 0; i < addToCartBtn.length; i++) {
    addToCartBtn[i].addEventListener('click', updateCartContainer)
}

function updateCartContainer(e) {
    addToCartBtn = e.target;
    index = addToCartBtn.dataset.index;
    productContainer = addToCartBtn.parentElement;
    let productTitle = document.getElementsByClassName('productTitle')[parseInt(index)].innerText;
    let productPrice = document.getElementsByClassName('productPrice')[parseInt(index)].innerText;
    let productimg = document.getElementsByClassName('prodimg');


    cartTitles = cartContainer.getElementsByClassName('cartTitle');

    AddRowInCart(productTitle, productPrice, productimg[parseInt(index)].src);
}

// add new row in cart
function AddRowInCart(productTitle, productPrice, productimg) {
    div = document.createElement('div');
    div.classList.add('row');
    div.classList.add('cartProduct');

    insideDiv = `<div class="col-xs-3 cartImage"> <img src="${productimg}"></div>
                        <div class="col-xs-3 cartTitle text"> ${productTitle} </div>
                        <div class="col-xs-3 cartPrice text"> ${productPrice}</div>
                        <div class="col-xs-3 removeButton text"> Remove</div>
                        `;

    div.innerHTML = insideDiv;
    cartContainer.appendChild(div);
    totalPrice = 0;
    cartPrice = cartContainer.getElementsByClassName('cartPrice');

    for (var i = 0; i < cartPrice.length; i++) {
        priceFormatedNumb = parseInt(cartPrice[i].innerText.replace('.','').replace('.','').replace('R','').replace('p','').split('').join(''));
        totalPrice = totalPrice + priceFormatedNumb;
    }

    document.getElementsByClassName('cartTotalPrice')[0].innerText = new Number(totalPrice).toLocaleString('en');

    removeButton = document.getElementsByClassName('removeButton');
    for (var i = 0; i < removeButton.length; i++) {
        removeButton[i].addEventListener('click', removeFromCart)
    }
}

function removeFromCart(e) {
    e.target.parentElement.remove();
    updatePriceAfterRemove();
}


function updatePriceAfterRemove() {
    totalPrice = 0;
    cartPrice = cartContainer.getElementsByClassName('cartPrice');
    
    for (var i = 0; i < cartPrice.length; i++) {
        priceFormatedNumb = parseInt(cartPrice[i].innerText.replace('.','').replace('.','').replace('R','').replace('p','').split('').join(''));
        totalPrice = totalPrice + parseInt((priceFormatedNumb));
    }

    document.getElementsByClassName('cartTotalPrice')[0].innerText = new Number(totalPrice).toLocaleString('en');
}