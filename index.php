<?php
$email = $_POST["sendTo"];
$title = $_POST["title"];
$content = $_POST["content"];

echo "Primatelj: " . $email . "<br>Naslov: " . $title . "<br>Sadržaj: " . $content . "<hr>";

ini_set("SMTP", "smpt.gmail.com");
ini_set("sendmail_from", "bernardkozaric@gmail.com");

if(mail($email, $title, $content)){
    preg_match('/[^@]+@[A-z]+\.[A-z]{1,4}/', $email, $matches, PREG_SET_ORDER, 0);
    if(count($matches) > 0)
    {
        echo "Poruka uspješno poslana!";
    }
    else
    {
        echo "Email adresa koju si upiso je netočna!";
    }
}
else{
    echo "Poruka nije poslana";
}

echo "<br><br><a href='index.html'><input type='button' value='Novi mail'></a>";

?>
