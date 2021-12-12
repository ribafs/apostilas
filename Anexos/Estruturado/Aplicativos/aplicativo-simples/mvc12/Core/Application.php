<?php
namespace Core;

class Application
{
    private $urlController = null;

    private $urlAction = null;

    private $urlParams = array();

    public function __construct()
    {
        $this->splitUrl();

        // Controller default, caso nenhum tenha sido definido
        if (!$this->urlController) {
            $page = new \App\Controllers\ClientController();
            $page->index();

        } elseif (file_exists(APP . 'Controllers/' . ucfirst($this->urlController) . 'Controller.php')) {
            $controller = "\\App\\Controllers\\" . ucfirst($this->urlController) . 'Controller';
            $this->urlController = new $controller();

            if (method_exists($this->urlController, $this->urlAction) && is_callable(array($this->urlController, $this->urlAction))) {
                
                if (!empty($this->urlParams)) {
                    call_user_func_array(array($this->urlController, $this->urlAction), $this->urlParams);
                } else {
                    $this->urlController->{$this->urlAction}();
                }

            } else {
                if (strlen($this->urlAction) == 0) {
                    $this->urlController->index();
                } else {
                    $page = new \Core\ErrorController();
                    $page->index();
                }
            }
        } else {
            $page = new \Core\ErrorController();
            $page->index();
        }
    }

    /**
     * Get and split the URL
     */
    private function splitUrl()
    {
        if (isset($_GET['url'])) {

            // split URL
            $url = trim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->urlController = isset($url[0]) ? $url[0] : null;
            $this->urlController = substr($this->urlController, 0, -1);

            $this->urlAction = isset($url[1]) ? $url[1] : null;

            // Remove controller and action from the split URL
            unset($url[0], $url[1]);

            // Rebase array keys and store the URL params
            $this->urlParams = array_values($url);

            // Para debugar estas variáveis. descomente as linhas abaixo
            /*
            echo '<center><b>DEBUG</b><hr>';
            echo 'Controller: ' . $this->urlController . '<br>';
            echo 'Action: ' . $this->urlAction . '<br>';
            echo 'Parameters: ' . print_r($this->urlParams, true) . '<br>';
            die();
            */
        }
    }
}
