<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Midtrans\Config::$isProduction = false;
Midtrans\Config::$serverKey = $_ENV['MIDTRANS_SERVER_KEY'];

$notif = new Midtrans\Notification();

$transaction = $notif->transaction_status;
$type = $notif->payment_type;
$order_id = $notif->order_id;
$fraud = $notif->fraud_status;

$message = 'ok';

if ($transaction == 'capture') {
    // For credit card transaction, we need to check whether transaction is challenge by FDS or not
    if ($type == 'credit_card') {
        if ($fraud == 'challenge') {
            // TODO set payment status in merchant's database to 'Challenge by FDS'
            // TODO merchant should decide whether this transaction is authorized or not in MAP
            $message = "Transaction order_id: " . $order_id ." is challenged by FDS";
        } else {
            // TODO set payment status in merchant's database to 'Success'
            $message = "Transaction order_id: " . $order_id ." successfully captured using " . $type;
        }
    }
} elseif ($transaction == 'settlement') {
    // TODO set payment status in merchant's database to 'Settlement'
    $message = "Transaction order_id: " . $order_id ." successfully transfered using " . $type;
} elseif ($transaction == 'pending') {
    // TODO set payment status in merchant's database to 'Pending'
    $message = "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
} elseif ($transaction == 'deny') {
    // TODO set payment status in merchant's database to 'Denied'
    $message = "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
} elseif ($transaction == 'expire') {
    // TODO set payment status in merchant's database to 'expire'
    $message = "Payment using " . $type . " for transaction order_id: " . $order_id . " is expired.";
} elseif ($transaction == 'cancel') {
    // TODO set payment status in merchant's database to 'Denied'
    $message = "Payment using " . $type . " for transaction order_id: " . $order_id . " is canceled.";
}

$filename = $order_id . ".txt";
$dirpath = 'log';
is_dir($dirpath) || mkdir($dirpath, 0777, true);

echo file_put_contents($dirpath . "/" . $filename , $message);