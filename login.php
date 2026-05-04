<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>please password</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            text-align: center;
            background-color:black;
            color:white;
        }
        div {
            position: relative;
            top: 5rem;
        }
    </style>
</head>
<body>
    <div>
        <form action="login.php" method="post">
            <label for="passwdInput">password:</label>
            <input type="text" name="password" id="passwdInput">
            <input type="submit" value="提交" id="submitBtn">
        </form>
        <?php
            $passwd = $_POST["password"];
            $check = "147";

            if ($passwd == $check) {
                # code...
                ob_end_clean();
                require_once("index.php");
            } else {
                # code...
                if ($passwd != "") {
                    # code...
                    echo "<h2>password error</h2>";
                }
            }
        ?>
    </div>
</body>
<script>
    document.getElementById("passwdInput").focus();
    document.getElementById("passwdInput").addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            event.preventDefault(); // 阻止默认的提交行为
            this.form.submit(); // 提交表单
            document.getElementById("passwdInput").value = "";
        }
    });
    document.getElementById("submitBtn").addEventListener("click", function() {
        event.preventDefault(); // 阻止默认的提交行为
        this.form.submit(); // 提交表单
        document.getElementById("passwdInput").value = "";
    });
</script>
</html>