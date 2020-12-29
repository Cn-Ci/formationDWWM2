create table afpa_test.employe 
 (
    no_emp int(4) primary key, 
    nom varchar(30) not null , 
    prenom varchar(30) not null, 
    emploi varchar(30),  
    embauche date, 
    sal float(9,2), 
    comm float(9,2),
    noserv int (2),
    sup int(4)
    );

Insert into employe (no_emp, nom, prenom, emploi, embauche, sal, comm, sup, noserv)
values
(1000, 'leroy', 'paul', 'president', '1987-10-25', 55005.5, null, null, 1),
(1100, 'delpierre', 'dorothee', 'secretaire', '1987-10-25', 12351.2, null, 1000, 1),
(1200, 'lemaire', 'guy', 'directeur', '1987-03-11', 36303.6, null, 1000, 2),
(1300, 'lenoir', 'gerard', 'directeur', '1987-04-02', 31353.1, 13071, 1000, 3),
(1500, 'dupont', 'jean', 'directeur', '1987-10-23', 28434.8, null, 1000, 5),
(1600, 'lavare', 'paul', 'directeur', '1991-12-13', 31238.1, null, 1000, 6),
(1101, 'dumont', 'louis', 'vendeur', '1987-10-25', 9047.9, 0, 1300, 1),
(1102, 'minet', 'marc', 'vendeur', '1987-10-25', 8085.81, 17230, 1300, 1),
(1104, 'nys', 'etienne', 'technicien', '1987-10-25', 12342.2, null, 1200, 1),
(1105, 'denimal', 'jerome', 'comptable', '1987-10-25', 15746.6, null, 1600, 1),
(1201, 'martin', 'jean', 'technicien', '1987-06-25', 11235.1, null, 1200, 2),
(1202, 'dupont', 'jacques', 'technicien', '1988-10-30', 10313, null, 1200, 2),
(1301, 'gerard', 'robert', 'vendeur', '1999-04-16', 7694.77, 12430, 1300, 3),
(1303, 'masure', 'emile', 'technicien', '1988-06-17', 10451.1, null, 1200, 3),
(1501, 'dupire', 'pierre', 'analyste', '1984-10-24', 23102.3, null, 1500, 5),
(1502, 'durand', 'bernard', 'programmeur', '1987-07-30', 13201.3, null, 1500, 5),
(1503, 'delnatte', 'luc', 'pupiteur', '1999-01-15', 8801.01, null, 1500, 5),
(1601, 'caron', 'alain', 'comptable', '1985-09-16', 33003.3, null, 1600, 6),
(1602, 'dubois', 'jules', 'vendeur', '1990-12-20', 9520.95, 35535, 1300, 6),
(1603, 'morel', 'robert', 'comptable', '1985-07-18', 33003.3, null, 1600, 6),
(1604, 'havet', 'alain', 'vendeur', '1991-01-01', 9388.94, 33415, 1300,6),
(1605, 'richard', 'jules', 'comptable', '1985-10-22', 33503.4, null, 1600, 5),
(1615, 'duprez', 'jean', 'balayeur', '1998-10-22', 6000.6, null, 1000,5);

MariaDB [afpa_test]> select * from afpa_test.employe
    -> ;
