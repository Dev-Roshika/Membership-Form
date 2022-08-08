<html>
    <head>
    <title>Thank You</title>
    </head>
        <body>
            <h1>Thank You</h1>
            <p>Thank you for registering. Here is the information you submitted.</p>
            <table border="1"; style = "border-collapse:collapse";>
                    <tr>
                        <td>First name: </td>
                        <td> <?php echo $_POST["n_firstname"] ;?> </td>
                    </tr>
                    <tr>
                        <td>Last name: </td>
                        <td> <?php echo $_POST["n_lastname"] ;?> </td>
                    </tr>
                    <tr>
                        <td>Gender: </td>
                        <td> <?php echo $_POST["n_gender"] ;?> </td>
                    </tr>
                    <tr>
                        <td>Following course: </td>
                        <td> <?php echo $_POST["n_course"] ;?> </td>
                    </tr>
                </table>
        </body>
</body>
</html> 