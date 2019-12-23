<?php



class Sql_Filter
{

    function Level1($id)
    {

        if (preg_match('/\s/','_', $id))
            exit('Attack Detected !'); // no whitespaces
        if (preg_match('/[\'"]/', $id))
            exit('Attack Detected !'); // no quotes
        if (preg_match('/[\/\\\\]/', $id))
            exit('Attack Detected !'); // no slashes


    }


    function Level2($id){
        if(preg_match('/\s/', $id))
            exit('Attack Detected !'); // no whitespaces
        if(preg_match('/[\'"]/', $id))
            exit('Attack Detected !'); // no quotes
        if(preg_match('/[\/\\\\]/', $id))
            exit('Attack Detected !'); // no slashes
        if(preg_match('/(and|null|where|limit)/i', $id))
            exit('Attack Detected !'); // no sqli keywords
    }




    function Level3($id){


        if(preg_match('/\s/', $id))
            exit('Attack Detected !'); // no whitespaces
        if(preg_match('/[\'"]/', $id))
            exit('Attack Detected !'); // no quotes
        if(preg_match('/[\/\\\\]/', $id))
            exit('Attack Detected !'); // no slashes
        if(preg_match('/(and|or|null|where|limit)/i', $id))
            exit('Attack Detected !'); // no sqli keywords
        if(preg_match('/(union|select|from|having)/i', $id))
            exit('Attack Detected !'); // no sqli keywords


    }




    function Level4($id){


        if(preg_match('/\s/', $id))
            exit('Attack Detected !'); // no whitespaces
        if(preg_match('/[\'"]/', $id))
            exit('Attack Detected !'); // no quotes
        if(preg_match('/[\/\\\\]/', $id))
            exit('Attack Detected !'); // no slashes
        if(preg_match('/(and|or|null|not)/i', $id))
            exit('Attack Detected !'); // no sqli boolean keywords
        if(preg_match('/(union|select|from|where)/i', $id))
            exit('Attack Detected !'); // no sqli select keywords
        if(preg_match('/(group|order|having|limit)/i', $id))
            exit('Attack Detected !'); // no sqli select keywords
        if(preg_match('/(into|file|case)/i', $id))
            exit('Attack Detected !'); // no sqli operators
        if(preg_match('/(--|#|\/\*)/', $id))
            exit('Attack Detected !'); // no sqli comments


    }


    function Level5($id){


        if(preg_match('/\s/', $id))
            exit('Attack Detected !'); // no whitespaces
        if(preg_match('/[\'"]/', $id))
            exit('Attack Detected !'); // no quotes
        if(preg_match('/[\/\\\\]/', $id))
            exit('Attack Detected !'); // no slashes
        if(preg_match('/(and|or|null|not)/i', $id))
            exit('Attack Detected !'); // no sqli boolean keywords
        if(preg_match('/(union|select|from|where)/i', $id))
            exit('Attack Detected !'); // no sqli select keywords
        if(preg_match('/(group|order|having|limit)/i', $id))
            exit('Attack Detected !'); // no sqli select keywords
        if(preg_match('/(into|file|case)/i', $id))
            exit('Attack Detected !'); // no sqli operators
    }






    function Level6($id){


        if(preg_match('/\s/', $id))
            exit('Attack Detected !'); // no whitespaces
        if(preg_match('/[\'"]/', $id))
            exit('Attack Detected !'); // no quotes
        if(preg_match('/[\/\\\\]/', $id))
            exit('Attack Detected !'); // no slashes
        if(preg_match('/(and|or|null|not)/i', $id))
            exit('Attack Detected !'); // no sqli boolean keywords
        if(preg_match('/(union|select|from|where)/i', $id))
            exit('Attack Detected !'); // no sqli select keywords
        if(preg_match('/(group|order|having|limit)/i', $id))
            exit('Attack Detected !'); // no sqli select keywords
        if(preg_match('/(into|file|case)/i', $id))
            exit('Attack Detected !'); // no sqli operators
        if(preg_match('/(--|#|\/\*)/', $id))
            exit('Attack Detected !'); // no sqli comments
        if(preg_match('/(=|&|\|)/', $id))
            exit('Attack Detected !'); // no boolean operators
        if(preg_match('/(benchmark|sleep)/i', $id))
            exit('Attack Detected !'); // no timing
        if(preg_match('/\s+/',$id)){
            exit('Attack Detected !');
        }





    }

    function Level7($id){


        if (!preg_match('/^[0-9]/',$id)){
            exit('Attack Detected !');
        }

    }


    function Level8($id){
        if (!preg_match('/[0-9]+$/', $id)) {
            exit('Attack Detected !');
        }
    }

function Level9($id){


    if (!preg_match('/^-?[0-9]+$/m', $id)) {
        exit('Attack Detected !');
    }




}



}

function re($id)
{
    return preg_replace("/union/", "__", $id);

}


//$o=new Sql_Filter();
//    $o->Level5("1and and 1=1");


?>