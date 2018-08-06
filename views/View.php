<?php

class View {

    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view'. $action .'.php';
    }

    /**
     * Fonction qui génère et affiche la vue
     *
     * @param [type] $data
     */
    public function generate($data)
    {
        // Partie spécifique de la vue
        $content = $this->generateFile($this->_file, $data);

        // Template
        $view = $this->generateFile('views/template.php', array('t'=> $this->_t, 'content' => $content));

        echo $view;
    }

    /**
     * Fonction qui génère un fichier vue et renvoie le résultat produit
     *
     * @param [type] $file
     * @param [type] $data
     */
    private function generateFile($file, $data)
    {
        if(file_exists($file))
        {
            extract($data);

            ob_start();

            // Inclut le fichier vue
            require $file;

            return ob_get_clean();
        }
        else
        {
            throw new Exception('Fichier ' . $file . ' introuvable');
        }
    }

}