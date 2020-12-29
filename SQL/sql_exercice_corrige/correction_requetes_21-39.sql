/*21 : Sélectionner les « directeurs et les techniciens » du service 1.*/
select *
from emp
where noserv=1
and emploi in ('DIRECTEUR','TECHNICIEN');
/* 22 : Sélectionner les employés du service 1 qui sont directeurs ou techniciens.*/
select *
from emp
where noserv=1
and (emploi='DIRECTEUR' or emploi='TECHNICIEN');
/*23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et
travaillant dans le service 1.*/
select *
from emp
where emploi not in ('DIRECTEUR','TECHNICIEN')
and noserv=1;

/*24 : Sélectionner les employés qui sont techniciens, comptables ou vendeurs.*/
select *
from emp
where emploi in('TECHNICIEN','COMPTABLE','VENDEUR');
/* 25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur.*/
select *
from emp
where emploi not in('TECHNICIEN','COMPTABLE','VENDEUR');
/* 26 : Sélectionner les directeurs des services 2, 4 et 5.*/
select *
from emp
where emploi='DIRECTEUR'
and noserv in(2,4,5);

/*27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5.*/
select * 
from emp
where sup is not null
and noserv not in(1,3,5);
/* 28 : Sélectionner les employés qui gagnent entre 20000 et 40000 euros, bornes comprises.*/
select nom, emploi, sal+ifnull(comm,0) as revenu
from emp
where sal+ifnull(comm,0) BETWEEN 20000 and 40000;
/*29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros.*/
select nom, emploi,sal+ifnull(comm,0) as revenu
from emp
where sal+ifnull(comm,0) not BETWEEN 20000 and 40000;

/* 30 : Sélectionner les employés qui ne sont pas directeur et qui ont été embauchés en 88.*/
select * 
from emp
where emploi<>'DIRECTEUR'
and embauche like '%88';

/*ou*/
select * 
from emp
where not emploi='DIRECTEUR'
and embauche between '1988-01-01' and '1988-12-31'

/*ou
-- and embauche like '1988/%/%';
-- ou 
-- and embauche like '1988/__/__';
*/

/* 31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN.*/
select *
from emp
where emploi='DIRECTEUR'
and noserv between 2 and 5;

/*32 :Sélectionner les employés dont le nom commence par la lettre M.*/
select nom, prenom, emploi, noserv
from emp
where nom like 'M%';
/*33 : Sélectionner les employés dont le nom se termine par T.*/
select nom, prenom, emploi, noserv
from emp
where nom like '%T';
/* 34 : Sélectionner les employés ayant au moins deux E dans leur nom.*/
select nom, prenom, emploi, noserv
from emp
where nom like '%E%E%';

/*35 : Sélectionner les employés ayant exactement un E dans leur nom.*/
select nom, prenom, emploi, noserv
from emp
where nom like '%E%'
minus  /* ne fonctionne pas sur mysql*/
select nom, prenom, emploi, noserv
from emp
where nom like '%E%E%';

/*ou*/
select nom, prenom, emploi, noserv
from emp
where nom like '%E%'
and nom not like '%E%E%';

/*36 : Sélectionner les employés ayant au moins un N et un O dans leur nom.*/
select nom, prenom, emploi, noserv
from emp
where nom like '%N%'
and nom like '%O%';

/* ou */
select *
from emp
where nom like '%O%N%'
or nom like '%N%O%';

/*37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N.*/
select nom, prenom, emploi, noserv
from emp
where nom like '%N'
and nom like '______';  /* 6 underscores
/*ou*/
select nom, prenom, emploi, noserv
from emp
where nom like '_____N'  /* 5 underscores
/*38 : Sélectionner les employés dont la troisième lettre du nom est un R.*/
select nom, prenom, emploi, noserv
from emp
where nom like '__R%';  /* 2 underscores

/* 39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères.*/
select nom, prenom, emploi, noserv
from emp
where nom not like '_____';   /* 5 underscores

/*ou*/
select *
from emp
where length(nom) <> 5;

