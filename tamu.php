<?php
if (isset($_POST["enter"])) {
?>
    <script>
        alert("<?= $_POST["nama"] ?><?= $_POST['pesan'] ?> terima kasih masukan anda sangat berharga bagi perkembangan website kami");
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
        }

        form {
            margin-top: 20px;
        }

        p {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <form method="POST" action="">
        <p>masukkan nama</p>
        <input type="text" name="nama">
        <p>masukkan pesan</p>
        <textarea name="pesan" cols="30" rows="10"></textarea>
        <button type="submit" name="enter">submit</button>
    </form>
</body>

</html>