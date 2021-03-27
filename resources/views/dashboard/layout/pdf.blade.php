<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Field Visit Report</title>
</head>
<body class="sb-nav-fixed">

<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 15px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:10px 15px;word-break:normal;}
    .tg .tg-7btt{border-color:inherit;font-weight:bold;text-align:center;vertical-align:top}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
    <thead>
    <tr>
        <th class="tg-7btt" colspan="4">Daily Field Visit Report</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="tg-0pky" colspan="4"></td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="2">Date: {{ $date }}</td>
        <td class="tg-0pky" colspan="2">RSM/ASM: {{ $asm_rsm }}</td>
    </tr>
    <tr>
        <td class="tg-7btt" colspan="4">Visit Location Details</td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="2">Area: {{ $report_area }}</td>
        <td class="tg-0pky" colspan="2">ASM: {{ $report_asm }}</td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="2">Territory:  {{ $report_territory }}</td>
        <td class="tg-0pky" colspan="2">TSO: {{ $report_tso }}</td>
    </tr>
    <tr>
        <td class="tg-0lax" colspan="2">Town: {{ $report_town }}</td>
        <td class="tg-0lax" colspan="2">SPO: {{ $report_spo }}</td>
    </tr>
    <tr>
        <td class="tg-0lax" colspan="2">DB: {{ $report_db }}</td>
        <td class="tg-0lax" colspan="2"></td>
    </tr>
    </tbody>
</table>

</body>
</html>
