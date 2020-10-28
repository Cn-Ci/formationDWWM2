/* connexion a mariaDB */
# mysql -u root -p

/* entrer dans le dossier ou se trouve les tables */
use afpa_test

/* voir le tableau */
select * from employe

/* creer un tableau */
create table afpa_test.employe 
 (
    no_emp int(4) primary key, /* clé primaire */
    nom varchar(30) not null , 
    prenom varchar(30) not null, 
    emploi varchar(30),  
    embauche date, 
    sal float(9,2), 
    comm float(9,2),
    noserv int (2),
    sup int(4)
    );

/* inserer des valeurs dans le tableau */
Insert into employe (no_emp, nom, prenom, emploi, embauche, sal, comm, sup, noserv)
values
(1000, 'leroy', 'paul', 'president', '1987-10-25', 55005.5, null, null, 1),

/* clé etrangère */
ALTER TABLE employe
ADD FOREIGN KEY (sup) REFERENCES employe(no_emp);



        /* Exercices : Select simple */
/* •1 : Sélectionner toutes les colonnes de la table SERV. */
select * from `service`

/* •2 : Sélectionner d’une autre manière ces colonnes. */

/* •3 : Sélectionner les colonnes SERVICE et NOSERV de la table SERV. */
select `noserv`, `service` from service

/* •4 : Sélectionner toutes les colonnes de la table EMP. */
select * from employe

/* •5 : Sélectionner les emplois de la table EMP. */
select `emploi` from employe

/* •6 : Sélectionner les différents emplois de la table EMP */
select distinct emploi from `employe`



        /* Exercices : Selects simples */
/* •07 : Sélectionner les employés du service N°3. */
select * from employe where `noserv` =3

/* •08 : Sélectionner les noms, prénoms, numéro d’employé, numéro  de service de tous les techniciens.*/
select `nom`,`prenom`, `no_emp`, `noserv` from `employe` where `emploi`= "technicien"

/* •09 : Sélectionner les noms, numéros de service de tous les services  dont le numéro est supérieur à 2.*/
select nom, prenom, noserv from `employe` where noserv > 2

/* •10 : Sélectionner les noms, numéros de service de tous les  services dont le numéro est inférieur ou égal à 2. */
select nom, noserv from `employe` where noserv >= 2

/* •11: Sélectionner les employés dont la commission est inférieure au salaire.  */
select nom, prenom, noserv from `employe` where comm < sal



        /* Exercices : Travailler avec NULL  */  
/* •12 : Sélectionner les employés qui ne touchent jamais de  commission. */
select nom, prenom, noserv, comm from `employe` where isnull(comm) or `comm` = 0

/* •13 : Sélectionner les employés qui touchent éventuellement une  commission et dans l’ordre croissant des commissions. */
select nom, prenom, noserv, comm from `employe` where not isnull(comm)

/* •14 : Sélectionner les employés qui ont un chef. */
select nom, prenom, sup from `employe` where not isnull(sup)

/* •15 : Sélectionner les employés qui n’ont pas de chef. */
select nom, prenom from `employe` where isnull(sup)



        /* Select avec prédicats AND, OR et NOT */
/* •16 : Sélectionner les noms, emploi, salaire, numéro de service de tous les employés du service 5 qui gagnent plus de 20000€. */
select nom, emploi, sal, noserv from `employe` where `noserv` = 5 and `sal` > 20000

/* •17 : Sélectionner les vendeurs du service 6 qui ont un revenu mensuel supérieur ou égal à 9500€. */
select nom, emploi from `employe` where `noserv` = 6 and `sal` >= 9500

/* •18 : Sélectionner dans les employés tous les présidents et directeurs.   */
select nom, emploi from `employe` where `emploi` = "president" or `emploi`= "directeur"

/* •19 : Sélectionner les directeurs qui ne sont pas dans le service 3. */
select nom, emploi, noserv from `employe` where `noserv` = 1 or `noserv` = 2 or `noserv` = 4 or `noserv` = 5 or `noserv` = 6

/* •20 : Sélectionner les directeurs et « les techniciens du service 1». */
select nom, emploi, noserv from `employe` where `noserv` = 1 and `emploi`= "technicien" or `emploi` = "directeur"

/* •21 : Sélectionner les « directeurs et les techniciens » du service 1. */
select nom, emploi, noserv from `employe` where `noserv` = 1 and `emploi`= "technicien" or `noserv` = 1 and `emploi` = "directeur"

