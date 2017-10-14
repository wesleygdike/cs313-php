/**
 * Author:  Wesley Dike
 * Created: Oct 5, 2017
 */

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

CREATE TABLE asteroid (
asteroid_id int PRIMARY KEY,
point_value int,
flyingObject    int REFERENCES flying_Object(obj_id)
);

CREATE TABLE user_input (
input_id int PRIMARY KEY,
booster int,
turn    int,
fire    int
);

CREATE TABLE users (
user_id     int PRIMARY KEY,
user_name   varchar(28) NOT NULL,
score       int NOT NULL,
flyingObject    int REFERENCES flying_Object(obj_id),
bullets     int REFERENCES bullets(bullet_list_id)
user_input_id  int REFERENCES user_input(input_id),
user_state  int
);

CREATE TABLE game (
game_id int PRIMARY KEY,
ship_count  int,
asteroid_count  int,
status  int,
user_count  int
);
