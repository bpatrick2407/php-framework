<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

if ( $_POST  ) {
    $products = processPurchase($_POST);
    $allProducts = unserialize(APP_PRODUCTS);
    include( APP_VIEW . '/product/purchaseView.php' );
}else{
    $allProducts = unserialize(APP_PRODUCTS);
    $products = null;
    include( APP_VIEW . '/product/purchaseView.php' );
}


# Include html footer
include( APP_VIEW . '/footer.php' );

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

function processPurchase($form) {
    $products = array();
    foreach($form as $name => $qty){
        if(is_string($qty) and $qty > 0){
            $products[$name] = $qty;
        }
    }
    
    return $products;
}