/* •22 : Sélectionner les employés du service 1 qui sont directeurs ou techniciens. */
select nom, emploi, noserv from `employe` where `noserv` = 1 and `emploi`= "directeur" or `noserv` = 1 and `emploi` = "technicien"

/* •23 : Sélectionner les employés qui ne sont ni directeur, ni technicien et  travaillant dans le service 1. */
select nom, emploi, noserv from `employe` where `noserv` = 1 and not `emploi`= "technicien" or `noserv` = 1 and not `emploi` = "directeur"



        /* Exercices: IN, BETWEEN, LIKE */
/* •24 : Sélectionner les employés qui sont techniciens, comptables ou vendeurs. */
select nom, emploi, noserv from `employe` where `emploi`= "technicien" or `emploi` = "comptable" or `emploi` = "vendeur"

/* •25 : Sélectionner les employés qui ne sont ni technicien, ni comptable, ni vendeur. */
select nom, emploi, noserv from `employe` where not `emploi`= "technicien" or not `emploi` = "comptable" or not `emploi` = "vendeur"

/* •26 : Sélectionner les directeurs des services 2, 4 et5. */
select nom, emploi, noserv from `employe` where `noserv` = 2 and `emploi`= "directeur" or `noserv` = 4 and `emploi`= "directeur" or `noserv` = 5 and `emploi`= "directeur"

/* •27 : Sélectionner les subalternes qui ne sont pas dans les services 1, 3, 5. */
select nom, emploi, noserv from `employe` where `noserv` = 1 and `emploi`= "directeur" or `noserv` = 3 and `emploi`= "directeur" or `noserv` = 5 and `emploi`= "directeur"

/* •28: Sélectionner les employés qui gagnent entre 20000 et 40000 euros, bornes comprises. */
select nom, emploi, sal from `employe` where `sal` >= 20000 and `sal` <= 40000

/* •29 : Sélectionner les employés qui gagnent moins de 20000 et plus de 40000 euros. */
select nom, emploi, sal from `employe` where `sal` <= 20000 or `sal` >= 40000

/* •30 : Sélectionner les employés qui ne sont pas directeur et qui ont été embauchés en 88. */
select nom, emploi, embauche from `employe` where not `emploi` = "directeur" and `embauche` like "1988%"

/* •31 : Sélectionner les directeurs des services 2 ,3 , 4, 5 sans le IN. */
SELECT nom FROM `employe` WHERE  `emploi`= "directeur" AND (`noserv` IN (2,3,4))

/* •32 :Sélectionner les employés dont le nom commence par la lettre M. */
select nom from `employe` where `nom` like "M%" or `nom` like "m%"

/* •33 : Sélectionner les employés dont le nom se termine par T. */
select nom from `employe` where `nom` like "%t"

/* •34 : Sélectionner les employés ayant au moins deux E dans leur nom. */
select nom from `employe` where `nom` like "%e%e%"

/* •35 : Sélectionner les employés ayant exactement un E dans leur nom. */
select nom from `employe` where `nom` like "%e%"

/* •36 : Sélectionner les employés ayant au moins un N et un O dans leur nom. */
select nom from `employe` where `nom` like "%n%" or `nom` like "%o%"

/* •37 : Sélectionner les employés dont le nom s'écrit avec 6 caractères et qui se termine par N. */
select nom from `employe` where `nom` like "_____n"

/* •38 : Sélectionner les employés dont la troisième lettre du nom est un R. */
select nom from `employe` where `nom` like "__r%"

/* •39 : Sélectionner les employés dont le nom ne s'écrit pas avec 5 caractères */
select nom from `employe` where not `nom` like "_____"



        /* Exercices : ORDER BY */
/* •40 : Trier les employés (nom, prénom, n° de service, salaire) du service 3 par  ordre de salaire croissant. ASC */
select nom, prenom, noserv, sal from `employe` where `noserv` = 3 order by sal asc

/* •41 : Trier les employés (nom, prénom, n° de service , salaire) du service 3  par ordre de salaire décroissant. DESC */
select nom, prenom, noserv, sal from `employe` where `noserv` = 3 order by sal desc

/* •42 : Idem en indiquant le numéro de colonne à la place du nom colonne. */
select nom, prenom, noserv, sal from `employe` where `noserv` = 3 ORDER BY 4 ASC

