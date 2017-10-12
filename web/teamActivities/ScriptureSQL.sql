
CREATE TABLE scriptures(
	id			SERIAL PRIMARY KEY,
	book		VARCHAR(32) NOT NULL,
	chapter		INT NOT NULL,
	verse		INT NOT NULL,
	content		TEXT NOT NULL
);

CREATE UNIQUE INDEX scriptures_unique_constr_01 ON scriptures(
	book,
	chapter,
	verse
);

INSERT INTO scriptures (
  book,
  chapter,
  verse,
  content) VALUES
  ( 'John'
  , 1
  , 5
  , 'And the light shineth in darkness; and the darkness comprehended it not.'
  ),
  ( 'Doctrine and Covenants'
  , 88
  , 49
  , 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'
  ),
  ( 'Doctrine and Covenants'
  , 93
  , 28
  , 'Ye were also in the beginning with the Father; that which is Spirit, even the Spirit of truth;'
  ),
  ( 'Mosiah'
  , 16
  , 9
  , 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'
  );