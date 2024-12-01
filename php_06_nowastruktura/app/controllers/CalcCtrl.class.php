<?php
require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {

    private $form;
    private $result;

    public function __construct() {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams() {
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->pro = getFromRequest('pro');
    }

    public function validate() {
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->pro))) {
            return false;
        }

        if ($this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->lata == "") {
            getMessages()->addError('Nie podano liczby lat');
        }
        if ($this->form->pro == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }

        if (!getMessages()->isError()) {
            if (!is_numeric($this->form->kwota) || $this->form->kwota <= 0) {
                getMessages()->addError('Kwota kredytu musi być liczbą dodatnią');
            }

            if (!is_numeric($this->form->lata) || $this->form->lata <= 0) {
                getMessages()->addError('Liczba lat musi być liczbą dodatnią');
            }

            if (!is_numeric($this->form->pro) || $this->form->pro < 0) {
                getMessages()->addError('Oprocentowanie musi być liczbą nieujemną');
            }
        }

        return !getMessages()->isError();
    }

    public function process() {
        $this->getParams();

        if ($this->validate()) {
            $kwota = floatval($this->form->kwota);
            $lata = intval($this->form->lata);
            $pro = floatval($this->form->pro);

            $miesiace = $lata * 12;
            $miesieczne_oprocentowanie = $pro / 100 / 12;
            
            if ($miesieczne_oprocentowanie > 0) {
                $rata = $kwota * $miesieczne_oprocentowanie / 
                    (1 - pow(1 + $miesieczne_oprocentowanie, -$miesiace));
            } else {
                $rata = $kwota / $miesiace;
            }

            $this->result->result = round($rata, 2);
            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign('page_description', 'Oblicz miesięczną ratę kredytu.');
        getSmarty()->assign('page_header', 'Kalkulator kredytowy');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('CalcView.html');
    }
}
