<?php
    class Ravioles{

        private $id;
        private $ingredient_principal;
        private $titre;
        private $recette;
        private $file;

        /**
         * Planet constructor.
         * @param $id
         * @param $ingredient_principal
         * @param $titre
         * @param $recette
         * @param $file
         */
        public function __construct($id = null, $ingredient_principal, $titre, $recette, $file)
        {
            $this->id = $id;
            $this->ingredient_principal = $ingredient_principal;
            $this->titre = $titre;
            $this->recette = $recette;
            $this->file = $file;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of ingredient_principal
         */ 
        public function getIngredient_principal()
        {
                return $this->ingredient_principal;
        }

        /**
         * Set the value of ingredient_principal
         *
         * @return  self
         */ 
        public function setIngredient_principal($ingredient_principal)
        {
                $this->ingredient_principal = $ingredient_principal;

                return $this;
        }

        /**
         * Get the value of titre
         */ 
        public function getTitre()
        {
                return $this->titre;
        }

        /**
         * Set the value of titre
         *
         * @return  self
         */ 
        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

        /**
         * Get the value of recette
         */ 
        public function getRecette()
        {
                return $this->recette;
        }

        /**
         * Set the value of recette
         *
         * @return  self
         */ 
        public function setRecette($recette)
        {
                $this->recette = $recette;

                return $this;
        }

        /**
         * Get the value of file
         */ 
        public function getFile()
        {
                return $this->file;
        }

        /**
         * Set the value of file
         *
         * @return  self
         */ 
        public function setFile($file)
        {
                $this->file = $file;

                return $this;
        }
    }