/* •43 : Trier les employés (nom, prénom, n° de service, salaire, emploi) par  emploi, et pour chaque emploi par ordre décroissant de salaire. */
select nom, prenom, noserv, sal, emploi from `employe` order by `emploi` asc, `sal` ASC

/* •44 : Idem en indiquant les numéros de colonnes. */
select nom, prenom, noserv, sal, emploi from `employe` order by 5 asc, 4 ASC

/* •45 : Trier les employés (nom, prénom, n° de service, commission) du service  3 par ordre croissant de commission. */
select nom, prenom, noserv, comm from `employe` where `noserv` = 3 order by comm asc

/* •46 : Trier les employés (nom, prénom, n° de service, commission) du service 3 par ordre décroissant de commission, en considérant que celui dont la commission est nulle ne touche pas de commission */
select nom, prenom, noserv, comm from `employe` where `noserv` = 3 and not isnull(comm) order by comm desc



/* Exercices : Makea join! */
/* •47 : Sélectionner le nom, le prénom, l'emploi, le nom du service de l'employé  pour tous les employés. */
SELECT nom, prenom, emploi, service FROM `employe` as E INNER JOIN `service` as S ON E.noserv = S.noserv

/* •48 : Sélectionner le nom, l'emploi, le numéro de service, le nom du service  pour tous les employés. */
SELECT nom, emploi, E.noserv, service FROM `employe` as E INNER JOIN `service` as S ON E.noserv = S.noserv

/* •49 : Idem en utilisant des alias pour les noms detables. */
SELECT nom, emploi, E.noserv, service FROM `employe` as E INNER JOIN `service` as S ON E.noserv = S.noserv

/* •50 : Sélectionner le nom, l'emploi, suivis de toutes les colonnes de la table  SERV pour tous les employés. */
SELECT nom, emploi, E.noserv, service FROM `employe` as E right JOIN `service` as S ON E.noserv = S.noserv

/* •51 : Sélectionner les nom et date d'embauche des employés suivi des nom et date d'embauche de leur supérieur pour les employés plus ancien que leur  supérieur, dans l'ordre nom employés, noms supérieurs.  */
SELECT E1.nom, E1.embauche, E2.nom, E2.embauche FROM `employe` as E1 INNER JOIN `employe` as E2 ON E1.sup = E2.no_emp where E1.embauche < E2.embauche order by e1.nom asc, e2.nom asc

/* •52 : Sélectionner sans doublon les prénoms des directeurs et « les prénoms des techniciens du service 1 » avec un UNION. */
SELECT e1.prenom FROM `employe` as e1 where `emploi` = "directeur" union select e1.prenom from `employe` as e1 where `emploi`="technicien" and `noserv` = 1

/* •53 : Sélectionner les numéros de services n’ayant pas d’employés sans une jointure externe */
SELECT S.noserv FROM `service` as S where S.noserv NOT In (SELECT E.noserv FROM `employe`as E) 

/* •54 : Sélectionner les services ayant au moins un employé. */
SELECT S.noserv FROM `service` as S where S.noserv In (SELECT E.noserv FROM `employe`as E)



/* Exercices */
/* •55 : Sélectionner les employés qui travaillent à LILLE. */
SELECT e.prenom, e.noserv, service, ville FROM `employe` as e inner JOIN `service` as S ON e.noserv = S.noserv where `ville` ="lille"

/* •56 : Sélectionner les employés qui ont le même chef que DUBOIS, DUBOIS exclu. */
SELECT prenom, sup FROM `employe` where `sup`= "1300" and not `prenom` = "dubois"

/* •57 : Sélectionner les employés embauchés le même jour que DUMONT. */
select prenom, embauche from `employe` where `embauche`= "1987-10-25"

/* •58 : Sélectionner les nom et date d'embauche des employés plus anciens que MINET, dans l’ordre des embauches. */
select nom, embauche from `employe` where `embauche` < "1987-10-25" order by `embauche` asc

/* •59 : Sélectionner le nom, le prénom, la date d’embauche des employés plus anciens  que tous les employés du service N°6. (Attention MIN) */

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* •60 : Sélectionner le nom, le prénom, le revenu mensuel des employés qui gagnent  plus qu'au moins un employé du service N°3, trier le résultat dans l'ordre croissant des revenus mensuels. */

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* •61 : Sélectionner les noms, le numéro de service, l’emplois et le salaires des  personnes travaillant dans la même ville que HAVET. */
SELECT e.nom, e.noserv, emploi, sal, s.noserv, ville FROM `employe` as e inner JOIN `service` as s ON e.noserv = s.noserv where `ville` in 
(select `ville` from `employe` as e inner JOIN `service` as S ON e.noserv = S.noserv where `nom` ="havet")

