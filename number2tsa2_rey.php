<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            padding:20px;
        }

        table{
            width:70%;
            border-collapse: collapse;
            margin:auto;
            background:white;
        }

        th, td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }

        th{
            background:#ddd;
        }

        h2{
            text-align:center;
        }
    </style>
</head>
<body>

<?php

// USER DEFINED FUNCTIONS

// Cube
function cube($s){
    return pow($s,3);
}

// Rectangular Prism
function rectangularPrism($l,$w,$h){
    return $l*$w*$h;
}

// Cylinder
function cylinder($r,$h){
    return pi()*pow($r,2)*$h;
}

// Cone
function cone($r,$h){
    return (pi()*pow($r,2)*$h)/3;
}

// Sphere
function sphere($r){
    return (4/3)*pi()*pow($r,3);
}

// Pyramid
function pyramid($l,$w,$h){
    return ($l*$w*$h)/3;
}

?>

<h2>Volume of Shapes</h2>

<table>
    <tr>
        <th>Shape</th>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

    <tr>
        <td>Cube</td>
        <td>s = 5</td>
        <td>V = s³</td>
        <td><?php echo cube(5); ?></td>
    </tr>

    <tr>
        <td>Rectangular Prism</td>
        <td>l=4, w=3, h=2</td>
        <td>V = lwh</td>
        <td><?php echo rectangularPrism(4,3,2); ?></td>
    </tr>

    <tr>
        <td>Cylinder</td>
        <td>r=3, h=5</td>
        <td>V = πr²h</td>
        <td><?php echo round(cylinder(3,5),2); ?></td>
    </tr>

    <tr>
        <td>Cone</td>
        <td>r=3, h=5</td>
        <td>V = (πr²h)/3</td>
        <td><?php echo round(cone(3,5),2); ?></td>
    </tr>

    <tr>
        <td>Sphere</td>
        <td>r=3</td>
        <td>V = (4/3)πr³</td>
        <td><?php echo round(sphere(3),2); ?></td>
    </tr>

    <tr>
        <td>Pyramid</td>
        <td>l=4, w=3, h=6</td>
        <td>V = (lwh)/3</td>
        <td><?php echo pyramid(4,3,6); ?></td>
    </tr>

</table>

</body>
</html>