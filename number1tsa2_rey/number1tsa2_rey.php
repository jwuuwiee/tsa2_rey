<?php
    $students = [
        [
            "name" => "Ramos, Sebastian Zephyr August",
            "image" => "profile pics/zephyr.jpeg",
            "description" => "Nonchalant yet observant. Student Council President with a strong suit in all Mathematics subjects. Consistently ranked 1st in their batch.",
            "fact" => "Has multiple piercings and tattoos, but is still a model student. ",
        ],

        [
            "name" => "Delos Santos, Tristan Zenith Ezekiel",
            "image" => "profile pics/zenith.jpeg",
            "description" => "Golden retriever type of guy. Annoyingly good at everything but also hardworking and determined. He is the Vice President of the Student Council",
            "fact" => "Has a variety of pets, three cats, two dogs, a turtle, two bearded dragons, and a frog. Also does volunteer work at the local animal shelter on weekends.", 
        ],
        [
            "name" => "Tachibana, Tatsuo Kenji",
            "image" => "profile pics/kenji.jpeg",
            "description" => "An ex-gangster who changed because of Zephyr and Zenith. He was saved from getting beat up to pay his debts, and in return, he vowed to protect and stay loyal to their group.",
            "fact" => "Used to be an illegal racer. He has snake-like scars due to him ratting out their rivals.",
        ],
        [
            "name" => "Del Valle, Kaiden Mercury",
            "image" => "profile pics/mercury.jpeg",
            "description" => "Part of The Watchtower, Zielle's own journalism organization. He is the one who takes the photos for the school paper",
            "fact" => "Lola's boy, loves baking with her during his free time.",
        ],
        [
            "name" => "Salazar, Jaden Marcus Alistair",
            "image" => "profile pics/marcus.jpeg",
            "description" => "Captain of the Zielle Iron Wolves, the school's basketball team. He's a hardworking and determined person, juggling both his academic scholarship and his sports scholarship.",
            "fact" => "Loves collecting rare comic books and has a personal library with over 500 volumes.",
        ],
        [
            "name" => "Nakayama, Ren",
            "image" => "profile pics/ren.jpeg",
            "description" => "The only girl in the group of guys (Samahan ng mga Pogi). Finally out of her conservative family, she is now free to express herself. She is the student council's secretary.",
            "fact" => "Loves reading mystery novels and has an obsession with solving puzzles.",
        ],
        [
            "name" => "Ramos, Zacharius Yuan",
            "image" => "profile pics/yuan.jpeg",
            "description" => "The shyest one and the only male in their circle (Powerpuff Baddies). He is Zephyr's younger brother who looks up to him a lot. Passionate about fashion and he's technically the group's stylist.",
            "fact" => "Does nail art commisions on the side and often gets hired to do makeup for events and photoshoots.",
        ],
        [
            "name" => "De Dios, Iris Nakeisha Elizabeth",
            "image" => "profile pics/keisha.jpeg",
            "description" => "She's someone who you can hear even if you're not looking at her. She's loud and expressive, but also very kind and caring to her friends. She is Zephyr's academic rival and is ranked 2nd in their batch.",
            "fact" => "Has her own YouTube channel where she posts her podcasts.",
        ],
        [
            "name" => "Santiago, Venus Annalise",
            "image" => "profile pics/venus.jpeg",
            "description" => "Child Prodigy. She was supposed to be competing internationally for ballet, figure skating, and gymnastics, yet a fatal car accident changed her life forever. Now hard of hearing, she struggles to adjust to her new life.",
            "fact" => "Loves painting and even had one of her pieces displayed in a local gallery.",
        ],
        [
            "name" => "Zablan, Kloe Xyrainne",
            "image" => "profile pics/xyra.jpeg",
            "description" => "Editor in Chief of The Watchtower, Zielle's own journalism organization. She's a very hardworking and determined person. Not only does she edit the articles, but she also writes some of them. She's also the one who manages the Watchtower's social media accounts.",
            "fact" => "Does MCing for events and is also a part-time radio host for a local station.",
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
            <th> Image </th>
            <th> Name </th>
            <th> Description </th>
            <th> Fun Fact </th>
        </tr>

    <?php
    
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td><img src='" . $student['image'] . "' alt='" . $student['name'] . "' width='120' height='150'></td>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['description'] . "</td>";
        echo "<td>" . $student['fact'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>
</div>
</body>
</html>

