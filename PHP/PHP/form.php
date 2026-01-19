<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Form</title>
</head>
<body>

<form method="POST" action="result1.php" enctype="multipart/form-data">

    <label>
        Name:
        <input type="text" name="name" required>
    </label>
    <br><br>

    <label>
        Phone:
        <input type="number" name="phone" required>
    </label>
    <br><br>

    <label>
        Email:
        <input type="email" name="email" placeholder="enter email" required>
    </label>
    <br><br>

    <label>
        Gender:
        <input type="radio" name="gender" value="male" required> Male
        <input type="radio" name="gender" value="female"> Female
    </label>
    <br><br>

    <label>
        Select Year:
        <select name="year" required>
            <option value="">--Select--</option>
            <option value="FY">FY</option>
            <option value="SY">SY</option>
            <option value="TY">TY</option>
        </select>
    </label>
    <br><br>

    <label>
        Select Subjects:
        <br>
        <input type="checkbox" name="subject[]" value="Maths"> Maths
        <br>
        <input type="checkbox" name="subject[]" value="Physics"> Physics
        <br>
        <input type="checkbox" name="subject[]" value="Chemistry"> Chemistry
    </label>
    <br><br>

    <label>
        Upload Image:
        <input type="file" name="image">
    </label>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>
