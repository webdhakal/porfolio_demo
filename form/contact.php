<?php
require '../class/DB.php';
require '../site-data.php';

$appLevel = $site['app_level'] === 'prod' ? 'https://' : 'http://';

try {
    $data = [];

    $data['first_name'] = "'" . $_REQUEST['first_name'] . "'";
    $data['last_name']  = "'" .  $_REQUEST['last_name'] . "'";
    $data['email']      = "'" .  $_REQUEST['email'] . "'";
    $data['subject']    = "'" .  $_REQUEST['subject'] . "'";
    $data['message']    = "'" .  $_REQUEST['message'] . "'";

    $keys     = array_keys($data);
    $dataKeys = join(', ', $keys);
    $data     = join(', ', $data);

    if (!empty($data)) {
        $sql = "INSERT INTO contact_us ($dataKeys) VALUES ($data)";
        DB::create($sql);
        session_start();
        $_SESSION['message'] = "Thank you for contacting us";
    }

    header('Location: ' . $appLevel . $_SERVER['HTTP_HOST'] . '/contact.php');
    exit();
} catch (PDOException $e) {
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
