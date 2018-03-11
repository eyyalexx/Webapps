CREATE TABLE Artists (
    Name varchar(255),
    Description varchar(255),
    Birth varchar(255),
    Death varchar(255),
    Living varchar(255),
    Genres varchar(255),
    Famous varchar(255),
    ImageID int,
    PRIMARY KEY (Name),
    FOREIGN KEY (ImageID) REFERENCES Images(ImageID) 
);

CREATE TABLE ArtWork (
    Name varchar(255),
    Description varchar(255),
    Type varchar(255),
    Dimensions varchar(255),
    Location varchar(255),
    Artist varchar(255),
    Price varchar(255),
    Genre varchar(255),
    ImageID int,
    PRIMARY KEY (Name),
    FOREIGN KEY (ImageID) REFERENCES Images(ImageID) 
);


CREATE TABLE Images (
    ImageID int NOT NULL AUTO_INCREMENT,
    Link varchar(255),
    PRIMARY KEY (ImageID)
);
-------------------------Artist Images---------------------
INSERT INTO Images (Link)
VALUES ("images/artists/1.jpg");

INSERT INTO Images (Link)
VALUES ("images/artists/2.jpg");

INSERT INTO Images (Link)
VALUES ("images/artists/3.jpg");

INSERT INTO Images (Link)
VALUES ("images/artists/4.jpg");

INSERT INTO Images (Link)
VALUES ("images/artists/5.jpg");

------------------------Artwork Images-------------------

INSERT INTO Images (Link)
VALUES ("images/artwork/1.jpg");

INSERT INTO Images (Link)
VALUES ("images/artwork/2.jpg");

INSERT INTO Images (Link)
VALUES ("images/artwork/3.jpg");

INSERT INTO Images (Link)
VALUES ("images/artwork/4.jpg");

INSERT INTO Images (Link)
VALUES ("images/artwork/5.jpg");


----------------------- Artists ------------------------------
INSERT INTO Artists (Name, Description, Birth, Death, Living, Genres, Famous, ImageID)
VALUES ("Vincent Van Gogh",
"Vincent Willem van Gogh was a Dutch Post-Impressionist painter who is among the most famous and influential figures in the history of Western art.",
"30 March 1853","29 July 1890","France","Post-Impressionism","Sunflowers (F.458), repetition of the 4th version (yellow background)","1");

INSERT INTO Artists (Name, Description, Birth, Death, Living, Genres, Famous, ImageID)
VALUES ("Pablo Picasso","Pablo Picasso was a Spanish painter, sculptor, printmaker, ceramicist, stage designer, poet and playwright who spent most of his adult life in France",
"25 October 1881","8 April 1973","France","Cubism, Surrealism","La Vie (1903)", "2");

INSERT INTO Artists (Name, Description, Birth, Death, Living, Genres, Famous, ImageID)
VALUES ("Claude Monet","Oscar-Claude Monet was a founder of French Impressionist painting, and the most consistent and prolific practitioner of the movement's philosophy of expressing one's perceptions before nature, especially as applied to plein-air landscape painting.",
"14 November 1840","5 December 1926","France","Impressionism","Rouen Cathedral series", "3");

INSERT INTO Artists (Name, Description, Birth, Death, Living, Genres, Famous, ImageID)
VALUES ("Leonardo da Vinci","Leonardo di ser Piero da Vinci more commonly Leonardo da Vinci or simply Leonardo, was an Italian Renaissance polymath",
"15 April 1452","2 May 1519","Italy","High Renaissance","Mona Lisa", "4");

INSERT INTO Artists (Name, Description, Birth, Death, Living, Genres, Famous, ImageID)
VALUES ("Michelangelo","Michelangelo di Lodovico Buonarroti Simoni or more commonly known by his first name Michelangelo was an Italian sculptor, painter, architect and poet of the High Renaissance.",
"6 March 1475","18 February 1564","Italy","High Renaissance","The Last Judgment", "5");

-------------------------------------Artwork-------------------------------
INSERT INTO Artwork(Name, Description, Type, Dimension, Location, Artist, Price, Genre, ImageID)
VALUES ("","","","","","");

"date": "June 1889",
		"type": "Ultramarine, cobalt blue, indian yellow and zinc yellow",
		"dimensions": "74 cm x 92 cm",
		"location": "Museum of Modern Art",
		"artist": "Vincent van Gogh",
		"price": "$82 million",
		"genre": "Landscape painting",
		"name" : "The Starry Night",
		"description" : "The Starry Night is an oil on canvas by the Dutch post-impressionist painter Vincent van Gogh."
