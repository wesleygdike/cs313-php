CREATE TABLE app_user (
	user_id		INT PRIMARY KEY,
	user_name	CHAR(32) UNIQUE NOT NULL
);

CREATE TABLE speaker (
	speaker_id	INT PRIMARY KEY,
	first_name	CHAR(16) NOT NULL,
	last_name	CHAR(16) NOT NULL
);

CREATE UNIQUE INDEX speaker_unique_constr_01 ON speaker (
	first_name,
	last_name
);

CREATE TABLE conference (
	conference_id	INT PRIMARY KEY,
	month			CHAR(16) NOT NULL,
	year			INT NOT NULL
);

CREATE UNIQUE INDEX conference_unique_cosntr_01 ON conference (
	month,
	year
);

CREATE TABLE talk (
	talk_id			INT PRIMARY KEY,
	title			CHAR(64) NOT NULL,
	speaker_id		INT REFERENCES speaker(speaker_id) NOT NULL,
	conference_id	INT REFERENCES conference(conference_id) NOT NULL
);

CREATE TABLE note (
	note_id			INT PRIMARY KEY,
	content			TEXT NOT NULL,
	talk_id			INT REFERENCES talk(talk_id) NOT NULL,
	user_id			INT REFERENCES app_user(user_id) NOT NULL
);