create table users (
    id bigint unsigned auto_increment primary key,
    name varchar(255) not null,
    location varchar(255),
    email varchar(255) not null unique,
    password varchar(255) not null,
    role enum('admin', 'user') default 'user',
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
);

create table posts (
    id bigint unsigned auto_increment primary key,
    user_id bigint unsigned not null,
    title varchar(255) not null,
    content text not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp,
    foreign key (user_id) references users(id) on delete cascade
);

create table comments (
    id serial unsigned auto_increment primary key,
    post_id int unsigned not null references posts(id) on delete cascade,
    user_id bigint unsigned not null references users(id) on delete cascade,
    content text not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp,
);

create table likes (
    id bigint unsigned auto_increment primary key,
    post_id bigint unsigned not null references posts(id) on delete cascade,
    user_id bigint unsigned not null references users(id) on delete cascade,
    created_at timestamp default current_timestamp,
    unique key unique_like (post_id, user_id)
);
