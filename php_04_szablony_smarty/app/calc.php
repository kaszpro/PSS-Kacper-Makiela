<?php
// KONTROLER strony kalkulatora kredytowego
require_once dirname(__FILE__).'/../config.php';
// Załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

// Pobranie parametrów
function getParams(&$form){
    $form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
    $form['pro'] = isset($_REQUEST['pro']) ? $_REQUEST['pro'] : null;
}

// Walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form, &$infos, &$msgs, &$hide_intro){
    if (!(isset($form['kwota']) && isset($form['lata']) && isset($form['pro'])))
        return false;

    $hide_intro = true;
    $infos[] = 'Przekazano parametry.';

    if ($form['kwota'] == "") $msgs[] = 'Nie podano kwoty kredytu.';
    if ($form['lata'] == "") $msgs[] = 'Nie podano liczby lat.';
    if ($form['pro'] == "") $msgs[] = 'Nie podano oprocentowania.';

    if (count($msgs) == 0) {
        if (!is_numeric($form['kwota']) || $form['kwota'] <= 0) $msgs[] = 'Kwota kredytu musi być liczbą dodatnią.';
        if (!is_numeric($form['lata']) || $form['lata'] <= 0) $msgs[] = 'Liczba lat musi być liczbą dodatnią.';
        if (!is_numeric($form['pro']) || $form['pro'] < 0) $msgs[] = 'Oprocentowanie musi być liczbą nieujemną.';
    }

    return count($msgs) == 0;
}

// Obliczenia
function process(&$form, &$infos, &$msgs, &$result){
    $infos[] = 'Parametry poprawne. Wykonuję obliczenia.';

    $kwota = floatval($form['kwota']);
    $lata = intval($form['lata']);
    $oprocentowanie = floatval($form['pro']);

    // Oblicz miesięczną stopę procentową
    $miesieczna_stopa = $oprocentowanie / 12 / 100;
    $liczba_rat = $lata * 12;

    if ($miesieczna_stopa > 0) {
        // Wzór na ratę annuitetową
        $result = $kwota * $miesieczna_stopa * pow(1 + $miesieczna_stopa, $liczba_rat) /
                  (pow(1 + $miesieczna_stopa, $liczba_rat) - 1);
    } else {
        // Jeśli oprocentowanie = 0, rata = kwota / liczba rat
        $result = $kwota / $liczba_rat;
    }
}

// Inicjalizacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if (validate($form, $infos, $messages, $hide_intro)) {
    process($form, $infos, $messages, $result);
}

// Przygotowanie danych dla szablonu
$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Kalkulator Kredytowy');
$smarty->assign('page_description', 'Oblicz wysokość miesięcznej raty kredytu.');
$smarty->assign('page_header', 'Kalkulator Kredytowy');

$smarty->assign('hide_intro', $hide_intro);
$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);

// Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');
