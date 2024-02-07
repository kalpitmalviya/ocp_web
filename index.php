<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful One-Page Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Beautiful Website</h1>
    </header>
    <main>
        <section class="content">
            <h2>About Me</h2>
            <p>This is Kalpit Malviya.</p>
        </section>
        <section class="content">
            <h2>Latest Blog Post</h2>
            <p><?php echo "Today is " . date("Y-m-d") . ". Enjoy your day!"; ?></p>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Name</p>
    </footer>
</body>
</html>
