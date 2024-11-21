    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Screen</title>
        <link rel="stylesheet" href="..\Assets/css/public.css?v=<?php echo time(); ?>">
    </head>

    <body>
        <!-- navigation -->
        <?php include '../resources/navbar.php'; ?>

        <main>
            <div class="form-order">
                <div class="form-column">
                    <div class="form-row">
                        <div class="form-group">
                            <h2>First Name</h2>
                            <input type="text" class="first-name">
                        </div>
                        <div class="form-group">
                            <h2>Last Name</h2>
                            <input type="text" class="last-name">
                        </div>
                    </div>

                    <div class="form-group">
                        <h2>Address Information</h2>
                        <input type="text" class="address">
                    </div>

                    <div class="payment">
                        <h2>Payment</h2>
                        <div class="payment-row">
                            <div class="payment-method">
                                <label>Mandiri</label>
                                <input type="text">
                            </div>
                            <div class="payment-method">
                                <label>BCA</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="payment-row">
                            <div class="payment-method">
                                <label>BRI</label>
                                <input type="text">
                            </div>
                            <div class="payment-method">
                                <label>BNI</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>

                    <div class="upload-receipt">
                        <h2>Upload Receipt</h2>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                                <path d="M440-320v-326L336-542l-56-58 200-200 200 200-56 58-104-104v326h-80ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="detail-product">
                    <div class="detail-product-cart">
                        <img src="../Assets/images/Spotec_Atlas.png" alt="Product Image">
                        <div class="product-details">
                            <h4>EXC 2</h4>
                            <h4>Rp 300.000</h4>
                        </div>
                    </div>

                    <div class="detail-product-cart">
                        <img src="../Assets/images/Unerd_Trax.png" alt="Product Image">
                        <div class="product-details">
                            <h4>STORY</h4>
                            <h4>Rp 300.000</h4>
                        </div>
                    </div>

                    <div class="footer-product">
                        <h4>Total: Rp 600.000</h4>
                        <h4>Discount: 15%</h4>
                        <h4>Rp 510.000</h4>
                    </div>

                    <div class="confirm">
                        <a href="thankYou.php"><button>Confirm</button></a>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <?php include '..\resources/footer.php'; ?>
        </main>
    </body>

    </html>