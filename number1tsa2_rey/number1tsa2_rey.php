<?php
    $students = [
        [
            "name" => "Ramos, Sebastian Zephyr August",
            "image" => "profile pics/zephyr.jpeg",
            "age" => 21,
            "birthday" => "January 2, 2005",
            "strand" => "STEM",
            "description" => "Nonchalant yet observant. Student Council President with a strong suit in all Mathematics subjects. Consistently ranked 1st in their batch."
        ],
        [
            "name" => "Delos Santos, Tristan Zenith Ezekiel",
            "image" => "profile pics/zenith.jpeg",
            "age" => 22,
            "birthday" => "February 23, 2004",
            "strand" => "STEM",
            "description" => "Golden retriever type of guy. Annoyingly good at everything but also hardworking and determined. He is the Vice President of the Student Council",
        ],
        [
            "name" => "Tachibana, Tatsuo Kenji",
            "image" => "profile pics/kenji.jpeg",
            "age" => 20,
            "birthday" => "July 27, 2005",
            "strand" => "ABM",
            "description" => "An ex-gangster who changed because of Zephyr and Zenith. He was saved from getting beat up to pay his debts, and in return, he vowed to protect and stay loyal to their group.",
        ],
        [
            "name" => "Del Valle, Kaiden Mercury",
            "image" => "profile pics/mercury.jpeg",
            "age" => 20,
            "birthday" => "October 30, 2005",
            "strand" => "ABM",
            "description" => "Part of The Watchtower, Zielle's own journalism organization. He is the one who takes the photos for the school paper",
        ],
        [
            "name" => "Salazar, Jaden Marcus Alistair",
            "image" => "profile pics/marcus.jpeg",
            "age" => 20,
            "birthday" => "April 20, 2006",
            "strand" => "HUMSS",
            "description" => "Captain of the Zielle Iron Wolves, the school's basketball team. He's a hardworking and determined person, juggling both his academic scholarship and his sports scholarship.",
        ],
        [
            "name" => "Nakayama, Ren",
            "image" => "profile pics/ren.jpeg",
            "age" => 20,
            "birthday" => "May 19, 2005",
            "strand" => "ABM",
            "description" => "The only girl in the group of guys (Samahan ng mga Pogi). Finally out of her conservative family, she is now free to express herself. She is the student council's secretary.",
        ],
        [
            "name" => "Ramos, Zacharius Yuan",
            "image" => "profile pics/yuan.jpeg",
            "age" => 20,
            "birthday" => "February 22, 2006",
            "strand" => "HUMSS",
            "description" => "The shyest one and the only male in their circle (Powerpuff Baddies). He is Zephyr's younger brother who looks up to him a lot. Passionate about fashion and he's technically the group's stylist.",
        ],
        [
            "name" => "De Dios, Iris Nakeisha Elizabeth",
            "image" => "profile pics/keisha.jpeg",
            "age" => 21,
            "birthday" => "March 16, 2005",
            "strand" => "HUMSS",
            "description" => "She's someone who you can hear even if you're not looking at her. She's loud and expressive, but also very kind and caring to her friends. She is Zephyr's academic rival and is ranked 2nd in their batch.",
        ],
        [
            "name" => "Santiago, Venus Annalise",
            "image" => "profile pics/venus.jpeg",
            "age" => 21,
            "birthday" => "December 31, 2004",
            "strand" => "STEM",
            "description" => "Child Prodigy. She was supposed to be competing internationally for ballet, figure skating, and gymnastics, yet a fatal car accident changed her life forever. Now hard of hearing, she struggles to adjust to her new life.",
        ],
        [
            "name" => "Zablan, Kloe Xyrainne",
            "image" => "profile pics/xyra.jpeg",
            "age" => 20,
            "birthday" => "August 9, 2005",
            "strand" => "ABM",
            "description" => "Editor in Chief of The Watchtower, Zielle's own journalism organization. She's a very hardworking and determined person. Not only does she edit the articles, but she also writes some of them. She's also the one who manages the Watchtower's social media accounts.",
        ]

    ];

?>


<!DOCTYPE HTML>
<html>
    <head>
        <title> My Original Characters - Breath of Fresh Air </title>
        <link rel ="stylesheet" href = "style.css">
        <meta name="viewport" content="width=1000">

        <style>

body {
    font-family: Arial;
    background-color: #0b1f3a;
    padding: 20px;
}
h1 {
    text-align: center;
    color: #ffffff;
}
h1 {
    text-align: center;
    color: #ffffff;
}

table {
    width: 1000px;
    table-layout: fixed;
    background-color: #ffffff;
}

th {
    background-color: #26236b;
    color: white;
    padding: 12px;
}

td {
    border: 1px solid #ddd;
    text-align: center;
    padding: 10px;
}

img{
    border-radius: 0;
}

.container {
    width: 1000px;
    margin: 0 auto;
}



</style>
    </head>

<body>
    <h1> My Original Characters - Breath of Fresh Air </h1>

    <div class="container">
    <table>
        <tr>
            <th> Name </th>
            <th> Image </th>
            <th> Age </th>
            <th> Birthday </th>
            <th> Strand </th>
            <th> Description </th>
        </tr>

    <?php
    
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td><img src='" . $student['image'] . "' alt='" . $student['name'] . "' width='120' height='150'></td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "<td>" . $student['birthday'] . "</td>";
        echo "<td>" . $student['strand'] . "</td>";
        echo "<td>" . $student['description'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>
</div>
</body>
</html>

