
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">
            <div class="container">
            <?php foreach($products as $key => $product) {
                $productUrl = APP_DOC_ROOT . '/product/view/' . $product['id'];
            ?>
                <div class="row">
                    <div class="col-xs-6">
                      <div class="productTitle">
                        <a href="<?php print $productUrl; ?>">
                          <h3><?php print $product['name']; ?><h3>
                        </a>
                      </div>
                      <div class="productCost">
                        <?php print $product['retail']; ?>
                      </div>
                    </div>
                    <div class="col-xs-6">
                        <img src="<?= $product['imagePath']?>" class="img-thumbnail"  width="200" height="200">
                    </div>
                </div>
            <?php } ?>
            </div>
          </div>
        </div>
        <!-- end page content -->
