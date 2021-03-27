<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">


        .tg {
            border-collapse: collapse;
            border-spacing: 0;
            margin: 0 auto;
            width: 100%;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 10px;
            overflow: hidden;
            padding: 2px 10px;
            word-break: normal;
            white-space: nowrap;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 10px;
            font-weight: normal;
            overflow: hidden;
            padding: 2px 10px;
            word-break: normal;
        }

        .tg .tg-c3ow {
            border-color: inherit;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-0pky {
            border-color: inherit;
            text-align: left;
            vertical-align: top
        }

        .tg .tg-0lax {
            text-align: left;
            vertical-align: top
        }
    </style>
</head>

<body>


<table class="tg">
    <thead>
    <tr>
        <th class="tg-c3ow" colspan="6"><strong>Daily Field Visit Report</strong></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="tg-0pky" colspan="6">              </td>
    </tr>
    <tr>
        <td class="tg-0pky" colspan="3" style="width: 50%;"><strong>Date: </strong>{{ $date }}</td>
        <td class="tg-0pky" colspan="3" style="width: 50%;"><strong>RSM/ASM: </strong>{{ $asm_rsm }}</td>
    </tr>
    <tr>
        <td class="tg-c3ow" colspan="6"><strong>Visit Location Details</strong></td>
    </tr>
    <tr>
        <td class="tg-0lax" colspan="3"><strong>Area: </strong>{{ $report_area }}</td>
        <td class="tg-0lax" colspan="3"><strong>ASM: </strong>{{ $report_asm }}</td>
    </tr>
    <tr>
        <td class="tg-0lax" colspan="3"><strong>Territory: </strong>{{ $report_territory }}</td>
        <td class="tg-0lax" colspan="3"><strong>TSO: </strong>{{ $report_tso }}</td>
    </tr>
    <tr>
        <td class="tg-0lax" colspan="3"><strong>Town: </strong>{{ $report_town }}</td>
        <td class="tg-0lax" colspan="3"><strong>SPO: </strong>{{ $report_spo }}</td>
    </tr>
    <tr>
        <td class="tg-0lax" colspan="6"><strong>DB: </strong>{{ $report_db }}</td>
    </tr>
    <tr>
        <td class="tg-c3ow" colspan="6"><strong>DB Point Review</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky" style="width: 16.66%;"><strong>DB Avg Sale</strong></td>
        <td class="tg-0pky" style="width: 16.66%;"></td>
        <td class="tg-0pky" style="width: 16.66%;"><strong>W/H Mgmt</strong></td>
        <td class="tg-0pky" style="width: 16.66%;"></td>
        <td class="tg-0pky" colspan="2"><strong>In Case of Super/Common DB's</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>DB YTD Gr%</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>FIFO</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky" style="width: 15%;"><strong>#Sub DB's</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Month Target</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Stock Register</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Sub DB Avg Sale</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>MTD Pry</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Damage Stk Value</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Sub DB's June Sale</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>MTD IMS</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Damage Stk Storage</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Sub DB Av #SKU's</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Stock Value</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Beat Plan</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Sub DB # Bills/Month</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>#SKU's Carried</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Printer Status</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Sub DB Month Tgt</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>SKU's Stockout</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>DMS Implementation</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>SFA Tabs</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-c3ow" colspan="6"><strong>Area/Territory Overview</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>ASM/TSO Avg Sale</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Stock Value</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Morn/Eve Meetings</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>YTD Gr%</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Stock Days</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>SFA Compliance</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Month Target</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Focus SKU %Ach</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>SPO RFTS Knowledge</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>MTD Pry</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>SKU's Stockout</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>DSR Status</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>MTD IMS</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>SPO Tgt Knowledge</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>SFA Tabs</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-c3ow" colspan="6"><strong>Market Work With</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Beat Visited</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Tot #Outlets</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>9Steps</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Daily Avg</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Outlets Worked</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Focus SKU</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Day Tgt</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Eff. Calls</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Samples</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Asking Rate</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Tot Memo Value</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Tab Used</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>SPO Knwl/Prep</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>Av LPC</strong></td>
        <td class="tg-0pky"></td>
        <td class="tg-0pky"><strong>SFA Compliance</strong></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-c3ow" colspan="6"><strong>Agreed Action Points</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Area</strong></td>
        <td class="tg-0pky" colspan="2"><strong>Actions Agreed</strong></td>
        <td class="tg-0pky" colspan="2"><strong>Responsibility</strong></td>
        <td class="tg-0pky"><strong>Timeline</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>DB Pt.</strong></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Sub-DB</strong></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Overview</strong></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Processes</strong></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Mkt Work</strong></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>People</strong></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky"></td>
    </tr>
    <tr>
        <td class="tg-0pky"><strong>Other</strong></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky" colspan="2"></td>
        <td class="tg-0pky"></td>
    </tr>
    </tbody>
</table>

</body>

</html>