/* •62 : Sélectionner les employés du service 1, ayant le même emploi qu'un employé du service N°3. */
SELECT e1.nom, e1.prenom, e1.noserv, e1.emploi FROM `employe` as e1
where e1.emploi in (SELECT e2.emploi from `employe` as e2
Where e2.noserv = 3)
AND e1.noserv = 1

/* •63 : Sélectionner les employés du service 1 dont l'emploi n'existe pas dans le service 3. */
SELECT e1.nom, e1.prenom, e1.noserv, e1.emploi FROM `employe` as e1
where e1.emploi not in (SELECT e2.emploi from `employe` as e2
Where e2.noserv = 3)
AND e1.noserv = 1

/* •64 : Sélectionner nom, prénom, emploi, salaire pour les employés ayant même emploi  et un salaire supérieur à celui de CARON. */
SELECT e1.nom, e1.prenom, e1.sal, e1.emploi FROM `employe` as e1
on e1.emploi in (SELECT e1.emploi from `employe` as e1 inner join `employe` as e2 on e1.emploi = e2.emploi where e2.nom = "caron" )
and e1.sal in (select e1.sal from `employe` as e1 inner join `employe` as e2 on e1.sal > e2.sal where e2.nom = "caron") ;

/* •65 : Sélectionner les employés du service N°1 ayant le même emploi qu'un employé du service des VENTES. */
SELECT e.prenom, e.noserv, e.emploi FROM `employe` as e
where e.emploi in (select e.emploi from `employe` as e
inner join `service` as s 
on e.noserv = s.noserv
where s.service = "ventes" )
and e.noserv = 1 

/* •66 : Sélectionner les employés de LILLE ayant le même emploi que RICHARD, trier le résultat dans l'ordre alphabétique des noms. */
SELECT e1.prenom, e1.noserv, service, ville FROM `employe` as e1 inner JOIN `service` as S 
ON e1.noserv = S.noserv where s.ville ="lille"
and e1.emploi in (select e1.emploi from `employe` as e1 inner join `employe`as e2 on e1.emploi = e2.emploi where e2.nom = "richard")
order by `e1`.`nom` asc;

/* •67 : Sélectionner les employés dont le salaire est plus élevé que le salaire moyen de leur service (moyenne des salaires = avg(sal)), résultats triés par numéros de service. */
SELECT e1.prenom, e1.noserv, e1.sal FROM `employe` as e1 
where (e1.sal>(select avg(e1.sal) from `employe` as e1 where e1.noserv = 1)
OR e1.sal>(select avg(e1.sal) from `employe` as e1 where e1.noserv = 2)
OR e1.sal>(select avg(e1.sal) from `employe` as e1 where e1.noserv = 3)
OR e1.sal>(select avg(e1.sal) from `employe` as e1 where e1.noserv = 4)
OR e1.sal>(select avg(e1.sal) from `employe` as e1 where e1.noserv = 5)
OR e1.sal>(select avg(e1.sal) from `employe` as e1 where e1.noserv = 6)
OR e1.sal>(select avg(e1.sal) from `employe` as e1 where e1.noserv = 7))
order by e1.noserv asc

/* •68 : Sélectionner les employés du service INFORMATIQUE embauchés la même année qu'un employé du service VENTES. année -> ORACLE : to_char(embauche,’YYYY’)MYSQL: DATE_FORMAT(embauche,’%Y’) */
select * 
from emp 
where date_format (embauche,`%Y`) in 
(select date_format(e.embauche, `%Y`) from `employe` as e 
                inner join serv as s 
                on e.noserv = s.noserv 
                where service like `%vente%`)

/* •69 : Sélectionner le nom, l’emploi, la ville pour les employés qui ne travaillent pas dans le même service que leur supérieur hiérarchique direct. */
select e.nom, e.emploi, e.noserv, s.ville from `employe` as e
inner join `service` as s
ON e.noserv= s.noserv
where e.no_emp in(SELECT e.no_emp from `employe` as e
               inner join `employe` as e2
               on e.sup = e2.no_emp
                where  e.noserv != e2.noserv)

