CREATE TABLE Images (
    ImageID int NOT NULL AUTO_INCREMENT,
    Link varchar(255),
    PRIMARY KEY (ImageID)
);

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
    DateCreated varchar(255),
    ImageID int,
    PRIMARY KEY (Name),
    FOREIGN KEY (ImageID) REFERENCES Images(ImageID) 
);

CREATE TABLE Museums (
    Name varchar(255),
    Established varchar(255),
    Location varchar(255),
    People varchar(255),
    History varchar(255),
    ArtWorks varchar(255),
    Description varchar(255),
    ImageID int,
    PRIMARY KEY (Name),
    FOREIGN KEY (ImageID) REFERENCES Images(ImageID) 
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

------------------------Museums Images--------------------

INSERT INTO Images (Link)
VALUES ("images/museums/1.jpg");

INSERT INTO Images (Link)
VALUES ("images/museums/2.jpg");

INSERT INTO Images (Link)
VALUES ("images/museums/3.jpg");

INSERT INTO Images (Link)
VALUES ("images/museums/4.jpg");

INSERT INTO Images (Link)
VALUES ("images/museums/5.jpg");

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
INSERT INTO ArtWork(Name, Description, Type, Dimensions, Location, Artist, Price, Genre, DateCreated, ImageID)
VALUES ("The Starry Night","The Starry Night is an oil on canvas by the Dutch post-impressionist painter Vincent van Gogh.","Ultramarine, cobalt blue, indian yellow and zinc yellow"
    ,"74 cm x 92 cm","Museum of Modern Art","Vincent van Gogh", "200", "Landscape painting", "June 1889","6");

INSERT INTO ArtWork(Name, Description, Type, Dimensions, Location, Artist, Price, Genre, DateCreated, ImageID)
VALUES ("Mona Lisa","The Mona Lisa is a half-length portrait painting by the Italian Renaissance artist Leonardo da Vinci."
    ,"N/A","77 cm x 53 cm","The Louvre","Leonardo da Vinci","150","Portrait", "1503","7");

INSERT INTO ArtWork(Name, Description, Type, Dimensions, Location, Artist, Price, Genre, DateCreated, ImageID)
VALUES ("Guernica","Guernica is a mural-sized oil painting on canvas by Spanish artist Pablo Picasso completed in June 1937, at his home on Rue des Grands Augustins, in Paris.",
    "N/A","3.49 m x 7.77 m","Museo Nacional Centro de Arte Reina Sofía","Pablo Picasso","90","History painting","June 1937","8");

INSERT INTO ArtWork(Name, Description, Type, Dimensions, Location, Artist, Price, Genre, DateCreated, ImageID)
VALUES ("The Last Supper","The Last Supper is a late 15th-century mural painting by Leonardo da Vinci housed by the refectory of the Convent of Santa Maria delle Grazie in Milan.",
    "N/A","4.6 m x 8.8 m","Santa Maria delle Grazie","Leonardo da Vinci","120","Mural","1495–1498","9");

INSERT INTO ArtWork(Name, Description, Type, Dimensions, Location, Artist, Price, Genre, DateCreated, ImageID)
VALUES ("Sistine Chapel Ceiling","The Sistine Chapel ceiling, painted by Michelangelo between 1508 and 1512, is a cornerstone work of High Renaissance art.",
    "N/A","40 m x 14 m","Sistine Chapel","Michelangelo","21","Renaissance","1512","10");

---------------------------------Museums------------------------------------
INSERT INTO Museums(Name, Established, Location, People, History, ArtWorks, Description, ImageID)
VALUES ("The Acropolis Museum","2009","Dionysiou Areopagitou 15, Athina 117 42, Greece","Architect: Bernard Tschumi","The monuments of the Acropolis have withstood the ravages of past centuries, both of ancient times and those of the Middle Ages. Until the 17th century, foreign travellers visiting the monuments depicted the classical buildings as being intact.",
    "Artefacts from the Athenian Acropolis, the most significant sanctuary of the ancient city","The Acropolis Museum is an archaeological museum focused on the findings of the archaeological site of the Acropolis of Athens.","11");

INSERT INTO Museums(Name, Established, Location, People, History, ArtWorks, Description, ImageID)
VALUES ("Le Louvre Museum","August 10, 1793","Rue de Rivoli, 75001 Paris, France","Curator: Marie-Laure de Rochebrune","The history of the Louvre begins around 1190 with Philippe Auguste’s decision to erect a fortified enclosure to protect Paris. This was an important gesture in favor of urbanism and a display of the king’s authority just as he was preparing to leave the country to go to war in the Crusades",
    "Mona Lisa, St. John the Baptist, Virgin of the Rocks","The Louvre Palace is a former royal palace located on the Right Bank of the Seine in Paris, between the Tuileries Gardens and the church of Saint-Germain l'Auxerrois.","12");

INSERT INTO Museums(Name, Established, Location, People, History, ArtWorks, Description, ImageID)
VALUES ("State Hermitage Museum","1764","Palace Square, 2, Sankt-Peterburg, Russia, 190000","Director: Mikhail Piotrovsky, Founder: Catherine the Great",
    "Located between the Neva River and Palace Square, the Hermitage Museum complex consists of five buildings—Winter Palace, Large Hermitage, Small Hermitage, New Hermitage, and the Theatre of Catherine the Great. Each of the buildings was designed by celebrated architects from the 18th and 19th centuries."
    ,"The Return of the Prodigal Son, Judith Giorgione, Flora Rembrandt","The State Hermitage Museum is a museum of art and culture in Saint Petersburg, Russia.","13");

INSERT INTO Museums(Name, Established, Location, People, History, ArtWorks, Description, ImageID)
VALUES ("The British Museum","1753","Great Russell St, Bloomsbury, London WC1B 3DG, UK","Founder: Sir Hans Sloane","Although today principally a museum of cultural art objects and antiquities, the British Museum was founded as a 'universal museum'. Its foundations lie in the will of the Irish-born British physician and naturalist Sir Hans Sloane (1660–1753).",
    "Rosetta Stone, Study for Adam, Rosetta Stone","Its permanent collection numbers some 8 million works, and is among the largest and most comprehensive in existence","14");

INSERT INTO Museums(Name, Established, Location, People, History, ArtWorks, Description, ImageID)
VALUES ("The Prado","1819","Paseo del Prado, s/n, 28014 Madrid, Spain","Architects: Rafael Moneo, Juan de Villanueva","The building that today houses the Museo Nacional del Prado was designed by architect Juan de Villanueva in 1785. It was constructed to house the Natural History Cabinet, by orders of King Charles III.",
    "The Third of May 1808, Ka maja desnuda, Las Hilanderas","The Prado Museum is the main Spanish national art museum, located in central Madrid.","15");