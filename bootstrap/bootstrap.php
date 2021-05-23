<?php
require INC_ROOT . '/vendor/autoload.php';
use Practice\ComputerCreate;

/**
 * @param string outputType
 * @param string pcType
 */
function outputComputer(string $outputType, string $pcType): void {
    $coms = (new ComputerCreate())->createComputer($pcType);

    if ($outputType === 'table') {
        $thead = '';
        $tbody = '<tbody>';

        foreach ($coms as $com) {
            if ('' === $thead) {
                $a = get_object_vars($com);
                $thead.= '<thead>';
                $thead.= '<tr>';
                $thead.= '<th>';
                $thead = implode('</th><th>', array_keys($a));
                $thead.= '</th>';
                $thead.= '</tr>';
                $thead.= '</thead>';
            }
            $a = get_object_vars($com);
            $tbody.= '<tr>';
            $tbody.= '<td>';
            $tbody.= implode('</td><td>', array_values($a));
            $tbody.= '</td>';
            $tbody.= '</tr>';
        }
        $tbody.= '</tbody>';
        $tableHtml = '';
        $tableHtml.= '<table>';
        $tableHtml.= $thead;
        $tableHtml.= $tbody;
        $tableHtml.= '</table>';
        $res = $tableHtml;
    }

    if ('json' === $outputType) {
        $res = json_encode($coms);
    }

    if ('csv' === $outputType) {
        $header = null;
        foreach ($coms as $com) {
            if ($header === null) {
                $header = get_object_vars($com);
                $header = implode(',', array_keys($header));
                $rows[] = $header;
            }
            $row = get_object_vars($com);
            $rows[] = implode(',', array_values($row));
        }
        $res = implode('<br>', $rows);
    }

    print_r($res);
}

$outputType = htmlspecialchars($_GET['type']);
$pcType = htmlspecialchars($_GET['pc']);
outputComputer($outputType, $pcType);
