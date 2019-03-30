
    create table article (
        id bigint not null,
        aid integer not null,
        categorie varchar(255) not null,
        marque varchar(255) not null,
        nom integer not null,
        prix integer not null,
        commande_id bigint not null,
        primary key (id)
    );

    create table commande (
        id bigint not null,
        cid integer not null,
        date varchar(255) not null,
        montant integer not null,
        primary key (id)
    );

    create table compte (
        id bigint not null,
        cid integer not null,
        date varchar(255) not null,
        primary key (id)
    );

    create table utilisateur (
        id bigint not null,
        email varchar(255) not null,
        lieu varchar(255) not null,
        nni varchar(255) not null,
        nom varchar(255) not null,
        tel integer not null,
        uid integer not null,
        compte_id bigint,
        primary key (id)
    );

    create table utilisateur_commande (
        utilisateur_id bigint not null,
        commande_id bigint not null,
        primary key (utilisateur_id, commande_id)
    );

    alter table article 
        add constraint FKD458CCF68504A77A 
        foreign key (commande_id) 
        references commande 
        on delete cascade;

    alter table utilisateur 
        add constraint FKDD1633835C1099BA 
        foreign key (compte_id) 
        references compte;

    alter table utilisateur_commande 
        add constraint FK434BB6F7AC1EDA 
        foreign key (utilisateur_id) 
        references utilisateur;

    alter table utilisateur_commande 
        add constraint FK434BB68504A77A 
        foreign key (commande_id) 
        references commande;
