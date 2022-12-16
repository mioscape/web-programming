<?php
    require 'header.php';
?>

<div class="row mx-auto p-3">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body mx-auto">
                <img src="assets/brand/iphone/14-plus.jpg" alt="" class="img-fluid img-product">
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Undefined</h5>
                <p class="card-text"></p>
                <a onclick="ifCheckout()" class="btn btn-primary">Checkout</a>
            </div>
        </div>
        <div class="mt-3">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Description Product
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body m-3">
                            <!-- Data will add dynamically.-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a data-bs-toggle="modal" data-bs-target="#ifCheckoutModal" id="alertCheckout"></a>
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="ifCheckoutModal" tabindex="-1" aria-labelledby="ifCheckoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ifCheckoutModalLabel">Successful</h1>
            </div>
            <div class="modal-body">
                Thank you for your purchase.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="hrefDirect('index.php')">Back to Home</button>
            </div>
        </div>
    </div>
</div>
<script>
    let logged = localStorage.getItem('logged');
    let productName = localStorage.getItem('productName');
    let productPrice = localStorage.getItem('productPrice');
    let productImage = localStorage.getItem('productImage');
    let productLongDesc = localStorage.getItem('productLongDesc');

    function forEachProductLongDesc() {
        let arrayifyProductLongDesc = [JSON.parse(productLongDesc)];
        let res = "";

        arrayifyProductLongDesc.forEach((data) => {
            console.log(data);
                res += `<li><b>Body</b>: ${data.Body}</li>`;
                res += `<li><b>Display</b>: ${data.Display}</li>`;
                res += `<li><b>Chipset</b>: ${data.Chipset}</li>`;
                res += `<li><b>Memory</b>: ${data.Memory}</li>`;
                res += `<li><b>OS</b>: ${data.OS}</li>`;
                res += `<li><b>Rear Camera</b>: ${data.RearCamera}</li>`;
                res += `<li><b>Front Camera</b>: ${data.FrontCamera}</li>`;
                res += `<li><b>Video Capture</b>: ${data.VideoCapture}</li>`;
                res += `<li><b>Battery</b>: ${data.Battery}</li>`;
                res += `<li><b>Misc</b>: ${data.Misc}</li>`;
        });

        querySelectorInnerHTML('.accordion-body', res);
    }


    function applyData() {
        document.querySelector('.card-title').innerHTML = productName;
        document.querySelector('.card-text').innerHTML = formatRupiah(productPrice);
        document.querySelector('.img-product').src = productImage;
        document.querySelector('.accordion-button').innerHTML = productName + ' Description';
        forEachProductLongDesc();
    }
    applyData();

    function ifCheckout() {
        if (logged == 'true') {
            clickById('alertCheckout');
        } else {
            alert('Please login first.');
            hrefDirect('login.php');
        }
    }
</script>
