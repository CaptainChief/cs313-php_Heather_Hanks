-- Inserting into the creator table.

INSERT INTO creators
( creator_name  
, creator_pass 
)
VALUES
( 'Heather Hanks'
, 'star_wars'
);

-- Inserting into animal genus table.
INSERT INTO animal_genus
( creator_id
, genus_name
, genus_def
)
VALUES
( 1
, 'Wild Cats'
, 'The Wild Cats are larger cats that live in the wild.'
);

INSERT INTO animal_genus
( creator_id
, genus_name
, genus_def
)
VALUES
( 1
, 'Dragons'
, 'Dragons are four legged creatures that can fly. They tend to be scaley.'
);

INSERT INTO animal_genus
( creator_id
, genus_name
, genus_def
)
VALUES
( 1
, 'Deep Sea Monsters'
, 'Deep Sea Monsters tend to be fish found only in the deepest part of the oceans.'
);

-- Inserting into animal species table.

INSERT INTO animal_species
( genus_id
, specie_name
, specie_def
)
VALUES
( 1
, 'Lion'
, 'The lion is a type of wild cat found in savannah.'
);

INSERT INTO animal_species
( genus_id
, specie_name
, specie_def
)
VALUES
( 1
, 'Leopard'
, 'The leopard is a type of wild cat found in the jungle.'
);

INSERT INTO animal_species
( genus_id
, specie_name
, specie_def
)
VALUES
( 2
, 'Wyvern'
, 'The wyvern is a type of dragon, having only two legs. This is unusual as most dragons types have four legs.'
);

INSERT INTO animal_species
( genus_id
, specie_name
, specie_def
)
VALUES
( 2
, 'Sea Dragon'
, 'The sea dragon live in the sea, eating the deep sea monsters rather than hunting humans.'
);

INSERT INTO animal_species
( genus_id
, specie_name
, specie_def
)
VALUES
( 3
, 'Giant Squid'
, 'The Giant Squid is the most common deep sea monster found.'
);

INSERT INTO animal_species
( genus_id
, specie_name
, specie_def
)
VALUES
( 3
, 'Metashark'
, 'The Metashark is a huge shark that preys on the giant squid and other various large creaturs.'
);

-- Insert into habitat table

INSERT INTO habitats
( creator_id
, habitat_name
, habitat_def
)
VALUES
( 1
, 'Savannah'
, 'A generally dry and yellow land. Covered in grass.'
);

INSERT INTO habitats
( creator_id
, habitat_name
, habitat_def
)
VALUES
( 1
, 'Jungle'
, 'A very large and humid forest essentially.'
);

INSERT INTO habitats
( creator_id
, habitat_name
, habitat_def
)
VALUES
( 1
, 'Mountains'
, 'A large rocky hill basically.'
);

INSERT INTO habitats
( creator_id
, habitat_name
, habitat_def
)
VALUES
( 1
, 'Deep Sea'
, 'One of the most terrifying places to be.'
);

-- Insert into the location table

INSERT INTO locations
( creator_id
, location_name
, location_def
)
VALUES
( 1
, 'Africa'
, 'A large landmass just beneath Europe.'
);

INSERT INTO locations
( creator_id
, location_name
, location_def
)
VALUES
( 1
, 'America'
, 'A very large landmass located in the west.'
);

INSERT INTO locations
( creator_id
, location_name
, location_def
)
VALUES
( 1
, 'Pacific'
, 'A large body of water, it contains many horrors of the deep.'
);

-- Insert into species_and_habitat table

INSERT INTO species_and_habitats
( specie_id
, habitat_id
)
VALUES
( 1
, 1
);

INSERT INTO species_and_habitats
( specie_id
, habitat_id
)
VALUES
( 2
, 2
);

INSERT INTO species_and_habitats
( specie_id
, habitat_id
)
VALUES
( 3
, 3
);

INSERT INTO species_and_habitats
( specie_id
, habitat_id
)
VALUES
( 4
, 4
);

INSERT INTO species_and_habitats
( specie_id
, habitat_id
)
VALUES
( 5
, 4
);

INSERT INTO species_and_habitats
( specie_id
, habitat_id
)
VALUES
( 6
, 4
);

-- Insert into species and locations
INSERT INTO species_and_location
( specie_id
, location_id
)
VALUES
( 1
, 1
);

INSERT INTO species_and_location
( specie_id
, location_id
)
VALUES
( 2
, 1
);

INSERT INTO species_and_location
( specie_id
, location_id
)
VALUES
( 3
, 2
);

INSERT INTO species_and_location
( specie_id
, location_id
)
VALUES
( 4
, 3
);

INSERT INTO species_and_location
( specie_id
, location_id
)
VALUES
( 5
, 3
);

INSERT INTO species_and_location
( specie_id
, location_id
)
VALUES
( 6
, 3
);