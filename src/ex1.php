<html>
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 1px;
    }

    tr, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }
    </style>
<body>
    <?php
    echo "<h3> Hello world! My name is \"David\" </h3>";
    $title ="PHP is interesting.";
    echo "<h4> $title </h4>";
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "<table>
        <tr>
            <td>S.n.</td>
            <td>Name</td>
            <td>Grade</td>
        </tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td> $g1 </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td> $g2 </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td> $g3 </td>
        </tr>
    </table>";
    echo "<img width = 700px src= \"./Screenshot (12).png\" >";
    ?>
</body>
</html>