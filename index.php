
<!DOCTYPE html>
<html>
<head>
    <title>Web Class</title>
</head> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas veritatis cupiditate dolore quidem dolor consectetur voluptatibus consequatur, enim minima alias recusandae odit, quaerat atque cumque? In, eveniet? Modi, nemo repudiandae?

<body>
    <header>
        <div id="logo">Web Class</div>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT RAB</a></li>
                <li><a href="#">MINAGRI SERVICE</a></li>
                <li><a href="#">YOUR CONTACT</a></li>
            </ul>
        </nav>
        <div id="search-box">
            <input type="text" placeholder="Type to Search...">
        </div>
    </header>

    <section id="container">
        <div id="left">
            <h1>Web Design & <br><span>Development Course</span></h1>
            <p>
                Web design is a specialization of the design stream. They also use
                HTML, CSS, and various editing software, mark-up validators etc. to
                design web pages.
            </p>
            <button>JOIN US</button>
        </div>

        <div id="right">
            <h2>Sign up Here for Rabbit</h2>
            <form action="index.php" method="POST" >
                <input type="text" name="name" placeholder="Enter your names Here"> <br> <br>
                <input type="date" name="date"><br> <br>
                <input type="number" name="centimeters" placeholder="Enter size in centimeters Here">
 <br> <br>
                <input type="number" name="kilogram" placeholder="Enter size in Kirogram Here" > <br> <br>
                <button type="submit">Sign up</button>
                <p>you have an account? <a href="#">login here</a></p>
            </form>
        </div>
    </section>

   <?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $centimeters = $_POST['centimeters'];
    $kilogram = $_POST['kilogram'];

    $conn = new mysqli("localhost", "root", "", "wowee");

    if ($conn->connect_error) {
        die("DB error: " . $conn->connect_error);
    }

    $sql = "INSERT INTO students (name, date, centimeters, kilogram)
            VALUES ('$name', '$date', '$centimeters', '$kilogram')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

</body>
</html>