/* •70 : Sélectionner le nom, le prénom, le service, le revenu des employés qui ont des subalternes, trier le résultat suivant le revenu décroissant. */
select e.nom, e.prenom, s.service, e.sal from `employe` as e
inner join `service` as s
ON e.noserv= s.noserv
where e.no_emp in(SELECT e.sup from `employe` as e
               inner join `employe` as e2
               on e.sup = e2.no_emp)
               order by e.sal desc

/* Exercices sur les fonctions */
/* •71 :Sélectionner le nom, l’emploi, le revenu mensuel (nommé Revenu) avec deux décimales pour tous les employés, dans l’ordre des revenus décroissants. */
select e.nom, e.emploi, e.sal, round((e.sal/12),2) "revenu" from `employe` as e 
order by `revenu` desc

/* •72 : Sélectionner le nom, le salaire, commission des employés dont la commission représente  plus que le double du salaire. */
select e.nom, e.emploi, e.comm, e.sal from `employe` as e
where e.comm >= 2*e.sal

/* •73 : Sélectionner nom, prénom, emploi, le pourcentage de commission (deux décimales) par  rapport au revenu mensuel ( renommé "% Commissions") , pour tous les vendeurs dans  l'ordre décroissant de ce pourcentage. */
select e.nom, e.emploi, e.comm, e.sal, round(e.comm/(e.sal+e.comm)*100) "comm"  from `employe` as e
where e.emploi = "vendeur"
ORDER BY `comm` ASC

/* •74 : Sélectionner le nom, l’emploi, le service et le revenu annuel ( à l’euro près) de tous les vendeurs. */
select e1.nom, e1.emploi, e1.noserv, e1.sal from `employe` as e1 inner join `service` as s 
and select round (e1.sal, 2)

/* •75 : Sélectionner nom, prénom, emploi, salaire, commissions, revenu mensuel pour les employés des services 3,5,6  */
select e.nom, e.emploi, e.comm, e.sal, e.noserv, e.comm, e.comm/(e.sal+e.comm)*100 "%comm"  from `employe` as e
where e.noserv = 3 or e.noserv = 5 or e.noserv = 6

/* •76 : Idem pour les employés des services 3,5,6 en remplaçant les noms des colonnes : SAL par SALAIRE, COMM par  COMMISSIONS, SAL+IFNULL(COMM,0) parGAIN_MENSUEL.*/
SELECT e.nom, e.prenom, e.emploi, e.sal "e.salaire", e.comm "e.coMM", (e.sal+(ifnull(e.comm,0))) "gain_mensuel"
FROM employe AS e
WHERE noserv IN (3,5,6)

/* •77 : Idem pour les employés  des services 3,5,6 en remplaçant GAIN_ MENSUEL par GAINMENSUEL */
SELECT e.nom, e.prenom, e.emploi, e.sal "e.salaire", e.comm "e.coMM", (e.sal+(ifnull(e.comm,0))) "gain mensuel"
FROM employe AS e
WHERE noserv IN (3,5,6)

/* •78 : Afficher le nom, l'emploi, les salaires journalier et horaire pour les employés des services 3,5,6 (22 jours/mois et 8 heures/jour), sans arrondi, arrondi au  centime près. */
select e.nom, e.emploi, (e.sal/22) "salj", round(((e.sal/12)/8),2)
from employe as e 
where noserv in (3,5,6)

/* •79 : Idem sans arrondir mais en tronquant. */
select e.nom, e.emploi, (e.sal/22) "salj", truncate(((e.sal/12)/8),0)
from employe as e 
where noserv in (3,5,6)

/* Exercices sur les fonctions */
/* •80 : Concaténer les colonnes Service et Ville en les reliant par " ----> ", les premières lettres des noms de villes doivent se trouver sur une même verticale. */
select concat(rpad(s.service, 20, "---"), ">" ,s.ville)"Service & ville" from `service` as s

/* •81 : Sélectionner nom, emploi pour les employés en ajoutant une colonne "CODE EMPLOI",  trier le résultat sur ce code. 0 signifie que le code emploi n’existe pas. */
select e.nom, e.emploi, 
case    when e.emploi = "président" then 1
        when e.emploi = "directeur" then 2
        when e.emploi = "comptable" then 3
        when e.emploi = "vendeur" then 4
        when e.emploi = "technicien" then 5
end "code emploi" from `employe` as e 
order by "code emploi" asc

/* •82 : Sélectionner les employés en remplaçant les noms par '*****' dans le service n°1, trier le  résultat suivant le N° de service. */
select replace(e.nom, e.nom, "*****"), e.emploi, e.noserv from `employe` as e 
order by e.noserv asc

