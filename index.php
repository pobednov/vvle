<?php
namespace vinny;
//require_once('First.php');

//$first = new First;
//$first->Sey();

//echo First::$myStr;
//echo First::Sey();

//echo First::Sey() . "1";

//echo First::Sey();
class Second
{
    public function Divider($a, $b)
    {
        if ($b == 0) {
            //throw new Exception ("Деление на ноль невозможно в этой галактике");
        }

        return $a / $b;

    }
}

try {
    $second = new Second;
    $n1 = $second->Divider(3, 2);
    $n2 = $second->Divider(3, 0);
    //getLine()throw new Exception ("Деление на ноль невозможно в этой галактике", 234);
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<br><br><br>";
var_dump($n1, $n2);
echo "<br><br><br>";


?>
<script>
    var numbers = [9, 25, 36, 99];
    var result = numbers.map(Math.sqrt);

    document.write(result);

    document.write('vinny<br><br><br><br>');
    document.write(1.5 ^ 0);
    //for 1
</script>

<style>
    .vinny {
        width: 100px;
        height: 100px;
        border: 1px solid blue;
        transition: 0.5s;
    }

    .vinny:hover {
        transform: scale(1.1, 1.2);
        margin-top: 15px;
        margin-left: 15px;
        transform: rotate(15deg);
    }
</style>

<div class="vinny">

</div>

<span class="feature2"></span>

<div class="for_feature1"></div>


<div class="feature3"></div>
<input type="text" onkeyup="nft(this.value)">
<button type="submit" id="bu">Go</button>

<script>
    "use strict";
    var nft = function (nice) {
        alert(nice);
    }

    var but = document.getElementById('bu');
    //alert(but);

    //bu.addEventListener( "click" , function() {nft(bu);});


    var probaSecond = function proba(param) {

        var result = param * 2;
        alert(proba);
    }


    bu.addEventListener("click", function () {
        probaSecond(2);
    });


    var mass = {
        name: 'vinny',
        age: 41,
        size: {
            top: 90,
            middle: 60,
            bottom: 90,
            size: {
                top: 10,
                middle: 20,
                bottom: 30
            }
        }
    }


    var otstup = '__';

    function RecursIt(obj) {

        for (var key in obj) {

            document.write(otstup + typeof obj[key] + '(' + key + ')' + ' = ' + obj[key] + '<br>');   //document.write(key + '<br>' );

            if (typeof obj[key] === 'object') {

                function ots() {
                    return otstup = otstup + otstup;
                    console.log(otstup);
                }

                ots();
                return RecursIt(obj[key]);
            }
        }
    }


    RecursIt(mass);

    /****************/

    var salaries = {
        "Вася": 100,
        "Петя": 300,
        "Даша": 250
    };

    var salaries2 = {};

        function MaxSalary(salar){

        var maxSalary = 0;

        for( var key in salar ){

            if (salar[key] > maxSalary){

                maxSalary = salar[key];

            }

        }
        return maxSalary;
    }


    var result = MaxSalary(salaries);

    document.write(result);



    var menu = {
        width: 200,
        height: 300,
        title: "My menu"
    };

    multiplyNumeric(menu);

    function multiplyNumeric(obj){

        for ( var key in obj ){

            if ( !isNaN(obj[key]) ){
                obj[key] *= 2;
            }

        }
        console.log(obj)
    }

    var VinnysArray = [0,1,2];

    for ( var i = 0; i < VinnysArray.length ; i++ ){
        document.write('<br/>'+VinnysArray[i]);
    }

    //document.write('<br/>'+VinnysArray.length);

    var Fruits = ['apple', 'lemon', 'grape','pineapple'];
    Fruits.pop();
    Fruits.push('mango');




    var listing = function one(array){
        for ( var i = 0; i < array.length ; i++ ){
            document.write('<br/>'+array[i]);
        }
    }
    listing(Fruits);


</script>
<div></div>