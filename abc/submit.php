<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y ,H:i');
move_uploaded_file($_FILES['file']['tmp_name'], 'files/' . $_FILES['file']['name']);
$file_data = file_get_contents('files/' . $_FILES['file']['name']);
// print_r($data);
$data = file_get_contents("data.json");
$arr = json_decode($data, true);
$arr[] = array('files' => time() . '-' . $_FILES['file']['name'], 'date' => $date, 'bid' => $_POST['bid'], 'Sno' => $_POST['Sno'], 'org' => $_POST['org'], 'Name' => $_POST['Name'], 'Phone' => $_POST['Phone'], 'whatsapp_number' => $_POST['whatsapp_number'], 'dest' => $_POST['dest'], 'availability' => $_POST['availability'], 'types' => $_POST['types'], 'referrer' => $_POST['referrer'], 'first_contacted' => $_POST['first_contacted'], 'who_contacted' => $_POST['who_contacted'], 'email_1' => $_POST['email_1'], 'email_2' => $_POST['email_2'], 'residence' => $_POST['residence'], 'notes' => $_POST['notes']);
file_put_contents("data.json", json_encode($arr));
?>
<!-- 'desc'=>$_POST['desc'], -->