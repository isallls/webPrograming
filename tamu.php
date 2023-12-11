<?php
if (isset($_GET["enter"])) { ?>
    <script>
        alert("<?= $_GET['pesan'] ?>terima kasih masukan anda sangat berharga bagi perkembangan website kami")
    </script>

<?php }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <p>masukan nama</p>
        <input type="text">
        <p>masukan pesan</p>
        <textarea name="pesan" id="" cols="30" rows="10">
        </textarea>
        <button type="submit" name="enter">submit</button>
    </form>

</body>

</html>