<?php

// Setup Application Document Root
define('APP_DOC_ROOT', '/Project');

// Application paths - these should be correct by default
define('APP_DIR_ROOT', dirname(dirname(__FILE__)));
define('APP_CONTROLLER', APP_DIR_ROOT . '/controller');
define('APP_ENTITY', APP_DIR_ROOT . '/entity');
define('APP_MODEL', APP_DIR_ROOT . '/model');
define('APP_VIEW', APP_DIR_ROOT . '/view');
define('APP_JSCRIPT', APP_DOC_ROOT . '/js');
define('APP_IMG', APP_DOC_ROOT . '/img');
define('APP_DEBUG_LOG', APP_DOC_ROOT . '/log');

# Set to true once DB is configured.
define('APP_USE_DB', False);

// Set Debug Level (None: 0, Errors: 1, Warnings: 2, Info: 3, Verbose: 4)
define('APP_DEBUG_LEVEL', 0);

// Set Debug Logging Level (None: 0, Errors: 1, Warnings: 2, Info: 3, Verbose: 4)
define('APP_DEBUG_LOG_LEVEL', 0);

// Authentication Type (None: 0, Internal: 1, Database: 2, LDAP/AD: 3)
define ('APP_AUTH_TYPE', 1);

// User listing file - For Auth Type 1 Only
include('userListing.php');
include('products.php');

//Setup LDAP / Active Directory Connection - - For Auth Type 3 Only
// define ('APP_AUTH_LDAP_SERVER', '[ldap-server-name-or-ip');
// define ('APP_AUTH_LDAP_ROOT', '[ldap-root-for-users]');
// define ('APP_AUTH_LDAP_USER', '[ldap-connection-user]');
// define ('APP_AUTH_LDAP_PASS', '[ldap-cnnection-password]');
// define ('APP_AUTH_LDAP_SEARCH_ATTR', 'uid');
// define ('APP_AUTH_LDAP_RETURN_ATTR', 'dn');

// Application secret for token creation
define('APP_SECRET', '0c93fe42a9b183fe7d369b530d400fa6');


// Setup Database Connection
define('APP_DB_TYPE', 'mysql');
define('APP_DB_HOST', 'localhost');
define('APP_DB_PORT', '3306');
define('APP_DB_NAME', '[db-name]');
define('APP_DB_USER', '[db-user]');
define('APP_DB_PASS', '[db-pass]');

// Setup Additional Named Database Connection(s). e.g. APP_CUSTOM_*
// define('APP_WAREHOUSE_DB_TYPE', 'mssql');
// define('APP_WAREHOUSE_DB_HOST', '[db-host]');
// define('APP_WAREHOUSE_DB_PORT', null);
// define('APP_WAREHOUSE_DB_NAME', '[db-name]');
// define('APP_WAREHOUSE_DB_USER', '[db-user]');
// define('APP_WAREHOUSE_DB_PASS', '[db-pass]');

// Auto load classes
spl_autoload_register(function ( $class_name ) {
    # Look for entity classes
    if ( file_exists( APP_ENTITY . '/' . $class_name . '.php' ) ) {
        include APP_ENTITY . '/' . $class_name . '.php';
    }
    # Grab standard class
    else {
        include APP_MODEL .'/'. $class_name . '.php';
    }
});
