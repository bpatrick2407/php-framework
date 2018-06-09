<!-- start page container -->
  <div class="container-fluid">
    <div class="row">
      <?php if($products != null){?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Congratulations!</strong> On your order.
            <ul class="list-group">
                <?php foreach($products as $name => $qty){ ?>
                    <li class="list-group-item"><?PHP echo $qty . " of " . $name?></li>
                <?php } ?>
            </ul>
        </div>
      <?php } ?>
      <!-- Start page content -->
      <div class="col-md-12">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                
                <form method="post" action="<?php echo APP_DOC_ROOT; ?>/purchase/buy">

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title">Create An Order</h3>
                        </div>

                        <div class="panel-body">
                        <?php foreach($allProducts as $key => $product) {
                                $name = $product['name'];
                                $quantity = $product['qty'];
                        ?>
                            <div class="form-group">
                                <label for="<?php print $name; ?>"><?php print $name; ?></label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input
                                        class="form-control"
                                        id="<?php print $name; ?>"
                                        name="<?php print $name; ?>"
                                        value="0"
                                        type="number"
                                        min="0"
                                        step="1"
                                        max="<?php print $quantity; ?>"
                                    >
                                </div>
                            </div>
                        <?php } ?>
                        <div class="panel-footer">
                            <button
                                type="submit"
                                class="btn btn-primary pull-right"
                                id="loginFormButton"
                                name="loginFormButton"
                            >Checkout</button>
                            <div class="clearfix"></div>
                        </div>

                    </div>

                </form>

            </div>
        </div>

      </div>
      <!-- End page content -->
