<style>


.container {
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
    background-color: #eee
}

.navbar-brand {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 800
}

nav {
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    background-color: white
}

.order .card {
    position: relative;
    background: #fff;
    box-shadow: 0 0 15px rgba(0, 0, 0, .1)
}

.ribbon {
    width: 150px;
    height: 150px;
    overflow: hidden;
    position: absolute
}

.ribbon::before,
.ribbon::after {
    position: absolute;
    content: '';
    display: block;
    border: 5px solid red
}

.ribbon span {
    position: absolute;
    display: block;
    width: 225px;
    padding: 15px 0;
    background-color: red;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    color: #fff;
    font: 700 18px/1 'Lato', sans-serif;
    text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
    text-transform: uppercase;
    text-align: center
}

.ribbon-top-right {
    top: -12px;
    right: -12px
}

.ribbon-top-right::before,
.ribbon-top-right::after {
    border-top-color: transparent;
    border-right-color: transparent
}

.ribbon-top-right::before {
    top: 0;
    left: 0
}

.ribbon-top-right::after {
    bottom: 0;
    right: 0
}

.ribbon-top-right span {
    left: -25px;
    top: 30px;
    transform: rotate(45deg)
}

small {
    font-size: 12px
}

.cart {
    line-height: 1
}

.icon {
    background-color: #eee;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%
}

.pic {
    width: 70px;
    height: 90px;
    border-radius: 5px
}

td {
    vertical-align: middle
}

.red {
    color: #fd1c1c;
    font-weight: 600
}

.b-bottom {
    border-bottom: 2px dotted black;
    padding-bottom: 20px
}

p {
    margin: 0px
}

table input {
    width: 40px;
    border: 1px solid #eee
}

input:focus {
    border: 1px solid #eee;
    outline: none
}

.round {
    background-color: #eee;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center
}

.payment-summary .unregistered {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #eee;
    text-transform: uppercase;
    font-size: 14px
}

.payment-summary input {
    width: 100%;
    margin-right: 20px
}

.payment-summary .sale {
    width: 100%;
    background-color: #e9b3b3;
    text-transform: uppercase;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 5PX 0
}

.red {
    color: #fd1c1c
}

.del {
    width: 35px;
    height: 35px;
    object-fit: cover
}

.delivery .card {
    padding: 10px 5px
}

.option {
    position: relative;
    top: 50%;
    display: block;
    cursor: pointer;
    color: #888
}

.option input {
    display: none
}

.checkmark {
    position: absolute;
    top: 40%;
    left: -25px;
    height: 20px;
    width: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 50%
}

.option input:checked~.checkmark:after {
    display: block
}

.option .checkmark:after {
    content: "\2713";
    width: 10px;
    height: 10px;
    display: block;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 200ms ease-in-out 0s
}

.option:hover input[type="radio"]~.checkmark {
    background-color: #f4f4f4
}

.option input[type="radio"]:checked~.checkmark {
    background: #ac1f32;
    color: #fff;
    transition: 300ms ease-in-out 0s
}

.option input[type="radio"]:checked~.checkmark:after {
    transform: translate(-50%, -50%) scale(1);
    color: #fff
}
</style>




<div class="container mt-4 p-0">
    
    <div class="row px-md-4 px-2 pt-4">
        <div class="col-lg-8">
            <p class="pb-2 fw-bold">Order</p>
            <div class="card">
               
                <div>
                    <div class="table-responsive px-md-4 px-2 pt-3">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="border-bottom">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src="https://images.pexels.com/photos/7322083/pexels-photo-7322083.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt=""> </div>
                                            <div class="ps-3 d-flex flex-column justify-content">
                                                <p class="fw-bold">Air<span class="ps-1">Red</span><span class="ps-1">Pants</span></p> <small class=" d-flex"> <span class=" text-muted">Color:</span> <span class=" fw-bold">Red/White</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class=" fw-bold">L</span> </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <p class="pe-3"><span class="red">$45.00</span></p>
                                            <p class="text-muted text-decoration-line-through">$55.00</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
                                            <div class="round"> <span class=""> L </span> </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php foreach ($_SESSION['sepet'] as $a){?>
                                <tr class="border-bottom">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src="<?php  echo  SITE_URL.'/assets/uploads/'. $a['resim'];?>" alt=""> </div>
                                            <div class="ps-3 d-flex flex-column">
                                                <p class="fw-bold">Court<span class="ps-1">Dri-FIT</span></p> <small class=" d-flex"> <span class=" text-muted">Color:</span> <span class="fw-bold">Dark Blue</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class="fw-bold">L</span> </small>
                                            </div>
                                        </div>
                                    </td>
                                    <?php }?>
                                    <td>
                                        <div class="d-flex">
                                            <p class="pe-3"><span class="red">$45.00</span></p>
                                            <p class="text-muted text-decoration-line-through">$55.00</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
                                            <div class="round"> <span class=""> L </span> </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div> <img class="pic" src="https://images.pexels.com/photos/7322083/pexels-photo-7322083.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt=""> </div>
                                            <div class="ps-3 d-flex flex-column">
                                                <p class="fw-bold"> Sportswear<span class="ps-1">Heritage</span><span class="ps-1">Windrunner</span></p> <small class=""> <span class=" text-muted">Color:</span> <span class="fw-bold">Blue/White</span> </small> <small class=""> <span class=" text-muted">Size:</span> <span class="fw-bold">L</span> </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <p class="pe-3"><span class="red">$45.00</span></p>
                                            <p class="text-muted text-decoration-line-through">$55.00</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
                                            <div class="round"> <span class=""> L </span> </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 payment-summary">
            <p class="fw-bold pt-lg-0 pt-4 pb-2">Payment Summary</p>
            <div class="card px-md-3 px-2 pt-4">
                
                
                
                    <div class="d-flex justify-content-between"> <small class="text-muted">Total Amount</small>
                        <p>$132</p>
                    </div>
                </div>
                <div class="sale my-3"> <span>sale<span class="px-1">expiring</span><span>in</span>:</span><span class="red">21<span class="ps-1">hours</span>,31<span class="ps-1 ">minutes</span></span> </div>
            </div>
        </div>
        
</div>