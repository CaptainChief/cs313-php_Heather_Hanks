SELECT specie_name FROM animal_species
WHERE  genus_id = 1;

SELECT genus_name FROM animal_genus 
INNER JOIN animal_species 
ON animal_species.genus_id = animal_genus.genus_id
WHERE  animal_genus.genus_id = 1;