/* •83 : Sélectionner les noms des services en affichant que les 5 premiers caractères. */
select lpad(e.nom, 5, e.nom), e.emploi, e.noserv from `employe` as e 
order by e.noserv asc

/* •84 : Sélectionner les employés embauchés en 1988. */
select e.prenom, e.embauche, date_format(e.embauche,'%Y') "emb" from `employe` as e where date_format(e.embauche,'%Y') = 1988

/* •85 : Sélectionner les noms des employés sur 3 colonnes la première en majuscules, la seconde avec l'initiale en majuscule et le reste en minuscules, la troisième en minuscules. */
select e.nom, upper(e.nom) "maj", concat(upper(lpad(e.nom,1,e.nom)),lower(right(e.nom,(length(e.nom) -1) ) ) ) "majmin", lower(e.nom) 'min' from `employe` as e

/* •86 : Sélectionner les positions des premiers M et E dans les noms des employés */
select e.nom, concat((locate("m",e.nom)), (locate("e",e.nom)) ) from employe as e 

/* •87 : Afficher le nombre de lettres qui sert à écrire le nom de chaque service. */
select length(s.service) from service as s

/* •88 : Tracer un Histogramme des salaires avec nom, emploi, salaire triés dans l'ordre décroissant (max de l’histogramme avec 30 caractères) */
select e.nom, e.emploi, e.sal, round(e.sal /2000) "histo", rpad("#", round(e.sal /2000), "#") from employe as e
order by e.sal desc

/* Exercices: gestion des dates */
/* •89 : Sélectionner nom, emploi, date d'embauche des employés du service 6. */
select e1.nom, e1.emploi, e1.embauche, e1.noserv from `employe` as e1
where e1.noserv = 6

/* •90 : Même chose en écrivant la colonne embauche sous la forme ‘dd-mm-yy’, renommée  embauche. */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%d-%m-%y') "%embauchedd" from `employe` as e1
where e1.noserv = 6

/* •91 : Même chose en écrivant la colonne embauche sous la forme ‘daydd monthyyyy' */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%a %d %M %Y') "%embauchedd" from `employe` as e1
where e1.noserv = 6

/* •92 : Même chose en écrivant la colonne embauche sous la forme ‘daydd month(abv)yy' */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%a %d %b %y') "%embauchedd" from `employe` as e1
where e1.noserv = 6

/* •93 : Même chose en écrivant la colonne embauche sous la forme ‘yymonth(abv)dd' */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%y %b %d') "%embauchedd" from `employe` as e1
where e1.noserv = 6

/* •94 : Même chose en écrivant la colonne embauche sous la forme ‘Day-dd-Month-yyyy' */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%a-%d-%b-%Y') "%embauchedd" from `employe` as e1
where e1.noserv = 6

/* •95 : Sélectionner les employés avec leur ancienneté en jours dans l'entreprise. */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%Y %m %d') "embauchedd", datediff(sysdate(),e1.embauche) "jour" from `employe` as e1

/* •96 : Sélectionner les employés avec leur ancienneté en mois dans l'entreprise. */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%Y %m %d') "embauchedd", timestampdiff(month,e1.embauche, sysdate()) "mois" from `employe` as e1

/* •97 : Sélectionner toutes les dates d’embauche majorées de 12 ans. */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%Y %m %d') "embauchedd", DATE_FORMAT(date_add(e1.embauche, interval 12 year), '%a-%d-%M-%y') "+12 ans" from `employe` as e1

/* •98 : Sélectionner les employés ayant plus de 12 ans d’ancienneté. Plus amusant ... */
select e1.nom, e1.emploi, e1.embauche, e1.noserv, date_format(e1.embauche,'%Y %m %d') "embauchedd", timestampdiff(month,e1.embauche, sysdate()) "mois" from `employe` as e1
where timestampdiff(month,e1.embauche, sysdate()) > 144

/* •99 : Depuis combien de jours êtes-vous nés? */
select datediff(sysdate(),'1992-07-11')

/* •100 : Depuis combien de mois êtes-vous nés? */
select timestampdiff(month, '1992-07-11' , sysdate())


/* Exercices */
/* •101 : Afficher la moyenne des revenus (avec commission) des vendeurs. */
select avg(e.sal+ifnull(e.comm,0)) "moyenne" from `employe`as e
where e.emploi= "vendeur"

