<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

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
        text-align: center;
    }

    .tg .tg-c3ow {
        border-color: inherit;
        vertical-align: top
    }
    .tg .tg-0pky {
        border-color: black;
        vertical-align: top
    }
    .tg .tg-0lax {
        border-color: black;
        vertical-align: top
    }
    .rm-top-left-border {
        border-top: none !important;
        border-left: none !important;
    }
    .tg-align-center {
        text-align: center;
    }
</style>
<table class="tg">
    <thead>
    <tr>
        <th class="tg-0pky rm-top-left-border" colspan="3" style="width: 80%"></th>
        <th class="tg-0pky" style="width: 5%"><strong>Date:</strong></th>
        <th class="tg-0pky" style="width: 15%">{{ $newDate = date("d F, Y", strtotime($data->report_date))  }}</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th class="tg-c3ow nowrap" style="width: 40%"><strong>Distributor Name</strong></th>
        <th class="tg-0pky nowrap" style="width: 20%"><strong>Region</strong></th>
        <th class="tg-0pky" style="width: 20%"><strong>Area</strong></th>
        <th class="tg-0pky" colspan="2" style="width: 20%"><strong>Territory</strong></th>
    </tr>
    <tr class="tg-align-center">
        <td class="tg-0pky nowrap">{{ $hierarchy['db']->name }}</td>
        <td class="tg-0pky nowrap">{{ $region = str_replace('_', ' ', $hierarchy['rsm']->area) }}</td>
        <td class="tg-0pky nowrap">{{ $area = str_replace('_', ' ', $hierarchy['rsm']->area) }}</td>
        <td class="tg-0pky nowrap" colspan="2">{{ $hierarchy['tso']->area }}</td>
    </tr>
    </tbody>
</table>


<style type="text/css">


    .tg .tg-amwm {
        font-weight: bold;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top
    }
</style>
<table class="tg" style="margin-top: 20px">
    <thead>
    <tr>
        <th class="tg-amwm nowrap" style="width: 5%">SL</th>
        <th class="tg-amwm nowrap" style="width: 35%">Godown Condition</th>
        <th class="tg-amwm nowrap" style="width: 5%">Compliance (Y/N)</th>
        <th class="tg-amwm nowrap" style="width: 30%">Comments</th>
        <th class="tg-amwm nowrap" style="width: 25%">Corrective Action &amp; Date</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="tg-amwm">1</td>
        <td class="tg-0lax">Stock Kept in cool areas away from direct sunlight</td>
        <td class="tg-0lax text-center">
            @if( $data->cool_area_compliance == 2 )
                No
            @elseif( $data->cool_area_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->cool_area_comments }}</td>
        <td class="tg-0lax">{{ $data->cool_area_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">2</td>
        <td class="tg-0lax">Stock in dry place away from moisture</td>
        <td class="tg-0lax text-center">
            @if( $data->dry_place_compliance == 2 )
                No
            @elseif( $data->dry_place_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->dry_place_comments }}</td>
        <td class="tg-0lax">{{ $data->dry_place_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">3</td>
        <td class="tg-0lax">Premises free from dirt &amp; cobwebs</td>
        <td class="tg-0lax text-center">
            @if( $data->free_from_dirt_cobwebs_compliance == 2 )
                No
            @elseif( $data->free_from_dirt_cobwebs_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->free_from_dirt_cobwebs_comments }}</td>
        <td class="tg-0lax">{{ $data->free_from_dirt_cobwebs_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">4</td>
        <td class="tg-0lax">Stock away from strong smelling items</td>
        <td class="tg-0lax text-center">
            @if( $data->away_from_smell_compliance == 2 )
                No
            @elseif( $data->away_from_smell_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->away_from_smell_comments }}</td>
        <td class="tg-0lax">{{ $data->away_from_smell_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">5</td>
        <td class="tg-0lax">FIFO maintained even within single SKU</td>
        <td class="tg-0lax text-center">
            @if( $data->fifo_maintained_compliance == 2 )
                No
            @elseif( $data->fifo_maintained_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->fifo_maintained_comments }}</td>
        <td class="tg-0lax">{{ $data->fifo_maintained_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">6</td>
        <td class="tg-0lax">Pets control program organized in last 6 months</td>
        <td class="tg-0lax text-center">
            @if( $data->pets_control_in6months_compliance == 2 )
                No
            @elseif( $data->pets_control_in6months_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->pets_control_in6months_comments }}</td>
        <td class="tg-0lax">{{ $data->pets_control_in6months_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">7</td>
        <td class="tg-0lax">Stock recommended height</td>
        <td class="tg-0lax text-center">
            @if( $data->recommended_height_compliance == 2 )
                No
            @elseif( $data->recommended_height_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->recommended_height_comments }}</td>
        <td class="tg-0lax">{{ $data->recommended_height_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">8</td>
        <td class="tg-0lax">Storage area proper illuminated</td>
        <td class="tg-0lax text-center">
            @if( $data->proper_illiminated_compliance == 2 )
                No
            @elseif( $data->proper_illiminated_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->proper_illiminated_comments }}</td>
        <td class="tg-0lax">{{ $data->proper_illiminated_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">9</td>
        <td class="tg-0lax">Segregated storage area from expired &amp; damage product</td>
        <td class="tg-0lax text-center">
            @if( $data->sagregated_from_expired_dmg_compliance == 2 )
                No
            @elseif( $data->sagregated_from_expired_dmg_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->sagregated_from_expired_dmg_comments }}</td>
        <td class="tg-0lax">{{ $data->sagregated_from_expired_dmg_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">10</td>
        <td class="tg-0lax">Sign put up declaring "DAMAGED STOCK. NOT FOR SALE" next to stales area</td>
        <td class="tg-0lax text-center">
            @if( $data->sign_put_up_compliance == 2 )
                No
            @elseif( $data->sign_put_up_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->sign_put_up_comments }}</td>
        <td class="tg-0lax">{{ $data->sign_put_up_corrective_action }}</td>
    </tr>
    <tr>
        <td class="tg-amwm">11</td>
        <td class="tg-0lax">No exception on loading receipt quality</td>
        <td class="tg-0lax text-center">
            @if( $data->loading_receipt_quality_compliance == 2 )
                No
            @elseif( $data->loading_receipt_quality_compliance == 1 )
                Yes
            @endif
        </td>
        <td class="tg-0lax">{{ $data->loading_receipt_quality_comments }}</td>
        <td class="tg-0lax">{{ $data->loading_receipt_quality_corrective_action }}</td>
    </tr>
    </tbody>
</table>


</body>

</html>
