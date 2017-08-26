<html>
    <head>
        <title>Phonebook</title>
    </head>
    <body>
        <h1>My Contacts</h1>
        <hr>

        <table border="1">
            <tr>
                <td><strong>Fullname</strong></td>
                <td><strong>Contact</strong></td>
            </tr>

            <?php
                foreach ($contacts as $c) {
                    echo "<tr>
                    
                    <td>
                    " . $c->fullname . "
                    </td>
                    <td>". $c->contactno . "
                    </tr>";
                }
            ?>
        </table>
    </body>
</html>