/* •102 : Paramétrer la requête qui précède sur l’emploi. */
select e.emploi ,avg(e.sal+ifnull(e.comm,0)) "moyenne" from `employe`as e
group by e.emploi

/* •103 : Afficher la somme des salaires et la somme des commissions des vendeurs. */
select sum(e.sal), sum(e.comm) from `employe` as e

/* •104 : Afficher le plus haut salaire, le plus bas salaire, la différence entre les deux. */
select min(e.sal), max(e.sal), (max(e.sal)-min(e.sal)) from `employe` as e

/* •105 : Compter les employés embauchés chaque année.*/
select count(e.nom), date_format(e.embauche,'%Y') from `employe`as e
group by date_format(e.embauche,'%Y') 

/* •106 : Afficher le nombre de lettres du service dont le nom est le plus court. */
select min(length(s.service)) from `service` as s 

/* •107 : Sélectionner nom, emploi, revenu mensuel de l'employé qui gagne le plus. */
select e.nom, e.emploi, max(e.sal) from `employe` as e

/* •108 : Déterminer le nombre d'employés du service 3 qui reçoivent éventuellement une commission. */
select count(e.nom), e.comm, e.noserv from `employe`as e 
where not isnull(e.comm) and e.noserv= 3


/* •109 : Déterminer le nombre d'emploi différents du service N°1. */
select emploi, count(emploi), noserv from `employe`
WHERE noserv = 1
group by emploi 


/* •110 : Déterminer le nombre d'employés du service N°3 */
select count(emploi), nom, noserv from `employe`
where noserv = 3


/* Exercices  */
/* •111 : Pour chaque service, afficher son N° et le salaire moyen des employés du service arrondi l’euro près. */
select noserv, count(noserv), round(sal) from `employe`  
group by noserv

/* •112 : Pour chaque service donner le salaire annuel moyen de tous les employés qui ne sont ni président, ni directeur. */
select noserv, emploi, sal from `employe`
where not emploi = "president" and not emploi = "directeur"

/* •113 : Grouper les employés par service et par emploi à l'intérieur de chaque service, pour chaque groupe afficher l'effectif et le salaire moyen. */
select noserv, emploi, count(nom)"effectif", round(avg(sal)) from `employe`
group by noserv, emploi

/* •114 : Idem en remplaçant le numéro de service par le nom du service. */
select e.noserv, e.emploi, count(e.nom)"effectif", round(avg(e.sal)), s.service from `employe` as e inner join `service` as s
group by s.service, e.emploi

/* •115 : Afficher l'emploi, l'effectif, le salaire moyen pour tout type d'emploi ayant plus de deux représentants. */
select round(avg(e.sal)), count(e.emploi), e.emploi from `employe` as e
group by e.emploi
having count(e.emploi) > 2

/* •116 : Sélectionner les services ayant au mois deux vendeurs. */
select e.noserv, s.service, count(e.emploi) from `employe` as e inner join `service` as s
where e.emploi = "vendeur"
group by s.service
having count(e.emploi) >= 2

/* •117 : Sélectionner les services ayant une commission moyenne supérieure au quart du salaire moyen. */
select s.service, e.noserv, round(avg(e.comm),2)"moyenne comm", round((e.sal/4),2)"quart" from `employe` as e inner join `service` as s
group by s.service
having moyenne comm > quart

///////////////////////////////////////////////////////////
/* •118 : Sélectionner les emplois ayant un salaire moyen supérieur au salaire moyen des directeurs. */
select e1.emploi, round(avg(e1.sal)), round(avg(e2.sal)) from `employe` as e1 inner join `employe` as e2
where e2.emploi = "directeur"
group by e1.sal, e2.sal

////////////////////////////////////////////////////////////////
/* •119 : Afficher, sur la même ligne, pour chaque service, le nombre d'employés ne touchant pas de commission et le nombre d'employés touchant une commission. */
select s.service, count(e.emploi), e.comm from `employe` as e inner join `service` as s 
group by ifnull(e.comm,0)

///////////////////////////////////////////////////////////
/* •120 : Afficher l'effectif, la moyenne et le total pour les salaires et les commissions par emploi */
select emploi, count(nom)"effectif", round(avg(sal)) "moyenne sal", sum(sal+ifnull(comm,0))"somme sal" from `employe` 
group by emploi
order by emploi asc

/* Créer à nouveau les tables (EMP2 et SERV2) */
create table employe3 LIKE employe;
insert into employe3 select * from employe;

