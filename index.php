<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
}
</style>
</head>
<body>

<h3>Period 3 exams</h3>

<?php

$exams_json_str = file_get_contents('cs_exams_2017_period_3.json');

$exams_json_array = json_decode($exams_json_str, true);

function arrayToHtml($array, $table = true) {
    $htmlHeader = 
        '<tr>
            <th>Date</th>
            <th>Course</th> 
            <th>Examinator</th>
            <th>Exam type</th>
            <th>Upload</th>
        </tr>';

    $htmlUploadForm = '<form id="uploadbanner" enctype="multipart/form-data" method="post" action="#">
        <input id="fileupload" name="myfile" type="file" />
        <input type="submit" value="submit" id="submit" />';

    $htmlTableRows = '';

    foreach ($array as $key => $exam) {

        $tableRow = 
            '<tr>' .
                '<td>' . $exam['date'] . '</td>' .
                '<td>' . $exam['course'] . '</td>' .
                '<td>' . $exam['examiner'] . '</td>' .
                '<td>' . $exam['examtype'] . '</td>' .
                '<td>' . $htmlUploadForm . '</td>' .
            '</tr>';

        $htmlTableRows = $htmlTableRows . $tableRow;
    }

    return '<table>' . $htmlHeader . $htmlTableRows . '</stable>';
};

echo arrayToHtml($exams_json_array);

?>

</body>
</html>