<?php

    class TextFormatHelper extends AppHelper {

        public $name = "TextFormat";
        
        public $html = "";
        
        public function alert($mensagem, $param = null, $tipo = null) {
            switch($param){
                default:
                    $class = "alert-info";
                    $glyphicon = "glyphicon glyphicon-info-sign";
                    break;
                case 1:
                    $class = "alert-success";
                    $glyphicon = "glyphicon glyphicon-ok-sign";
                    break;
                case 2:
                    $class = "alert-danger";
                    $glyphicon = "glyphicon glyphicon-exclamation-sign";
                    break;
                case 3:
                    $class = "alert-warning";
                    $glyphicon = "glyphicon glyphicon-info-sign";
                    break;
            }
            switch($tipo){
                default:
                    $html  = "<div class=\"alert ".$class." text-center\" role=\"alert\">";
                    $html .= "<p><span class=\"".$glyphicon."\"></span> ".$mensagem."</p>";
                    $html .= "</div>";
                    break;
                case 1:
                    $html  = "<div class=\"alert ".$class."\" role=\"alert\">".$mensagem."</div>";
                    break;
                case 2:
                    $html  = "<div class=\"alert ".$class." alert-dismissible text-center\" role=\"alert\">";
                    $html .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Fechar\">";
                    $html .= "<span aria-hidden=\"true\">&times;</span></button>".$mensagem."</div>";
                    break;
            }
            return $html;
        }
        
        public function cortaTexto($string, $limit = null){
            $tam = strlen($string);
            $max = isset($limit) ? $limit : 50;
            if($tam > $max){
                $texto = substr_replace($string, "...", $max, $tam - $max);
            }else{
                $texto = $string;
            }
            return strip_tags($texto);
        }
        

        
    }