<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // les variables 
        $prenom = "Fatou";
        $age = 34.5;
        $tel = "757747474774";

        echo 'prenom:'.$prenom;

        settype($age, "string");

        echo "<br>".gettype($age);

        // les constantes 
        define("PI", 3.14);

        echo PI;

        // les chaines de caracteres 
        $chaine = "Ma chaine de caracteres";
        echo strlen($chaine); //la taille d'une chaine de caracteres
        echo $chaine[0];
        for ($i=0; $i < strlen($chaine) ; $i++) { 
            echo $chaine[$i]."*";
        }

        echo strchr($chaine, "p");
        echo strcmp($chaine, "Machainedecaracteresdh");
       
        if(ctype_digit($tel)){
            echo "notre chaine comporte uniquement des chiffres";
        }
        echo strtolower($chaine);
        echo strtoupper($chaine);
    ?>

    <script>
        // les variables 
        let prenom = "Modou";
        let age = 34;
        console.log("Prenom:"+prenom);
        console.log(typeof age.toString());

        // les constantes
        const PI = 3.14;

        let chaine = "Ma chaine de caracteres";
        console.log(chaine.length);
        console.log(chaine.includes("a"));
        console.log(chaine.toUpperCase());
    </script>
</body>
</html>