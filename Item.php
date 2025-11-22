<?php

class Item
{
    protected string $name;
    protected int $size;
    protected string $class;


    public function __construct(string $name, string $class)
    {
        $this->setName($name);
        $this->setSize(1);
        $this->setClass($class);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $name = trim($name);
        if(empty($name)) {
            $name = "Varinha das Varinhas";
        }
        $this->name = $name;
    }

    public function getSize():int
    {
        return $this->size;
    }

    public function setSize($size): void
    {
        if(!isset($size) && $size <=0){
            $this->size = 1;
        }
        $this->size = $size;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass($class): void{
        $class = trim($class);
        if(empty($class)){
           $this->$class = 'Classe Padrão';
        }
        $this->class = $class;

    }

    public function resume(): string
    {
        return "<br>Item: {$this->name}<br>Tamanho: {$this->size}<br>Classe: {$this->class}<br>";
    }

}




