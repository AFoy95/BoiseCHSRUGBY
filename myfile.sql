CREATE TABLE admin(
	email VARCHAR(256) NOT NULL PRIMARY KEY,
	password VARCHAR (128)NOT NULL
);

CREATE TABLE Boys_Scores(
	Our_Score Integer(150) NOT NULL
	Their_Score Integer(150) NOT NULL
	Penalties Integer(25) NOT NULL
	Convmade Integer(25) NOT NULL
	Convatt Integer(25) NOT NULL
);

CREATE TABLE Girls_Scores(
        Our_Score Integer(150) NOT NULL
        Their_Score Integer(150) NOT NULL
        Penalties Integer(25) NOT NULL
        Convmade Integer(25) NOT NULL
        Convatt Integer(25) NOT NULL
);

CREATE TABLE Schedule(
	Dates VARCHAR(256)
	Events VARCHAR(256)
);


