<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->pro = isset($_REQUEST['pro']) ? $_REQUEST['pro'] : null;
    }

    public function validate() {
        if (! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->pro))) {
            return false;
        }

        if ($this->form->kwota == "") {
            $this->msgs->addError('Nie podano kwoty kredytu.');
        }
        if ($this->form->lata == "") {
            $this->msgs->addError('Nie podano okresu spłaty.');
        }
        if ($this->form->pro == "") {
            $this->msgs->addError('Nie podano oprocentowania.');
        }

        if (! $this->msgs->isError()) {
            if (!is_numeric($this->form->kwota) || $this->form->kwota <= 0) {
                $this->msgs->addError('Kwota kredytu musi być liczbą większą od 0.');
            }
            if (!is_numeric($this->form->lata) || $this->form->lata <= 0) {
                $this->msgs->addError('Okres spłaty musi być liczbą większą od 0.');
            }
            if (!is_numeric($this->form->pro) || $this->form->pro < 0) {
                $this->msgs->addError('Oprocentowanie musi być liczbą nieujemną.');
            }
        }

        return ! $this->msgs->isError();
    }

    public function process(){
        $this->getParams();

        if ($this->validate()) {
            $kwota = floatval($this->form->kwota);
            $lata = intval($this->form->lata);
            $oprocentowanie = floatval($this->form->pro);

            $miesiace = $lata * 12;
            $miesiecznaStopa = $oprocentowanie / 100 / 12;

            if ($miesiecznaStopa > 0) {
                $rata = $kwota * $miesiecznaStopa / (1 - pow(1 + $miesiecznaStopa, -$miesiace));
            } else {
                $rata = $kwota / $miesiace;
            }

            $this->result->result = round($rata, 2);
            $this->msgs->addInfo('Obliczenia zakończone pomyślnie.');
        }

        $this->generateView();
    }

    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'Kalkulator Kredytowy');
        $smarty->assign('page_description', 'Oblicz miesięczną ratę kredytu.');
        $smarty->assign('page_header', 'Kalkulator');

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->display($conf->root_path.'/app/calc/CalcView.html');
    }
}
