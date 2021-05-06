<?php 
    //Contiene los textos "fijos" que se muestran en la web
    
    class GeneralPageTexts {
        //Textos principales de toda la web (título, header, footer y navs)
        private $lang ="es";
        private $title = "OPDS - Autoridad Ambiental";
        private $subTitle = "";
        private $nav1 = "Inicio"; 
        private $nav2 = "Ingresar"; 
        private $nav3 = "Salir";
        private $footerText1 ="Redes Sociales OPDS";

        //Setters and Getters
        public function setLang($textRec){
            $this->lang = $textRec;
        }

        public function getLang(){
            return ($this->lang);
        }

        public function setTitle($textRec){
            $this->title = $textRec;
        }

        public function getTitle(){
            return ($this->title);
        }

        public function setSubTitle($textRec){
            $this->subTitle = $textRec;
        }

        public function getSubTitle(){
            return ($this->subTitle);
        }

        public function setNav1($textRec){
            $this->nav1 = $textRec;
        }

        public function getNav1(){
            return ($this->nav1);
        }

        public function setNav2($textRec){
            $this->nav2 = $textRec;
        }

        public function getNav2(){
            return ($this->nav2);
        }

        public function setNav3($textRec){
            $this->nav3 = $textRec;
        }

        public function getNav3(){
            return ($this->nav3);
        }

        public function setNav4($textRec){
            $this->nav4 = $textRec;
        }

        public function getNav4(){
            return ($this->nav4);
        }

        public function setFooterText1($textRec){
            $this->footerText1 = $textRec;
        }

        public function getFooterText1(){
            return ($this->footerText1);
        }

        public function setNav10($textRec){
            $this->nav10 = $textRec;
        }

        public function getNav10(){
            return ($this->nav10);
        }

        public function setNav11($textRec){
            $this->nav11 = $textRec;
        }

        public function getNav11(){
            return ($this->nav11);
        }
        public function setNav12($textRec){
            $this->nav12 = $textRec;
        }

        public function getNav12(){
            return ($this->nav12);
        }
    }

    class RelevateTexts{
        //Texts of relevate vehicles
        private $text1 = "Relevamiento ambiental de vehículos Fuera de Uso";
        private $text2 = "OPDS";
        private $text4 = "Formulario de relevamiento de vehículos";
        private $buttonRelevate = "Registrar";

        //Setters and Getters       
        public function setText1($textRec){
            $this->text1 = $textRec;
        }

        public function getText1(){
            return ($this->text1);
        } 

        public function setText2($textRec){
            $this->text2 = $textRec;
        }

        public function getText2(){
            return ($this->text2);
        } 

        public function setText3($textRec){
            $this->text3 = $textRec;
        }

        public function getText3(){
            return ($this->text3);
        } 

        public function setText4($textRec){
            $this->text4 = $textRec;
        }

        public function getText4(){
            return ($this->text4);
        } 

        public function setButtonRelevate($textRec){
            $this->buttonRelevate = $textRec;
        }

        public function getButtonRelevate(){
            return ($this->buttonRelevate);
        } 
    }    
?>
 