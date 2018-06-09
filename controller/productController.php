<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'view':
        $categories = listCategories();
        $productId = $route->getParams()[2];
        $product = getProduct($productId);
        include( APP_VIEW .'/product/listSubNav.php' );
        include( APP_VIEW .'/product/productView.php' );
        break;

    case 'list':
        $categoryId = (array_key_exists(2,$route->getParams())) ? $route->getParams()[2] : 1;
        $categories = listCategories();
        $products = listProducts($categoryId);
        include( APP_VIEW .'/product/listSubNav.php' );
        include( APP_VIEW .'/product/listView.php' );
        break;

    default:
        $categoryId = (array_key_exists(2,$route->getParams())) ? $route->getParams()[2] : 1;
        $categories = listCategories();
        $products = listProducts($categoryId);
        include( APP_VIEW .'/product/listSubNav.php' );
        include( APP_VIEW .'/product/listView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );


// Local Functions
function getProduct($productId) {
    $product = null;
    if(APP_USE_DB){
        $sql = "SELECT
                *
              FROM
                product
              WHERE
                id = ?";
        $dbObj = new db();
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([$productId]);
        $product = $dbObj->dbFetch("assoc");
    }else{
        $allProducts = unserialize(APP_PRODUCTS);
        foreach($allProducts as $key => $prod){
            debug_to_console($prod);
            debug_to_console($productId);
            debug_to_console($prod['id']);
            if($prod['id'] == $productId){
                $product = $prod;
                break;
            }
        }
    }
    
    return $product;
}

function listCategories() {
    $categories = null;
    if(APP_USE_DB){
        $sql = "SELECT
                *
              FROM
                category
              ORDER BY
                name";

        $dbObj = new db();
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute();
        $categories = $dbObj->dbFetch("all");
    }else{
        $categories = unserialize(APP_CATEGORIES);
    }

    return $categories;
}
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

function listProducts($categoryId) {
    $products = null;
    if(APP_USE_DB){
        $sql = "SELECT
                *
              FROM
                product
              WHERE
                category = ?
              ORDER BY
                name";

        $dbObj = new db();
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([$categoryId]);
        $products = $dbObj->dbFetch("all");
    }else{
        $products = array();
        $allProducts = unserialize(APP_PRODUCTS);
        $category = unserialize(APP_CATEGORIES)[$categoryId];
        
        foreach($allProducts as $key => $prod){
            if($prod['category'] === $category['name']){
                array_push($products, $prod);
            }
        }
    }

    return $products;
}
