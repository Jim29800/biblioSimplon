create database db_biblio;
use db_biblio;

create table adm_administrateur (
	adm_oid int not null primary key auto_increment,
	adm_login varchar(50) not null,
	adm_mdp varchar(100) not null,
	adm_email varchar(50)

);

create table gnr_genre(
	gnr_oid int not null primary key auto_increment,
	gnr_libele varchar(50)
);

create table art_article(
	art_oid int not null primary key auto_increment,
	art_titre varchar(50),
	art_content text,
	art_auteur varchar(50),
	art_date varchar(20),
	art_gnr_oid int not null,
	constraint foreign key (art_gnr_oid)
	references gnr_genre(gnr_oid)
);

create table com_commentaire(
	com_oid int not null primary key auto_increment,
	com_pseudo varchar(50),
	com_content varchar(255),
	com_date varchar(20),
	com_art_oid int not null,
	constraint foreign key (com_art_oid)
	references art_article(art_oid)
);