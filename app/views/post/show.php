<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>


    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            /* width: 100%; */
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        /* 
        tr:nth-child(even) {
            background-color: #dddddd;
        } */
    </style>
</head>

<body>

    <div>
        <p style="max-height: 50px;"><a href="<?= URLROOT ?>/Pages">
                <img src="<?= URLROOT ?>/public/img/logo.png" width="500" height="300" alt="Logo">
            </a></p>
    </div>
    <div class="content" style="text-align: center;">


        <h1><?= $data->title; ?></h1>
        <div><strong>Body</strong>: <?= $data->body; ?></div>


    </div>

    <?php
    if (isset($_COOKIE["PHPSESSID"])) : ?>

        <h2>Leave a comment below...</h2>
        <section id="content">
            <form id="comment" method="post" >
                <input id="name" name="name" type="text" placeholder="name" required><br>
                <input id="email" name="email" placeholder="password" type="password"><br>
                <input id="url" name="url" placeholder="url" type="url"><br>
                <textarea name="comment" id="comm" cols="30" rows="10" placeholder="comment" required></textarea><br>
                <br />
                <input type="submit" value="Comment">
            </form>
        </section>

    <?php endif; ?>




</body>

</html>