
<!DOCTYPE html>
<html>
<head>
    <title>Web Class</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', Arial, sans-serif;
        }

        
        header {
            width: 100%;
            background-color: #222;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
        }

        #logo {
            color: #ffcc00;
            font-weight: bold;
            font-size: 22px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: 600;
        }

        nav ul li a:hover {
            color: #ffcc00;
        }

        #search-box input {
            padding: 6px 10px;
            border-radius: 4px;
            border: none;
            outline: none;
        }

        
        #container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 95vh;
            padding: 0 80px;
            background: linear-gradient(135deg, #cd0303, #ff4d00);
            color: white;
        }

        
        #left {
            width: 50%;
        }

        #left h1 {
            font-size: 45px;
            font-weight: 700;
            line-height: 1.2;
        }

        #left span {
            color: #ffcc00;
        }

        #left p {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.5;
            max-width: 500px;
        }

        #left button {
            margin-top: 30px;
            background-color: #ffcc00;
            color: black;
            font-weight: bold;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
        }

        #left button:hover {
            background-color: #ffe066;
        }

        
        #right {
            width: 320px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 30px;
            text-align: center;
        }

        #right h2 {
            margin-bottom: 20px;
            color: #ffcc00;
        }

        #right input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
            outline: none;
        }

        #right button {
            width: 100%;
            background-color: #ffcc00;
            border: none;
            color: black;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        #right button:hover {
            background-color: #ffe066;
        }

        #right p {
            margin-top: 15px;
            font-size: 14px;
        }

        #right a {
            color: #ffcc00;
            text-decoration: none;
        }
    </style>
</head>
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