+--------+-----------+----------+-------------+------------+----------+----------+--------+------+
| no_emp | nom       | prenom   | emploi      | embauche   | sal      | comm     | noserv | sup  |
+--------+-----------+----------+-------------+------------+----------+----------+--------+------+
|   1000 | leroy     | paul     | president   | 1987-10-25 | 55005.50 |     NULL |      1 | NULL |
|   1100 | delpierre | dorothee | secretaire  | 1987-10-25 | 12351.20 |     NULL |      1 | 1000 |
|   1101 | dumont    | louis    | vendeur     | 1987-10-25 |  9047.90 |     0.00 |      1 | 1300 |
|   1102 | minet     | marc     | vendeur     | 1987-10-25 |  8085.81 | 17230.00 |      1 | 1300 |
|   1104 | nys       | etienne  | technicien  | 1987-10-25 | 12342.20 |     NULL |      1 | 1200 |
|   1105 | denimal   | jerome   | comptable   | 1987-10-25 | 15746.60 |     NULL |      1 | 1600 |
|   1200 | lemaire   | guy      | directeur   | 1987-03-11 | 36303.60 |     NULL |      2 | 1000 |
|   1201 | martin    | jean     | technicien  | 1987-06-25 | 11235.10 |     NULL |      2 | 1200 |
|   1202 | dupont    | jacques  | technicien  | 1988-10-30 | 10313.00 |     NULL |      2 | 1200 |
|   1300 | lenoir    | gerard   | directeur   | 1987-04-02 | 31353.10 | 13071.00 |      3 | 1000 |
|   1301 | gerard    | robert   | vendeur     | 1999-04-16 |  7694.77 | 12430.00 |      3 | 1300 |
|   1303 | masure    | emile    | technicien  | 1988-06-17 | 10451.10 |     NULL |      3 | 1200 |
|   1500 | dupont    | jean     | directeur   | 1987-10-23 | 28434.80 |     NULL |      5 | 1000 |
|   1501 | dupire    | pierre   | analyste    | 1984-10-24 | 23102.30 |     NULL |      5 | 1500 |
|   1502 | durand    | bernard  | programmeur | 1987-07-30 | 13201.30 |     NULL |      5 | 1500 |
|   1503 | delnatte  | luc      | pupiteur    | 1999-01-15 |  8801.01 |     NULL |      5 | 1500 |
|   1600 | lavare    | paul     | directeur   | 1991-12-13 | 31238.10 |     NULL |      6 | 1000 |
|   1601 | caron     | alain    | comptable   | 1985-09-16 | 33003.30 |     NULL |      6 | 1600 |
|   1602 | dubois    | jules    | vendeur     | 1990-12-20 |  9520.95 | 35535.00 |      6 | 1300 |
|   1603 | morel     | robert   | comptable   | 1985-07-18 | 33003.30 |     NULL |      6 | 1600 |
|   1604 | havet     | alain    | vendeur     | 1991-01-01 |  9388.94 | 33415.00 |      6 | 1300 |
|   1605 | richard   | jules    | comptable   | 1985-10-22 | 33503.40 |     NULL |      5 | 1600 |
|   1615 | duprez    | jean     | balayeur    | 1998-10-22 |  6000.60 |     NULL |      5 | 1000 |
+--------+-----------+----------+-------------+------------+----------+----------+--------+------+
23 rows in set (0.000 sec)


____________________________________________________________________________
____________________________________________________________________________

 create table afpa_test.service 
 (
    noserv int (2) primary key,
    service varchar(20),
    ville varchar(20)
);

Insert into service (noserv, service, ville)
values
(1, 'direction', 'paris'),
(2, 'logistique', 'seclin'),
(3, 'ventes', 'roubaix'),
(4, 'formation', "villeneuve d'ascq"),
(5, 'informatique', 'lille'),
(6, 'comptabilite', 'lille'),
(7, 'technique', 'roubaix');


MariaDB [afpa_test]> select * from afpa_test.service;
+--------+--------------+-------------------+
| noserv | service      | ville             |
+--------+--------------+-------------------+
|      1 | direction    | paris             |
|      2 | logistique   | seclin            |
|      3 | ventes       | roubaix           |
|      4 | formation    | villeneuve dascq |
|      5 | informatique | lille             |
|      6 | comptabilite | lille             |
|      7 | technique    | roubaix           |
+--------+--------------+-------------------+
7 rows in set (0.000 sec)

____________________________________________________________________________
____________________________________________________________________________
ALTER TABLE employe
ADD FOREIGN KEY (sup) REFERENCES employe(no_emp);

