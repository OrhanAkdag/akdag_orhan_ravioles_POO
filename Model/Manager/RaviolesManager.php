<?php
    class raviolesManager extends DbManager {

        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $ravioles = [];
            $sql =  'SELECT * FROM raviole ORDER BY id';
            foreach  ($this->bdd->query($sql) as $row) {
                $ravioles[] = new Ravioles($row['id'], $row['ingredient_principal'], $row['titre'], $row['recette'],$row['file']);
            }

            return $ravioles;
        }

        public function insert(Ravioles $ravioles)
        {
            $ingredient_principal = $ravioles->getIngredient_principal();
            $titre = $ravioles->getTitre();
            $recette = $ravioles->getRecette();
            $file = $ravioles->getFile();

            $requete = $this->bdd->prepare("INSERT INTO raviole (ingredient_principal, titre, recette, file) VALUES (?,?,?,?)");
            $requete->bindParam(1, $ingredient_principal);
            $requete->bindParam(2, $titre);
            $requete->bindParam(3, $recette);
            $requete->bindParam(4, $file);
            $requete->execute();
            $ravioles->setId($this->bdd->lastInsertId());
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM raviole where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM raviole WHERE id=?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $ravioles = new Ravioles($res['id'], $res['ingredient_principal'], $res['titre'], $res['recette'], $res['file']);
            
            return $ravioles;
        }

        public function update(Ravioles $ravioles)
        {
            $ingredient_principal = $ravioles->getIngredient_principal();
            $titre = $ravioles->getTitre();
            $recette = $ravioles->getRecette();
            $file = $ravioles->getFile();
            $id = $ravioles->getId();
            $requete = $this->bdd->prepare("UPDATE raviole SET ingredient_principal =? , titre = ?, recette = ?, file = ? WHERE id = ?");
            $requete->bindParam(1, $ingredient_principal);
            $requete->bindParam(2, $titre);
            $requete->bindParam(3, $recette);
            $requete->bindParam(4, $file);
            $requete->bindParam(5, $id);
            $requete->execute();
        }

        public function update_without_img(Ravioles $ravioles)
        {
            $ingredient_principal = $ravioles->getIngredient_principal();
            $titre = $ravioles->getTitre();
            $recette = $ravioles->getRecette();
            $file = $ravioles->getFile();
            $id = $ravioles->getId();
            $requete = $this->bdd->prepare("UPDATE raviole SET ingredient_principal =? , titre = ?, recette = ? WHERE id = ?");
            $requete->bindParam(1, $ingredient_principal);
            $requete->bindParam(2, $titre);
            $requete->bindParam(3, $recette);
            $requete->bindParam(4, $id);
            $requete->execute();
        }

    }
