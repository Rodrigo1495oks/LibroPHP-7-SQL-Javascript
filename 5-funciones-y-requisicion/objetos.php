<!-- objetos -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // declaracion de calses
    // instanciar objeto
    // ejemplo 5-10

    $object = new User();


    class User
    {
        public $name, $password;

        function saveUser()
        {
            echo 'save user code goes here';
        }
    }


    ?>

    <?php

    // creacion de objetos


    $object = new User('Rodrigo', 'anaxagoras25@');



    // ejemplo 5-11

    print_r($object);

    echo "<br>";
    $object->saveUser();


// clonacion de objetos

// cnstructores

// ejemplo 5-14 creacion de un metodo constructor
    class User1 {
        public $password;

        function functionConstruct($param1, $param2){

            // constructor statement;
            public $userName='Guest';
        }
        function get_pass(){
            return $this->pasword
        }
    }

    // 5-15 creacion de un metodo desructor
    class User{

    }
// }declaracion de propiedad
// ejemplo 5-17 definicion implicita de uyna propiedad (no recomentdado)

$object1=new User();

$object1->name='Agustina CArdinale';
    ?>
</body>

</html>