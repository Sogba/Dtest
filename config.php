<?php   
if(!defined('ROOT_DIR'))
    define('ROOT_DIR', './');

    if (!function_exists('loadEnv')) {
    function loadEnv($filePath = 'src/.env')
    {
        if (file_exists($filePath)) {
            $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                if (strpos(trim($line), '#') === 0) {
                    continue;
                }

                list($key, $value) = explode('=', $line, 2);

                $key = trim($key);
                $value = trim($value);

                if (!getenv($key)) {
                    putenv("$key=$value");
                }
            }
        } else {
            throw new Exception("The .env file does not exist.");
        }
    }
}
loadEnv();
?>