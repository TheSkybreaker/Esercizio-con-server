Esercitazione in cui viene usato un semplice server MariaDB a simulare
la creazione di utenti di un blog e la creazione ed eliminazione dei
post.

Per questo esercizio sono necessari step preparativi importanti:

il setup di XAMPP e MariaDB
La creazione di una tabella Users così strutturata

*****************************************
* id * nome * cognome * mail * role_id  *
*****************************************

Una tabella roles non utilizzata, ma presente a scopo didattico

*************
* id * name *
*************

E una tabella post, collegata con una foreign key (FK) a Users per il
join usato

***********************************************************
* post_id * titolo * Contenuto * id_creatore (FK a Users) *
***********************************************************

Una volta create le tabelle e collegate a dovere, utilizzando il sito 
e le funzioni php presenti per creare nuovi utenti e pubblicare

Al momento l'unico controllo presente è che i form di compilazione 
non siano vuoti e la mail non venga ripetuta.