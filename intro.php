<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="css/pico.min.css">
    <title>REQUEST POST</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <label>
                Email
                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    autocomplete="email"
                    value="martin@gmail.com" />
            </label>
            <label>
                Password
                <input
                type="password"
                    name="password"
                    placeholder="First name"
                    autocomplete="given-name"
                    value="ah  " />
            </label>
        </fieldset>

        <input
            type="submit"
            value="Subscribe" />
    </form>
</body>

</html>