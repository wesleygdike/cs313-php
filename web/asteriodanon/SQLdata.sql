/**
 * Author:  Wesley Dike
 * Created: Oct 5, 2017
 */

CREATE TABLE user (
user_id     int PRIMARY KEY,
user_name   varchar(28) NOT NULL,
ship        int REFERENCES ships(ship_id),
user_input  int REFERENCES inputs(input_id),
user_state  int
);

CREATE TABLE flying_Object (
obj_id     SERIAL PRIMARY KEY NOT NULL,
xloc        int, --set min max for all locations
yloc        int, --set min max for all locations
xvel        int, --set min max for all velocities
yvel        int, --set min max for all velocities
rotation    int, --set min max for all rotations
is_alive    boolean,
obj_type    int  --ASTEROID=0, SHIP=1
);

CREATE TABLE ship (
ship_id     int PRIMARY KEY,
my_user     int REFERENCES users(user_id),
score       int NOT NULL,
flyingObject    int REFERENCES flyingObject(obj_id),
bullets     int REFERENCES bullets(bullet_list_id)
);

CREATE TABLE asteroid (
asteroid_id int PRIMARY KEY,
point_value int,
flyingObject    int REFERENCES flyingObject(obj_id)
);

CREATE TABLE asteroid (
bullet_id int PRIMARY KEY,
life_counter    int,
flyingObject    int REFERENCES flyingObject(obj_id)
);

CREATE TABLE user_input (
input_id
booster int,
turn    int,
fire    int
);

CREATE TABLE game (
game_id int PRIMARY KEY,
ship_count  int,
asteroid_count  int,
status  int,
user_count  int
);
