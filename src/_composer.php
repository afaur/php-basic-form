<?PHP

// Get the path of where the currently executing php file lives.
$SRC_DIR = __DIR__;

// Get the path to where the vendor directory lives.
$PKG_PATH = "{$SRC_DIR}/../vendor";

// Load all of the composer installed php packages.
require "{$PKG_PATH}/autoload.php";

