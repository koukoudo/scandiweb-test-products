<?php 

class Template 
{
    protected $data;
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function __set($name, $value) 
    {
        $this->data[$name] = $value;
    }

    public function __get($name) 
    {
        return $this->data[$name];
    }

    public function __toString()
    {
        if (isset($this->data)) {
            extract($this->data);
        }
        ob_start ();
        include (__DIR__ . '/../views/' .$this->file);
        $contents = ob_get_contents ();
        ob_end_clean ();
        return $contents;
    }
}