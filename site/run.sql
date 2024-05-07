USE `task_1`;

create table `users`
(
    id   INT not null auto_increment,
    name text,
    PRIMARY KEY (id)
);

insert into `users` (name)
VALUES ('Mikita'),
       ('Dasha'),
       ('Kolya');