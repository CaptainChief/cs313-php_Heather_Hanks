CREATE TABLE creators
( creator_id    SERIAL      NOT NULL
, creator_name  VARCHAR(20) NOT NULL UNIQUE
, creator_pass  VARCHAR(250) NOT NULL
, PRIMARY KEY(creator_id)
);

CREATE TABLE animal_genus
( genus_id      SERIAL      NOT NULL
, creator_id    INT         NOT NULL
, genus_name    VARCHAR(20) NOT NULL
, genus_def     VARCHAR(350) NOT NULL
, PRIMARY KEY(genus_id)
, FOREIGN KEY(creator_id) REFERENCES creators(creator_id)
);

CREATE TABLE animal_species
( specie_id     SERIAL      NOT NULL
, creator_id	INT		 NOT NULL
, genus_id      INT         NOT NULL
, specie_name   VARCHAR(20) NOT NULL
, specie_def    VARCHAR(350) NOT NULL
, PRIMARY KEY(specie_id)
, FOREIGN KEY(genus_id) REFERENCES animal_genus(genus_id)
, FOREIGN KEY(creator_id) REFERENCES creators(creator_id)
);

CREATE TABLE habitats
( habitat_id    SERIAL      NOT NULL
, creator_id    INT         NOT NULL
, habitat_name  VARCHAR(20) NOT NULL
, habitat_def   VARCHAR(350) NOT NULL
, PRIMARY KEY(habitat_id)
, FOREIGN KEY(creator_id) REFERENCES creators(creator_id)
);

CREATE TABLE locations
( location_id   SERIAL      NOT NULL
, creator_id    INT         NOT NULL
, location_name VARCHAR(20) NOT NULL
, location_def  VARCHAR(350) NOT NULL
, PRIMARY KEY(location_id)
, FOREIGN KEY(creator_id) REFERENCES creators(creator_id)
);

CREATE TABLE species_and_location
( species_location_id   SERIAL NOT NULL
, specie_id             INT NOT NULL
, location_id           INT NOT NULL
, PRIMARY KEY(species_location_id)
, FOREIGN KEY(specie_id) REFERENCES animal_species(specie_id)
, FOREIGN KEY(location_id) REFERENCES locations(location_id) 
);

CREATE TABLE species_and_habitats
( species_habitats_id  SERIAL NOT NULL
, specie_id            INT NOT NULL
, habitat_id           INT NOT NULL
, PRIMARY KEY(species_habitats_id)
, FOREIGN KEY(specie_id) REFERENCES animal_species(specie_id)
, FOREIGN KEY(habitat_id) REFERENCES habitats(habitat_id)
);