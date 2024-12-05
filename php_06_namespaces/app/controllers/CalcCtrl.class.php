<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;
    private $result;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }
    
    public function getParams(){
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->oprocentowanie = getFromRequest('pro');
    }
    
    public function validate() {
        if (! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->oprocentowanie))) {
            return false;
        }

        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->lata == "") {
            getMessages()->addError('Nie podano liczby lat');
        }
        if ($this->form->oprocentowanie == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }

        if (!getMessages()->isError()) {
            if (!is_numeric($this->form->kwota) || $this->form->kwota <= 0) {
                getMessages()->addError('Kwota musi być liczbą większą od zera');
            }
            if (!is_numeric($this->form->lata) || $this->form->lata <= 0) {
                getMessages()->addError('Liczba lat musi być liczbą całkowitą większą od zera');
            }
            if (!is_numeric($this->form->oprocentowanie) || $this->form->oprocentowanie <= 0) {
                getMessages()->addError('Oprocentowanie musi być liczbą większą od zera');
            }
        }
        
        return !getMessages()->isError();
    }
    
    public function process(){
        $this->getParams();
        
        if ($this->validate()) {
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->lata = intval($this->form->lata);
            $this->form->oprocentowanie = floatval($this->form->oprocentowanie);
            getMessages()->addInfo('Parametry poprawne.');
            
            $oprocentowanieMiesieczne = $this->form->oprocentowanie / 100 / 12;
            $liczbaRat = $this->form->lata * 12;
            
            $rata = $this->form->kwota * $oprocentowanieMiesieczne /
                (1 - pow(1 + $oprocentowanieMiesieczne, -$liczbaRat));

            $this->result->result = round($rata, 2);
            getMessages()->addInfo('Obliczenia zakończone.');
        }

        $this->generateView();
    }
    
    public function generateView(){
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);
        getSmarty()->display('CalcView.tpl');
    }
}
