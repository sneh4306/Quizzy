<?php
$m = new MongoClient();
echo "connection established";
$db = $m->$quizzy;
echo "database selected";
$col = $db->createCollection("users");
echo "collection created";
$doc = array(
"username" => $_POST["username"],
"email" => $_POST["email"],
"password" => $_POST["password"]
)
$col->insert($doc);
echo "Document inserted!!!!!!!";
?>