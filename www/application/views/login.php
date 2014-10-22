<!DOCTYPE html>
<html>
<head>
    <title>CMS</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/style41.css">

</head>

<body>
    <div class="container">

        <?php if (isset($error)) {?>
            <small style="color: black;"><?php echo $error; ?></small>
            <br /><br />
        <?php } ?>
        
        
        <form action="login" method="post" autocomplete="off">
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="submit" value="Login"/>
        </form>
            <a id="back" href="/">&larr; Back</a>
    </div>
</body>

</html>