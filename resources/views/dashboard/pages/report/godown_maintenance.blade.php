@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')


@section('content')
    <h2 class="mt-4 mb-4">Distributor Godown Maintenance Monitor</h2>
    <style>
        .tg-amwm {
            font-weight: bold;
        }
    </style>

    <form class="mb-5" method="POST" action="{{ route('godown.store', ['id' => $id]) }}">
        @csrf

        <table class="tg table table-striped table-bordered" style="margin-top: 20px">
            <thead>
            <tr>
                <th class="tg-amwm nowrap" style="width: 5%">SL</th>
                <th class="tg-amwm nowrap" style="width: 35%">Godown Condition</th>
                <th class="tg-amwm nowrap" style="width: 15%">Compliance (Y/N)</th>
                <th class="tg-amwm nowrap" style="width: 25%">Comments</th>
                <th class="tg-amwm nowrap" style="width: 20%">Corrective Action &amp; Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="tg-amwm">1</td>
                <td class="tg-0lax">Stock Kept in cool areas away from direct sunlight</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('cool_area_compliance') is-invalid @enderror"
                            id="cool_area_compliance"
                            name="cool_area_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('cool_area_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('cool_area_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="cool_area_comments"
                           name="cool_area_comments"
                           autocomplete="off" value="{{ old('cool_area_comments') }}">
                </td>
                <td class="tg-0lax">

                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="cool_area_corrective_action"
                           name="cool_area_corrective_action"
                           autocomplete="off" value="{{ old('cool_area_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">2</td>
                <td class="tg-0lax">Stock in dry place away from moisture</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('dry_place_compliance') is-invalid @enderror"
                            id="dry_place_compliance"
                            name="dry_place_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('dry_place_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('dry_place_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="dry_place_comments"
                           name="dry_place_comments"
                           autocomplete="off" value="{{ old('dry_place_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="dry_place_corrective_action"
                           name="dry_place_corrective_action"
                           autocomplete="off" value="{{ old('dry_place_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">3</td>
                <td class="tg-0lax">Premises free from dirt &amp; cobwebs</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('free_from_dirt_cobwebs_compliance') is-invalid @enderror"
                            id="free_from_dirt_cobwebs_compliance"
                            name="free_from_dirt_cobwebs_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('free_from_dirt_cobwebs_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('free_from_dirt_cobwebs_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="free_from_dirt_cobwebs_comments"
                           name="free_from_dirt_cobwebs_comments"
                           autocomplete="off" value="{{ old('free_from_dirt_cobwebs_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="free_from_dirt_cobwebs_corrective_action"
                           name="free_from_dirt_cobwebs_corrective_action"
                           autocomplete="off" value="{{ old('free_from_dirt_cobwebs_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">4</td>
                <td class="tg-0lax">Stock away from strong smelling items</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('away_from_smell_compliance') is-invalid @enderror"
                            id="away_from_smell_compliance"
                            name="away_from_smell_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('away_from_smell_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('away_from_smell_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="away_from_smell_comments"
                           name="away_from_smell_comments"
                           autocomplete="off" value="{{ old('away_from_smell_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="away_from_smell_corrective_action"
                           name="away_from_smell_corrective_action"
                           autocomplete="off" value="{{ old('away_from_smell_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">5</td>
                <td class="tg-0lax">FIFO maintained even within single SKU</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('fifo_maintained_compliance') is-invalid @enderror"
                            id="fifo_maintained_compliance"
                            name="fifo_maintained_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('fifo_maintained_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('fifo_maintained_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="fifo_maintained_comments"
                           name="fifo_maintained_comments"
                           autocomplete="off" value="{{ old('fifo_maintained_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="fifo_maintained_corrective_action"
                           name="fifo_maintained_corrective_action"
                           autocomplete="off" value="{{ old('fifo_maintained_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">6</td>
                <td class="tg-0lax">Pets control program organized in last 6 months</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('pets_control_in6months_compliance') is-invalid @enderror"
                            id="pets_control_in6months_compliance"
                            name="pets_control_in6months_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('pets_control_in6months_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('pets_control_in6months_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="pets_control_in6months_comments"
                           name="pets_control_in6months_comments"
                           autocomplete="off" value="{{ old('pets_control_in6months_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="pets_control_in6months_corrective_action"
                           name="pets_control_in6months_corrective_action"
                           autocomplete="off" value="{{ old('pets_control_in6months_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">7</td>
                <td class="tg-0lax">Stock recommended height</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('recommended_height_compliance') is-invalid @enderror"
                            id="recommended_height_compliance"
                            name="recommended_height_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('recommended_height_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('recommended_height_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="recommended_height_comments"
                           name="recommended_height_comments"
                           autocomplete="off" value="{{ old('recommended_height_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="recommended_height_corrective_action"
                           name="recommended_height_corrective_action"
                           autocomplete="off" value="{{ old('recommended_height_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">8</td>
                <td class="tg-0lax">Storage area proper illuminated</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('proper_illiminated_compliance') is-invalid @enderror"
                            id="proper_illiminated_compliance"
                            name="proper_illiminated_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('proper_illiminated_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('proper_illiminated_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="proper_illiminated_comments"
                           name="proper_illiminated_comments"
                           autocomplete="off" value="{{ old('proper_illiminated_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="proper_illiminated_corrective_action"
                           name="proper_illiminated_corrective_action"
                           autocomplete="off" value="{{ old('proper_illiminated_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">9</td>
                <td class="tg-0lax">Segregated storage area from expired &amp; damage product</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('sagregated_from_expired_dmg_compliance') is-invalid @enderror"
                            id="sagregated_from_expired_dmg_compliance"
                            name="sagregated_from_expired_dmg_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('sagregated_from_expired_dmg_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('sagregated_from_expired_dmg_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="sagregated_from_expired_dmg_comments"
                           name="sagregated_from_expired_dmg_comments"
                           autocomplete="off" value="{{ old('sagregated_from_expired_dmg_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="sagregated_from_expired_dmg_corrective_action"
                           name="sagregated_from_expired_dmg_corrective_action"
                           autocomplete="off" value="{{ old('sagregated_from_expired_dmg_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">10</td>
                <td class="tg-0lax">Sign put up declaring "DAMAGED STOCK. NOT FOR SALE" next to stales area</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('sign_put_up_compliance') is-invalid @enderror"
                            id="sign_put_up_compliance"
                            name="sign_put_up_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('sign_put_up_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('sign_put_up_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="sign_put_up_comments"
                           name="sign_put_up_comments"
                           autocomplete="off" value="{{ old('sign_put_up_comments') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="sign_put_up_corrective_action"
                           name="sign_put_up_corrective_action"
                           autocomplete="off" value="{{ old('sign_put_up_corrective_action') }}">
                </td>
            </tr>
            <tr>
                <td class="tg-amwm">11</td>
                <td class="tg-0lax">No exception on loading receipt quality</td>
                <td class="tg-0lax">
                    <select class="custom-select custom-select-md  @error('loading_receipt_quality_compliance') is-invalid @enderror"
                            id="loading_receipt_quality_compliance"
                            name="loading_receipt_quality_compliance">
                        <option value="">Select</option>
                        <option value="1" {{ old('loading_receipt_quality_compliance')=='1' ? 'selected' : ''  }}>Yes</option>
                        <option value="2" {{ old('loading_receipt_quality_compliance')=='2' ? 'selected' : ''  }}>No</option>
                    </select>
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Comments"
                           id="sign_put_up_corrective_action"
                           name="sign_put_up_corrective_action"
                           autocomplete="off" value="{{ old('sign_put_up_corrective_action') }}">
                </td>
                <td class="tg-0lax">
                    <input type="text" class="form-control "
                           placeholder="Corrective Action"
                           id="loading_receipt_quality_corrective_action"
                           name="loading_receipt_quality_corrective_action"
                           autocomplete="off" value="{{ old('loading_receipt_quality_corrective_action') }}">
                </td>
            </tr>
            </tbody>
        </table>

        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg mt-4 mb-4" >Finish <i class="fas fa-check-circle"></i></button>
        </div>


        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif


    </form>


@endsection
