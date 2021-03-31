<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">

        .nowrap {
            white-space: nowrap;
        }
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
            padding: 2px 5px;
            word-break: normal;

        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 10px;
            font-weight: normal;
            overflow: hidden;
            padding: 2px 5px;
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
        .width-50-percent {
            width: 50%;
        }
    </style>
</head>

<body>


<table class="tg" style="table-layout: fixed">
    <thead>
    <tr>
        <th class="tg-c3ow" colspan="6" style="background: #cccccc"><strong>Daily Field Visit Report</strong></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="tg-0pky" colspan="6"><br></td>
    </tr>
    <tr>
        <td class="tg-0pky width-50-percent" colspan="3"><strong>Date: </strong>{{ $newDate = date("d F, Y", strtotime($data->report_date))  }}</td>
        <td class="tg-0pky width-50-percent" colspan="3"><strong>Report By: </strong>{{ $hierarchy['rsm']->name }}</td>
    </tr>
    <tr>
        <td class="tg-c3ow" colspan="6"><strong>Visit Location Details</strong></td>
    </tr>
    <tr>
        <td class="tg-0lax width-50-percent" colspan="3"><strong>Area: </strong>{{ $area = str_replace('_', ' ', $hierarchy['asm']->area) }}</td>
        <td class="tg-0lax width-50-percent" colspan="3"><strong>ASM: </strong>{{ $hierarchy['asm']->name }}</td>
    </tr>
    <tr>
        <td class="tg-0lax width-50-percent" colspan="3"><strong>Territory: </strong>{{ $hierarchy['tso']->area }}</td>
        <td class="tg-0lax width-50-percent" colspan="3"><strong>TSO: </strong>{{ $hierarchy['tso']->name }}</td>
    </tr>
    <tr>
        <td class="tg-0lax width-50-percent" colspan="3"><strong>Town: </strong>{{ $hierarchy['db']->area }}</td>
        <td class="tg-0lax width-50-percent" colspan="3"><strong>SPO: </strong>{{ $hierarchy['spo']->name }}</td>
    </tr>
    <tr>
        <td class="tg-0lax" colspan="6"><strong>DB: </strong>{{ $hierarchy['db']->name }}</td>
    </tr>

    <tr>
        <td class="tg-c3ow" colspan="6"><strong>DB Point Review</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap" style="width: 16.66%;"><strong>DB Avg Sale</strong></td>
        <td class="tg-0pky" style="width: 16.66%;">{{ $data->db_avg_sale }}</td>
        <td class="tg-0pky nowrap" style="width: 16.66%;"><strong>W/H Mgmt</strong></td>
        <td class="tg-0pky" style="width: 16.66%;">{{ ($data->db_wh_mgmt) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap" colspan="2"><strong>In Case of Super/Common DB's</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>DB YTD Gr%</strong></td>
        <td class="tg-0pky">{{ $data->db_ytd_gr_percent }}%</td>
        <td class="tg-0pky nowrap"><strong>FIFO</strong></td>
        <td class="tg-0pky">{{ ($data->db_fifo) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap" style="width: 18%;"><strong>#Sub DB's</strong></td>
        <td class="tg-0pky">{{ $data->db_no_of_sub_db }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Month Target</strong></td>
        <td class="tg-0pky">{{ $data->db_month_target }}</td>
        <td class="tg-0pky nowrap"><strong>Stock Register</strong></td>
        <td class="tg-0pky">{{ ($data->db_stock_register) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap"><strong>Sub DB Avg Sale</strong></td>
        <td class="tg-0pky">{{ $data->db_sub_db_avg_sale }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>MTD Pry</strong></td>
        <td class="tg-0pky">{{ $data->db_mtd_pry }}</td>
        <td class="tg-0pky nowrap"><strong>Damage Stk Value</strong></td>
        <td class="tg-0pky">{{ $data->db_damage_stk_value }}</td>
        <td class="tg-0pky nowrap"><strong>Sub DB's Month Sale</strong></td>
        <td class="tg-0pky">{{ $data->db_sub_db_month_sale }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>MTD IMS</strong></td>
        <td class="tg-0pky">{{ $data->db_mtd_ims }}</td>
        <td class="tg-0pky nowrap"><strong>Damage Stk Storage</strong></td>
        <td class="tg-0pky">{{ ($data->db_damage_stk_storage) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap"><strong>Sub DB Av #SKU's</strong></td>
        <td class="tg-0pky">{{ $data->db_sub_db_av_sku }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Stock Value</strong></td>
        <td class="tg-0pky">{{ $data->db_stock_value }}</td>
        <td class="tg-0pky nowrap"><strong>Beat Plan</strong></td>
        <td class="tg-0pky">{{ ($data->db_beat_plan) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap"><strong>Sub DB # Bills/Month</strong></td>
        <td class="tg-0pky">{{ $data->db_sub_db_bills_per_month }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>#SKU's Carried</strong></td>
        <td class="tg-0pky">{{ $data->db_sku_carried }}</td>
        <td class="tg-0pky nowrap"><strong>Printer Status</strong></td>
        <td class="tg-0pky">{{ ($data->db_printer_status) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap"><strong>Sub DB Month Tgt</strong></td>
        <td class="tg-0pky">{{ $data->db_sub_db_month_target }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>SKU's Stockout</strong></td>
        <td class="tg-0pky">{{ $data->db_sku_stockout }}</td>
        <td class="tg-0pky nowrap"><strong>DMS Implementation</strong></td>
        <td class="tg-0pky">{{ ($data->db_dms_implementation) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap"><strong>Sub DB MTD Lifting</strong></td>
        <td class="tg-0pky">{{ $data->db_sub_db_mtd_lifting }}</td>
    </tr>
    <tr>
        <td class="tg-c3ow nowrap" colspan="6"><strong>Area/Territory Overview</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>ASM/TSO Avg Sale</strong></td>
        <td class="tg-0pky">{{ $data->area_avg_sale }}</td>
        <td class="tg-0pky nowrap"><strong>Stock Value</strong></td>
        <td class="tg-0pky">{{ $data->area_stock_value }}</td>
        <td class="tg-0pky nowrap"><strong>Morn/Eve Meetings</strong></td>
        <td class="tg-0pky">{{ ($data->area_morn_or_eve_meeting) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>YTD Gr%</strong></td>
        <td class="tg-0pky">{{ $data->area_ytd_gr_percent }}%</td>
        <td class="tg-0pky nowrap"><strong>Stock Days</strong></td>
        <td class="tg-0pky">{{ $data->area_stock_days }}</td>
        <td class="tg-0pky nowrap"><strong>SFA Compliance</strong></td>
        <td class="tg-0pky">{{ ($data->area_sfa_compliance) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Month Target</strong></td>
        <td class="tg-0pky">{{ $data->area_month_target }}</td>
        <td class="tg-0pky nowrap"><strong>Focus SKU %Ach</strong></td>
        <td class="tg-0pky">{{ $data->area_focus_sku_percent_ach }}%</td>
        <td class="tg-0pky nowrap"><strong>SPO RFTS Knowledge</strong></td>
        <td class="tg-0pky">{{ ($data->area_spo_rfts_knowledge) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>MTD Pry</strong></td>
        <td class="tg-0pky">{{ $data->area_mtd_pry }}</td>
        <td class="tg-0pky nowrap"><strong>SKU's Stockout</strong></td>
        <td class="tg-0pky">{{ $data->area_sku_stockout }}</td>
        <td class="tg-0pky nowrap"><strong>DSR Status</strong></td>
        <td class="tg-0pky">{{ ($data->area_dsr_status) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>MTD IMS</strong></td>
        <td class="tg-0pky">{{ $data->area_mtd_ims }}</td>
        <td class="tg-0pky nowrap"><strong>SPO Tgt Knowledge</strong></td>
        <td class="tg-0pky">{{ ($data->area_spo_tgt_knowledge) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap"><strong>SFA Tabs</strong></td>
        <td class="tg-0pky">{{ ($data->area_spo_tgt_knowledge) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-c3ow nowrap" colspan="6"><strong>Market Work With</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Beat Visited</strong></td>
        <td class="tg-0pky">{{ $data->market_beat_visited }}</td>
        <td class="tg-0pky nowrap"><strong>Tot #Outlets</strong></td>
        <td class="tg-0pky">{{ $data->market_total_outlets }}</td>
        <td class="tg-0pky nowrap"><strong>9Steps</strong></td>
        <td class="tg-0pky">{{ ($data->market_9steps) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Daily Avg</strong></td>
        <td class="tg-0pky">{{ $data->market_daily_avg }}</td>
        <td class="tg-0pky nowrap"><strong>Outlets Worked</strong></td>
        <td class="tg-0pky">{{ $data->market_outlets_worked }}</td>
        <td class="tg-0pky nowrap"><strong>Focus SKU</strong></td>
        <td class="tg-0pky">{{ $data->market_focus_sku }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Day Tgt</strong></td>
        <td class="tg-0pky">{{ $data->market_day_tgt }}</td>
        <td class="tg-0pky nowrap"><strong>Eff. Calls</strong></td>
        <td class="tg-0pky">{{ $data->market_eff_calls }}</td>
        <td class="tg-0pky nowrap"><strong>Samples</strong></td>
        <td class="tg-0pky">{{ ($data->market_samples) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Asking Rate</strong></td>
        <td class="tg-0pky">{{ $data->market_asking_rate }}</td>
        <td class="tg-0pky nowrap"><strong>Tot Memo Value</strong></td>
        <td class="tg-0pky">{{ $data->market_total_memo_value }}</td>
        <td class="tg-0pky nowrap"><strong>Tab Used</strong></td>
        <td class="tg-0pky">{{ ($data->market_tab_used) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>SPO Knwl/Prep</strong></td>
        <td class="tg-0pky">{{ ($data->market_spo_knwl_prep) == "1" ? "OK" : "Not OK" }}</td>
        <td class="tg-0pky nowrap"><strong>Av LPC</strong></td>
        <td class="tg-0pky">{{ $data->market_av_lpc }}</td>
        <td class="tg-0pky nowrap"><strong>SFA Compliance</strong></td>
        <td class="tg-0pky">{{ ($data->market_sfa_compliance) == "1" ? "OK" : "Not OK" }}</td>
    </tr>
    <tr>
        <td class="tg-c3ow nowrap" colspan="6"><strong>Agreed Action Points</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Area</strong></td>
        <td class="tg-0pky nowrap" colspan="2"><strong>Actions Agreed</strong></td>
        <td class="tg-0pky nowrap" colspan="2"><strong>Responsibility</strong></td>
        <td class="tg-0pky"><strong>Timeline</strong></td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>DB Pt.</strong></td>
        <td class="tg-0pky" colspan="2">{{ $data->db_point_actions_agreed }}</td>
        <td class="tg-0pky" colspan="2">
            @if( $data->db_point_responsibility == 1 )
                DB/ASM
            @elseif( $data->db_point_responsibility == 2 )
                TSO
            @elseif( $data->db_point_responsibility == 3 )
                SPO
            @endif
        </td>
        <td class="tg-0pky">{{ $data->db_point_timeline }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Sub-DB</strong></td>
        <td class="tg-0pky" colspan="2">{{ $data->sub_db_point_actions_agreed }}</td>
        <td class="tg-0pky" colspan="2">
            @if( $data->sub_db_point_actions_agreed == 1 )
                DB/ASM
            @elseif( $data->sub_db_point_actions_agreed == 2 )
                TSO
            @elseif( $data->sub_db_point_actions_agreed == 3 )
                SPO
            @endif
        </td>
        <td class="tg-0pky">{{ $data->sub_db_point_timeline }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Overview</strong></td>
        <td class="tg-0pky" colspan="2">{{ $data->overview_actions_agreed }}</td>
        <td class="tg-0pky" colspan="2">
            @if( $data->overview_responsibility == 1 )
                DB/ASM
            @elseif( $data->overview_responsibility == 2 )
                TSO
            @elseif( $data->overview_responsibility == 3 )
                SPO
            @endif
        </td>
        <td class="tg-0pky">{{ $data->overview_timeline }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Processes</strong></td>
        <td class="tg-0pky" colspan="2">{{ $data->processes_actions_agreed }}</td>
        <td class="tg-0pky" colspan="2">
            @if( $data->processes_responsibility == 1 )
                DB/ASM
            @elseif( $data->processes_responsibility == 2 )
                TSO
            @elseif( $data->processes_responsibility == 3 )
                SPO
            @endif
        </td>
        <td class="tg-0pky">{{ $data->processes_timeline }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Mkt Work</strong></td>
        <td class="tg-0pky" colspan="2">{{ $data->mkt_work_actions_agreed }}</td>
        <td class="tg-0pky" colspan="2">
            @if( $data->mkt_work_responsibility == 1 )
                DB/ASM
            @elseif( $data->mkt_work_responsibility == 2 )
                TSO
            @elseif( $data->mkt_work_responsibility == 3 )
                SPO
            @endif
        </td>
        <td class="tg-0pky">
            @if( $data->mkt_work_timeline == 1 )
                Regularly
            @elseif( $data->mkt_work_timeline == 2 )
                Irregularly
            @endif
        </td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>People</strong></td>
        <td class="tg-0pky" colspan="2">{{ $data->people_actions_agreed }}</td>
        <td class="tg-0pky" colspan="2">
            @if( $data->people_responsibility == 1 )
                DB/ASM
            @elseif( $data->people_responsibility == 2 )
                TSO
            @elseif( $data->people_responsibility == 3 )
                SPO
            @endif
        </td>
        <td class="tg-0pky">{{ $data->people_timeline }}</td>
    </tr>
    <tr>
        <td class="tg-0pky nowrap"><strong>Other</strong></td>
        <td class="tg-0pky" colspan="2">{{ $data->other_actions_agreed }}</td>
        <td class="tg-0pky" colspan="2">
            @if( $data->other_responsibility == 1 )
                DB/ASM
            @elseif( $data->other_responsibility == 2 )
                TSO
            @elseif( $data->other_responsibility == 3 )
                SPO
            @endif
        </td>
        <td class="tg-0pky">{{ $data->other_timeline }}</td>
    </tr>
    </tbody>
</table>

</body>

</html>
