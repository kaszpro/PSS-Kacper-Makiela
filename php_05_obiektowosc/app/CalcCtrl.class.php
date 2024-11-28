<?php
require_once $conf->root_path . '/lib/smarty/Smarty.class.php';
require_once $conf->root_path . '/lib/Messages.class.php';
require_once $conf->root_path . '/app/CalcForm.class.php';
require_once $conf->root_path . '/app/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $form;
    private $result;
    private $hide_intro;

    public function __construct() {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->hide_intro = false;
    }

    public function getParams() {
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->pro = isset($_REQUEST['pro']) ? $_REQUEST['pro'] : null;
    }

    public function validate() {
        if (!(isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->pro))) {
            return false;
        } else {
            $this->hide_intro = true;
        }

        if ($this->form->kwota == "") {
            $this->msgs->addError('Nie podano kwoty kredytu.');
        }
        if ($this->form->lata == "") {
            $this->msgs->addError('Nie podano liczby lat.');
        }
        if ($this->form->pro == "") {
            $this->msgs->addError('Nie podano oprocentowania.');
        }

        if (!$this->msgs->isError()) {
            if (!is_numeric($this->form->kwota) || $this->form->kwota <= 0) {
                $this->msgs->addError('Kwota kredytu musi być liczbą dodatnią.');
            }
            if (!is_numeric($this->form->lata) || $this->form->lata <= 0) {
                $this->msgs->addError('Liczba lat musi być liczbą dodatnią.');
            }
            if (!is_numeric($this->form->pro) || $this->form->pro <= 0) {
                $this->msgs->addError('Oprocentowanie musi być liczbą dodatnią.');
            }
        }

        return !$this->msgs->isError();
    }

    public function process() {
        $this->getParams();

        if ($this->validate()) {
            $kwota = floatval($this->form->kwota);
            $lata = intval($this->form->lata);
            $pro = floatval($this->form->pro) / 100;

            $r = $pro / 12; // miesięczne oprocentowanie
            $n = $lata * 12; // liczba miesięcy
            $raty = ($kwota * $r) / (1 - pow(1 + $r, -$n)); // wzór na ratę annuitetową

            $this->result->result = number_format($raty, 2, ',', ' ') . ' PLN';
            $this->msgs->addInfo('Obliczenia zakończone sukcesem.');
        }

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'Kalkulator Kredytowy');
        $smarty->assign('page_description', 'Obliczanie miesięcznej raty kredytowej.');
        $smarty->assign('page_header', 'Kalkulator kredytowy');

        $smarty->assign('hide_intro', $this->hide_intro);

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->display($conf->root_path . '/app/CalcView.html');
    }
}
