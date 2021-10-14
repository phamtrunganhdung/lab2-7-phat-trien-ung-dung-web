<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'savingaccount.php';
        $account = new SavingAccount();
        $account->deposit(100);
        $account->setInterestRate(0.05);
        $account->addInterest();
        echo $account->getBalance();
    ?>
</body>
</html>