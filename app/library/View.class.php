<?php


class View
{
private $data = array();

private $render = FALSE;

public function __construct($view,$title)
{
    try {
        $file = __APP__ . '/resources/views/' . strtolower($view) . '.php';

        if (file_exists($file)) {
            $this->render = $file;
            $this->data['title'] = $title;
        } else {
            die('View ' . $view . ' not found!');
        }
    }
    catch (customException $e) {
        echo $e->errorMessage();
    }
}

public function assign($variable, $value)
{
    $this->data[$variable] = $value;
}

public function __destruct()
{
    extract($this->data);
    include($this->render);
}
}
?>