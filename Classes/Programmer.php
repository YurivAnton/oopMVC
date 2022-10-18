<?php
class Programmer extends Employee
{
    private $langs = [];

    public function getLang()
    {
        $result = '';
        foreach($this->langs as $lang)
        {
            $result .= $lang;
            $result .= ' ';
        }
        return $result;
    }

    public function setLang($lang)
    {
        if(is_array($lang)) 
        {
            $this->langs = array_merge($this->langs, $lang);
        } else {
            $this->langs[] = $lang;
        }
    }
}