<?php

$total = 0;
?>
<main id="cart" style="max-width:1000px ;margin: auto">
    <h1>Panier</h1>
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-12 col-sm-8 items">
                <section class="h-100" style="background-color: #eee;">
                    <div class="container h-100 py-5">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-10">

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                                    <div>
                                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                                                        class="fas fa-angle-down mt-1"></i></a></p>
                                    </div>
                                </div>

                                <div class="card rounded-3 mb-4">
                                    <?php
                                    if (isset($_SESSION['cart'])):
                                    foreach ($_SESSION['cart'] as $key => $produits):
                                    if ($key != 'quantite'):
                                    if ($produits['quantite'] != 0):
                                    $total += $produits['prix'] * $produits['quantite']; ?>
                                    <div class="card-body p-4">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="<?= $produits['img'] ?>"class="img-fluid rounded-3" alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <!--                                                                <p class="lead fw-normal mb-2">--><?php //echo $produits['nom']; ?><!--</p>-->
                                                <p><span class="text-muted"><?php echo $produits['nom']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="2" type="number"
                                                       class="form-control form-control-sm" />

                                                <button class="btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0"><?php echo $produits['prix']; ?> €</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endif;?>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>


                                    <div class="card mb-4">
                                        <div class="card-body p-4 d-flex flex-row">
                                            <div class="form-outline flex-fill">
                                                <input type="text" id="form1" class="form-control form-control-lg" />
                                                <label class="form-label" for="form1">Discound code</label>
                                            </div>
                                            <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
</main>

