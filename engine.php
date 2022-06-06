<?php

if (isset($_GET['contactdatajson'])) {
    $contactCard = json_decode($_GET['contactdatajson']);
    $contactCard->comment = '';
    $contactCard->callstatus = false;

    if ($contactCard->form_id == 1) {
        $formOnWork = 'leadCatcherForm';
    }

    if ($contactCard->task_id == 2 && $contactCard->priority == true) {
        $taskOnWork = 'callClientNow';
    }
    if ($contactCard->task_id == 2 && $contactCard->priority == false) {
        $taskOnWork = 'callClientOngoing';
    }



    $hotLeads = [];
    $mediumLeads = [];


    foreach (json_decode(file_get_contents('hotLeadsArr.json')) as $item) {
        array_push($hotLeads, $item);
    }

    if (is_numeric($contactCard->phone) && is_string($contactCard->name) && $formOnWork == 'leadCatcherForm' && $taskOnWork == 'callClientNow') {
        $hotLeads[count($hotLeads)] = $contactCard;
        // array_push($hotLeads, $contactCard);
        $leadsArr = json_encode($hotLeads);

        $fp = fopen("hotLeadsArr.json", "w");
        fwrite($fp, $leadsArr);
        fclose($fp);
    } elseif (is_numeric($contactCard->phone) && is_string($contactCard->name) && $formOnWork == 'leadCatcherForm' && $taskOnWork == 'callClientOngoing') {
        array_push($mediumLeads, $contactCard);
        $leadsArr = json_encode($mediumLeads);

        $fp = fopen("mediumLeadsArr.json", "w");
        fwrite($fp, $leadsArr);
        fclose($fp);
    }
} else {
    $contactCard = array();
}


$hotLeadsData = json_decode(file_get_contents('hotLeadsArr.json'));
$displayData = $hotLeadsData;


if (isset($_GET['additionaldatajson'])) {
    $comm = json_decode($_GET['additionaldatajson']);

    foreach ($displayData as $key => &$item) {
        if ($key == $comm->id) {
            $item->comment = $comm->comment;
            $item->callstatus = $comm->callstatus;
        }
    }

    $leadsArr = json_encode($displayData);

    $fp = fopen("hotLeadsArr.json", "w");
    fwrite($fp, $leadsArr);
    fclose($fp);

    // $comments = [];

    // array_push($comments, $comm);

    // $addArr = json_encode($comments);

    // $fp = fopen("additionalInfoArr.json", "w");
    // fwrite($fp, $addArr);
    // fclose($fp);
} else {
    $comm = array();
}

// $additionalData = json_decode(file_get_contents('additionalInfoArr.json'));
