<?php 
$db = mysqli_init();
mysqli_real_connect($db,'localhost','root','root','afpa_test');
$rs = mysqli_query ($db, 'select * from employe');
$data = mysqli_fetch_lengths ($rs);
mysqli_free_result($rs);
mysqli_close($db);

echo '<pre>';
    print_r($data);
echo '</pre>';

?>
<!--  
Assoc >> nom colonne
Array
(
    [0] => Array
        (
            [no_emp] => 1000
            [nom] => leroy
            [prenom] => paul
            [emploi] => president
            [embauche] => 1987-10-25
            [sal] => 55005.50
            [comm] => 
            [noserv] => 1
            [sup] => 
            [noproj] => 103
        )
    [1] => Array
        ( ... )
    [2] => Array
        ( ... )

__________________________________________________________________       
num >> numero
Array
(
    [0] => Array
        (
            [0] => 1000
            [1] => leroy
            [2] => paul
            [3] => president
            [4] => 1987-10-25
            [5] => 55005.50
            [6] => 
            [7] => 1
            [8] => 
            [9] => 103
        )
    [1] => Array
        ( ... )
    [2] => Array
        ( ... )

__________________________________________________________________ 
both >> numero et nom colonne
Array
(
    [0] => Array
        (
            [0] => 1000
            [no_emp] => 1000
            [1] => leroy
            [nom] => leroy
            [2] => paul
            [prenom] => paul
            [3] => president
            [emploi] => president
            [4] => 1987-10-25
            [embauche] => 1987-10-25
            [5] => 55005.50
            [sal] => 55005.50
            [6] => 
            [comm] => 
            [7] => 1
            [noserv] => 1
            [8] => 
            [sup] => 
            [9] => 103
            [noproj] => 103
        )
    [1] => Array
        ( ... )
    [2] => Array
        ( ... )

__________________________________________________________________
mysqli_fetch_assoc >> le premier toute la ligne
Array
(
    [no_emp] => 1000
    [nom] => leroy
    [prenom] => paul
    [emploi] => president
    [embauche] => 1987-10-25
    [sal] => 55005.50
    [comm] => 
    [noserv] => 1
    [sup] => 
    [noproj] => 103
)

__________________________________________________________________
mysqli_fetch_array >> le premier avec nom et numero colonne
Array
(
    [0] => 1000
    [no_emp] => 1000
    [1] => leroy
    [nom] => leroy
    [2] => paul
    [prenom] => paul
    [3] => president
    [emploi] => president
    [4] => 1987-10-25
    [embauche] => 1987-10-25
    [5] => 55005.50
    [sal] => 55005.50
    [6] => 
    [comm] => 
    [7] => 1
    [noserv] => 1
    [8] => 
    [sup] => 
    [9] => 103
    [noproj] => 103
)

__________________________________________________________________
$data = mysqli_fetch_field_direct ($rs, MYSQLI_ASSOC);
stdClass Object
(
    [name] => nom
    [orgname] => nom
    [table] => employe
    [orgtable] => employe
    [def] => 
    [db] => afpa_test
    [catalog] => def
    [max_length] => 9
    [length] => 120
    [charsetnr] => 45
    [flags] => 4097
    [type] => 253
    [decimals] => 0
)

__________________________________________________________________
mysqli_fetch_field
stdClass Object
(
    [name] => no_emp
    [orgname] => no_emp
    [table] => employe
    [orgtable] => employe
    [def] => 
    [db] => afpa_test
    [catalog] => def
    [max_length] => 4
    [length] => 4
    [charsetnr] => 63
    [flags] => 53251
    [type] => 3
    [decimals] => 0
)

__________________________________________________________________
mysqli_fetch_fields
[0] => stdClass Object
(
    [name] => no_emp
    [orgname] => no_emp
    [table] => employe
    [orgtable] => employe
    [def] => 
    [db] => afpa_test
    [catalog] => def
    [max_length] => 4
    [length] => 4
    [charsetnr] => 63
    [flags] => 53251
    [type] => 3
    [decimals] => 0
)
    [1] => Array
        ( ... )
    [2] => Array
        ( ... )

__________________________________________________________________
mysqli_fetch_object
stdClass Object
(
    [no_emp] => 1000
    [nom] => leroy
    [prenom] => paul
    [emploi] => president
    [embauche] => 1987-10-25
    [sal] => 55005.50
    [comm] => 
    [noserv] => 1
    [sup] => 
    [noproj] => 103
)


__________________________________________________________________
mysqli_fetch_row
Array
(
    [0] => 1000
    [1] => leroy
    [2] => paul
    [3] => president
    [4] => 1987-10-25
    [5] => 55005.50
    [6] => 
    [7] => 1
    [8] => 
    [9] => 103
)

__________________________________________________________________


-->