/* 121 : Augmenter de 10% ceux qui ont un salaire inférieur au salaire moyen. Validez */
select e.nom, e.prenom, e.sal, (e.sal*1.10)"Sal +", round(avg(e.sal))"moyenne" from `employe3` as e
group by e.sal
having e.sal < round(avg(e.sal))

update employe3 as e
set e.sal = e.sal*1.10
group by e.sal
having e.sal < round(avg(e.sal))
/////////////////////////////////////////////////////////////
/* 122 : Insérez vous comme nouvel employé embauché aujourd’hui au salaire que vous désirez. Validez */
Insert into employe3 (no_emp, nom, prenom, emploi, embauche, sal, comm, sup, noserv)
values
(2000, 'Cno', 'Cindy', 'reine', '2020-10-19', 7777777.7, 777777.7, 2001, 1)

/* 123 : Effacer les employés ayant le métier de SECRETAIRE. Validez */
DELETE FROM `employe3` WHERE `emploi` = "secretaire"

/* 124 : Insérer le salarié dont le nom est MOYEN, prénom Toto, no 1010, embauché le 12/12/99, supérieur 1000, pas de comm, service no 1, salaire vaut le salaire moyen des employés. Validez */
Insert into employe3 values 
(1010, 'moyen', 'toto', 'supérieur', '1999-12-12', (select avg(sal)"msal" from employe), null , 1000, 1) 
 
////////////////
/* 125 : Supprimer tous les employés ayant un A dans leur nom. Faire un SELECT sur votre table pour vérifier cela. Annuler les modifications et vérifier que cette action s’est bien déroulée */
start transaction;
set autocommit=0;
delete from `employe2`
WHERE  `nom` like "%a%";
Rollback;

/* Exercices : */
/* 126 : Créer une table PROJET avec les colonnes suivantes: noproj: type numérique 3 chiffres, doit avoir une valeur.  nomproj:type caractère, longueur = 10 budget: type numérique, 6 chiffres significatifs et 2 décimales. */
        /* Vérifier l'existence de la table PROJET. */
        /* Faire afficher la description de la table PROJET. */
        /* C’était une erreur !!! Renommez la table PROJET en PROJ */
create table afpa_test.projet
(
        noproj int(3),
        nomproj varchar (10),
        budget int(6)
)
SHOW TABLES LIKE '%projet%'
alter table projet rename to proj


/* 127 : Insérer trois lignes de données dans la table PROJ:
        numéros des projets = 101, 102, 103 noms des projets = alpha, beta, gammabudgets = 250000, 175000, 950000 */
        /* Afficher le contenu de la table PROJ. */
        /* Valider les insertions faites dans la table PROJ */
Insert into proj (noproj, nomproj, budget)
values
(101, 'alpha', 250000),
(102, 'beta', 175000),
(103, 'gamma', 950000)

select * from `proj`

start transaction;
set autocommit=0;
Insert into proj (noproj, nomproj, budget)
values
(101, 'alpha', 250000),
(102, 'beta', 175000),
(103, 'gamma', 950000);
commit 

/* Exercices :  */
/* 128 : Modifier la table PROJ en donnant un budget de 1.500.000 Euros au projet 103. */
        /* Modifier la colonne budget afin d'accepter des projets jusque 10.000.000.000 d’Euros */
        /* Retenter la modification demandée à la question précédente */
update proj SET
budget = "1500000"
where noproj = 103

ALTER TABLE proj
MODIFY COLUMN budget int(12)


/* 129 : Ajouter une colonne NOPROJ (type numérique) à la table EMP. Afficher le contenu de la table EMP */
ALTER TABLE employe
ADD noproj int(5)

/* 130 : Affecter les employés dont le numéro est supérieur à 1350 au projet 102, sauf ceux qui sont déjà affectés à un projet. Valider */
UPDATE employe
SET noproj = 102
WHERE no_emp > 1350

/* 131 : Affecter les employés n'ayant pas de projet au projet 103 */
UPDATE employe
SET noproj = 103
WHERE no_emp < 1350

/* 132 : Sélectionner les noms d'employés avec le nom de leur projet et le nom de leur service */
select e.nom, e.noproj, e.noserv, p.nomproj, s.service 
from `employe` as e 
inner join proj as p on p.noproj = e.noproj
inner join service as s on s.noserv = e.noserv

group by e.nom, p.nomproj, s.service
order by e.noproj