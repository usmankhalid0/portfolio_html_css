<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio </title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <a href="" class="logo">Portfolio</a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="project.php">Projects</a></li>
            <li><a href="experences.php">Experience</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <script>
    const currentPage = window.location.pathname.split("/").pop();
    const menuLinks = document.querySelectorAll("ul li a");
    menuLinks.forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.parentElement.classList.add("active");
        }
    });
</script>
