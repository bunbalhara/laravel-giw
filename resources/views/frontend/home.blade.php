@extends('layouts.front')
@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://unpkg.com/izitoast/dist/css/iziToast.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/front/home.css?'.time())}}"  rel="stylesheet" >
@endsection
@section('content')
    <div class="area-1 nectar-video-wrap position-loaded" data-bg-alignment="" style="opacity: 1; width: 1004px; height: 100%;">
        <div class="nectar-video-inner"><video class="nectar-video-bg" width="1800" height="700" preload="auto" loop="" autoplay="" muted="" playsinline="" style="visibility: visible; width: 1636px; height: 920px; opacity: 1;">
                <source src="https://giw.com.au/wp-content/uploads/2020/05/giw_home-hero-video-1080.webm?x81410" type="video/webm">
                <source src="https://giw.com.au/wp-content/uploads/2020/05/giw_home-hero-video-1080.mp4" type="video/mp4">
            </video></div>
    </div>
    <div class="row_col_wrap_12 col span_12 light center" style="min-height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="area-1 user-info-container">
            <div class="title">GIW WINDOW TO WALL RATIO CALCULATOR</div>
            <div class="description">
                To assist architects and designers in early facade studies GIW have developed this free to use calculator which will offer indicative
                window to wall ratios as assessed under NCC 2019 Part J1.<br/>
                For more detailed assessment prior to development application please contact our office
                <a href="https://giw.com.au/contact/">here</a>
            </div>
            <div class="form-group">
                <div class="label">Full Name</div>
                <input name="name" placeholder="Enter your full name" class="form-control full-name">
            </div>
            <div class="form-group">
                <div class="label">Email</div>
                <input name="email" placeholder="Enter your email" class="form-control email-address">
            </div>
            <button class="submit-name-email" disabled>Continue</button>
        </div>
        <div class="area-2 calculation-form" style="display: none">
            <div class="form-group">
                <div class="label">Climate Zone</div>
                <select class="climate-zone select-box">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6" selected >6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="form-group">
                <div class="label">Building Classification</div>
                <select class="building-classification select-box">
                    <option value="class5">Class 5</option>
                    <option value="class6">Class 6</option>
                    <option value="class7">Class 7</option>
                    <option value="class8">Class 8</option>
                    <option value="class9aWard">Class 9a Ward</option>
                    <option value="class9aOther">Class 9a Other</option>
                    <option value="class9b">Class 9b</option>
                    <option value="class9c">Class 9c</option>
                </select>
            </div>
            <div class="form-group">
                <div class="label">Project Address</div>
                <input class="input-box project-address" placeholder="Project Address"/>
            </div>
            <fieldset>
                <legend>Window Configuration</legend>
                <table class="window-properties-table">
                    <thead>
                    <tr>
                        <th><input type="checkbox" class="select-all"/></th>
                        <th>Window Properties</th>
                        <th>Total System U-value</th>
                        <th>Total System SHGC</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input class="select-item" type="checkbox"/></td>
                        <td>Single Glazed, Clear</td>
                        <td>6.3</td>
                        <td>0.65</td>
                    </tr>
                    <tr>
                        <td><input class="select-item" type="checkbox"/></td>
                        <td>Single Glazed, Low-E Clear</td>
                        <td>4.6</td>
                        <td>0.55</td>
                    </tr>
                    <tr>
                        <td><input class="select-item" type="checkbox"/></td>
                        <td>Double Glazed, Clear</td>
                        <td>3.7</td>
                        <td>0.6</td>
                    </tr>
                    <tr>
                        <td><input class="select-item" type="checkbox"/></td>
                        <td>Double Glazed, Low-E Clear</td>
                        <td>3.2</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td><input class="select-item" type="checkbox"/></td>
                        <td>Double Glazed, Tinted</td>
                        <td>3.7</td>
                        <td>0.4</td>
                    </tr>
                    <tr>
                        <td><input class="select-item" type="checkbox"/></td>
                        <td>Double Glazed, Low-E Tinted</td>
                        <td>3.2</td>
                        <td>0.3</td>
                    </tr>
                    <tr>
                        <td><input class="select-item" type="checkbox"/></td>
                        <td>Thermally Broken, Double Glazed, Low-E Clear</td>
                        <td>2.5</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td><input class="select-item" type="checkbox"/></td>
                        <td>Thermally Broken, Double Glazed, Low-E tinted</td>
                        <td>2.5</td>
                        <td>0.28</td>
                    </tr>
                    </tbody>
                </table>
            </fieldset>

            <table class="input-table" style="table-layout: fixed">
                <thead>
                <tr>
                    <th style="width: 120px">Shading</th>
                    <th>Projection</th>
                    <th>W (Window Height)</th>
                    <th>H (Shading Height)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>North</td>
                    <td><input class="input-box north_projection" value="1" type="number"/></td>
                    <td><input class="input-box north_w" value="1.5" type="number"/></td>
                    <td><input class="input-box north_h" value="3.2" type="number"/></td>
                </tr>
                <tr>
                    <td>East</td>
                    <td><input class="input-box east_projection" value="1" type="number"/></td>
                    <td><input class="input-box east_w" value="1.5" type="number"/></td>
                    <td><input class="input-box east_h" value="3.2" type="number"/></td>
                </tr>
                <tr>
                    <td>South</td>
                    <td><input class="input-box south_projection" value="1" type="number"/></td>
                    <td><input class="input-box south_w" value="1.5" type="number"/></td>
                    <td><input class="input-box south_h" value="3.2" type="number"/></td>
                </tr>
                <tr>
                    <td>West</td>
                    <td><input class="input-box west_projection" value="1" type="number"/></td>
                    <td><input class="input-box west_w" value="1.5" type="number"/></td>
                    <td><input class="input-box west_h" value="3.2" type="number"/></td>
                </tr>
                </tbody>
            </table>

            <div class="form-group">
                <button class="submit-button" disabled> Submit </button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/izitoast/dist/js/iziToast.min.js" type="text/javascript"></script>
    <script>
        iziToast.settings({
            timeout: 3000, // default timeout
            resetOnHover: true,
            // icon: '', // icon class
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            position: 'topRight',
        });
        var toastr = {
            success:(message)=>{
                iziToast.success({message: message})
            },
            error:(message)=>{
                iziToast.error({message: message})
            }
        }
        $(document).ready(function () {

            $(document).on('change keyup','.email-address,.full-name', function (){
                let email = $('.email-address').val();
                let fullName = $('.full-name').val();
                let enabled = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email) && fullName
                $('.submit-name-email').prop('disabled', !enabled);
            })

            let email = '';
            let fullName = '';

            $('.submit-name-email').click(function (){
                $(this).prop('disabled', true);
                email = $('.email-address').val();
                fullName = $('.full-name').val();

                let formData = new FormData();
                formData.append('email', email);
                formData.append('name', fullName);
                $(this).prop('disabled', true);
                $(this).html('<i class="fa fa-spinner fa-spin"/>')
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'post',
                    url:'{{route('user.add')}}',
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success:res=>{
                        if(res.status){
                            const {email, name} = res.data;
                            console.log(email, name);
                            $('.area-1').css('display','none');
                            $('.area-2').css('display','block');
                        } else {
                            console.log(res.errors)
                        }
                        $(this).html('Submit')
                    },
                    error:err=> {
                        $(this).html('Submit')
                        console.log(err)
                    }
                })
            })

            let climateZone = 0, buildingClassification = 'class5';
            let northProjection = 0, northW = 0, northH = 0, northG = 0;
            let eastProjection = 0, eastW = 0, eastH = 0, eastG = 0;
            let southProjection = 0, southW = 0, southH = 0, southG = 0;
            let westProjection = 0, westW = 0, westH = 0, westG = 0;

            let sAn = 0, sAe = 0, sAs = 0, sAw = 0;
            let sN = 0, sE = 0, sS = 0, sW = 0;
            let uAve = 0, uWal = 0;

            let isTableJ1_5BorC = "B"

            let windowProperties = [];

            let tableJ1_5a = [
                { climateZone:1, class2: 2, class3: 1.1, class5: 2, class6:2, class7:2, class8: 2, class9aWard: 1.1, class9aOther:2, class9b: 2, class9c:1.1 },
                { climateZone:2, class2: 2, class3:   2, class5: 2, class6:2, class7:2, class8: 2, class9aWard:   2, class9aOther:2, class9b: 2, class9c:  2 },
                { climateZone:3, class2: 2, class3: 1.1, class5: 2, class6:2, class7:2, class8: 2, class9aWard: 1.1, class9aOther:2, class9b: 2, class9c:1.1 },
                { climateZone:4, class2: 2, class3: 1.1, class5: 2, class6:2, class7:2, class8: 2, class9aWard: 1.1, class9aOther:2, class9b: 2, class9c:1.1 },
                { climateZone:5, class2: 2, class3:   2, class5: 2, class6:2, class7:2, class8: 2, class9aWard:   2, class9aOther:2, class9b: 2, class9c:  2 },
                { climateZone:6, class2: 2, class3: 1.1, class5: 2, class6:2, class7:2, class8: 2, class9aWard: 1.1, class9aOther:2, class9b: 2, class9c:1.1 },
                { climateZone:7, class2: 2, class3: 1.1, class5: 2, class6:2, class7:2, class8: 2, class9aWard: 1.1, class9aOther:2, class9b: 2, class9c:1.1 },
                { climateZone:8, class2: 2, class3: 0.9, class5: 2, class6:2, class7:2, class8: 2, class9aWard: 0.9, class9aOther:2, class9b: 2, class9c:0.9 },
            ]

            let tableJ1_5b = [
                {climateZone:1, east:0.12, north:0.12, south:0.12, west:0.12},
                {climateZone:2, east:0.13, north:0.13, south:0.13, west:0.13},
                {climateZone:3, east:0.16, north:0.16, south:0.16, west:0.16},
                {climateZone:4, east:0.13, north:0.13, south:0.13, west:0.13},
                {climateZone:5, east:0.13, north:0.13, south:0.13, west:0.13},
                {climateZone:6, east:0.13, north:0.13, south:0.13, west:0.13},
                {climateZone:7, east:0.13, north:0.13, south:0.13, west:0.13},
                {climateZone:8, east: 0.2, north: 0.2, south:0.42, west:0.36},
            ]

            let tableJ1_5c = [
                {climateZone:1, east:0.07, north:0.07, south: 0.1, west:0.07},
                {climateZone:2, east: 0.1, north: 0.1, south: 0.1, west: 0.1},
                {climateZone:3, east:0.07, north:0.07, south:0.07, west:0.07},
                {climateZone:4, east:0.07, north:0.07, south:0.07, west:0.07},
                {climateZone:5, east: 0.1, north: 0.1, south: 0.1, west: 0.1},
                {climateZone:6, east:0.07, north:0.07, south:0.07, west:0.07},
                {climateZone:7, east:0.07, north:0.07, south:0.08, west:0.07},
                {climateZone:8, east:0.08, north:0.08, south:0.08, west:0.08},
            ]

            let tableSpecJ1_56a = [
                {orientation:'north', value:[1.47, 1.95, 1.95, 2.05, 2.28, 2.12,  2.4, 1.88]},
                {orientation:'south', value:[   1,    1,    1,    1,    1,    1,    1,    1]},
                {orientation:'east', value:[1.39, 1.58, 1.63, 1.72, 1.72, 1.62, 1.84, 1.92]},
                {orientation:'west', value:[1.41, 1.68, 1.65, 1.69, 1.75, 1.67, 1.92, 1.25]},
            ]

            let tableSpecJ1_56b = [
                {orientation:'north', value:[1.42, 1.77, 1.55, 1.72, 1.88, 1.52,  1.6, 1.24]},
                {orientation:'south', value:[   1,    1,    1,    1,    1,    1,    1,    1]},
                {orientation:'east', value:[ 1.3, 1.49, 1.48, 1.37, 1.48, 1.28, 1.35, 1.26]},
                {orientation:'west', value:[1.37, 1.54,  1.5, 1.36, 1.52, 1.33,  1.4, 1.05]},
            ]

            let tableSpecJ1_57a = [
                {gh:0, ph:0, value: 1},
                {gh:0, ph:0.1, value: 0.9},
                {gh:0, ph:0.2, value: 0.8},
                {gh:0, ph:0.3, value: 0.72},
                {gh:0, ph:0.4, value: 0.64},
                {gh:0, ph:0.5, value: 0.57},
                {gh:0, ph:0.6, value: 0.51},
                {gh:0, ph:0.7, value: 0.46},
                {gh:0, ph:0.8, value: 0.41},
                {gh:0, ph:0.9, value: 0.38},
                {gh:0, ph:1, value: 0.35},
                {gh:0, ph:0, value: 1},

                {gh:0.1, ph:0, value: 1},
                {gh:0.1, ph:0.1, value: 0.95},
                {gh:0.1, ph:0.2, value: 0.89},
                {gh:0.1, ph:0.3, value: 0.81},
                {gh:0.1, ph:0.4, value: 0.74},
                {gh:0.1, ph:0.5, value: 0.66},
                {gh:0.1, ph:0.6, value: 0.59},
                {gh:0.1, ph:0.7, value: 0.52},
                {gh:0.1, ph:0.8, value: 0.47},
                {gh:0.1, ph:0.9, value: 0.42},
                {gh:0.1, ph:1, value: 0.4},

                {gh:0.2, ph:0, value: 1},
                {gh:0.2, ph:0.1, value: 0.98},
                {gh:0.2, ph:0.2, value: 0.94},
                {gh:0.2, ph:0.3, value: 0.89},
                {gh:0.2, ph:0.4, value: 0.82},
                {gh:0.2, ph:0.5, value: 0.75},
                {gh:0.2, ph:0.6, value: 0.68},
                {gh:0.2, ph:0.7, value: 0.62},
                {gh:0.2, ph:0.8, value: 0.56},
                {gh:0.2, ph:0.9, value: 0.51},
                {gh:0.2, ph:1, value: 0.47},

                {gh:0.3, ph:0, value: 1},
                {gh:0.3, ph:0.1, value: 1},
                {gh:0.3, ph:0.2, value: 0.97},
                {gh:0.3, ph:0.3, value: 0.94},
                {gh:0.3, ph:0.4, value: 0.89},
                {gh:0.3, ph:0.5, value: 0.84},
                {gh:0.3, ph:0.6, value: 0.78},
                {gh:0.3, ph:0.7, value: 0.72},
                {gh:0.3, ph:0.8, value: 0.66},
                {gh:0.3, ph:0.9, value: 0.61},
                {gh:0.3, ph:1, value: 0.57},

                {gh:0.4, ph:0, value: 1},
                {gh:0.4, ph:0.1, value: 1},
                {gh:0.4, ph:0.2, value: 0.99},
                {gh:0.4, ph:0.3, value: 0.97},
                {gh:0.4, ph:0.4, value: 0.94},
                {gh:0.4, ph:0.5, value: 0.9},
                {gh:0.4, ph:0.6, value: 0.86},
                {gh:0.4, ph:0.7, value: 0.82},
                {gh:0.4, ph:0.8, value: 0.77},
                {gh:0.4, ph:0.9, value: 0.73},
                {gh:0.4, ph:1, value: 0.68},

                {gh:0.5, ph:0, value: 1},
                {gh:0.5, ph:0.1, value: 1},
                {gh:0.5, ph:0.2, value: 1},
                {gh:0.5, ph:0.3, value: 0.99},
                {gh:0.5, ph:0.4, value: 0.97},
                {gh:0.5, ph:0.5, value: 0.95},
                {gh:0.5, ph:0.6, value: 0.92},
                {gh:0.5, ph:0.7, value: 0.9},
                {gh:0.5, ph:0.8, value: 0.86},
                {gh:0.5, ph:0.9, value: 0.83},
                {gh:0.5, ph:1, value: 0.79},
            ]

            let tableSpecJ1_57b = [
                {gh:0, ph:0, value: 1},
                {gh:0, ph:0.1, value: 0.93},
                {gh:0, ph:0.2, value: 0.87},
                {gh:0, ph:0.3, value: 0.82},
                {gh:0, ph:0.4, value: 0.77},
                {gh:0, ph:0.5, value: 0.73},
                {gh:0, ph:0.6, value: 0.69},
                {gh:0, ph:0.7, value: 0.65},
                {gh:0, ph:0.8, value: 0.62},
                {gh:0, ph:0.9, value: 0.6},
                {gh:0, ph:1, value: 0.58},

                {gh:0.1, ph:0, value: 1},
                {gh:0.1, ph:0.1, value: 0.97},
                {gh:0.1, ph:0.2, value: 0.93},
                {gh:0.1, ph:0.3, value: 0.88},
                {gh:0.1, ph:0.4, value: 0.84},
                {gh:0.1, ph:0.5, value: 0.79},
                {gh:0.1, ph:0.6, value: 0.75},
                {gh:0.1, ph:0.7, value: 0.71},
                {gh:0.1, ph:0.8, value: 0.67},
                {gh:0.1, ph:0.9, value: 0.64},
                {gh:0.1, ph:1, value: 0.62},

                {gh:0.2, ph:0, value: 1},
                {gh:0.2, ph:0.1, value: 0.98},
                {gh:0.2, ph:0.2, value: 0.96},
                {gh:0.2, ph:0.3, value: 0.93},
                {gh:0.2, ph:0.4, value: 0.89},
                {gh:0.2, ph:0.5, value: 0.85},
                {gh:0.2, ph:0.6, value: 0.81},
                {gh:0.2, ph:0.7, value: 0.77},
                {gh:0.2, ph:0.8, value: 0.73},
                {gh:0.2, ph:0.9, value: 0.7},
                {gh:0.2, ph:1, value: 0.68},

                {gh:0.3, ph:0, value: 1},
                {gh:0.3, ph:0.1, value: 0.99},
                {gh:0.3, ph:0.2, value: 0.98},
                {gh:0.3, ph:0.3, value: 0.96},
                {gh:0.3, ph:0.4, value: 0.93},
                {gh:0.3, ph:0.5, value: 0.9},
                {gh:0.3, ph:0.6, value: 0.87},
                {gh:0.3, ph:0.7, value: 0.83},
                {gh:0.3, ph:0.8, value: 0.8},
                {gh:0.3, ph:0.9, value: 0.77},
                {gh:0.3, ph:1, value: 0.74},

                {gh:0.4, ph:0, value: 1},
                {gh:0.4, ph:0.1, value: 1},
                {gh:0.4, ph:0.2, value: 0.99},
                {gh:0.4, ph:0.3, value: 0.98},
                {gh:0.4, ph:0.4, value: 0.96},
                {gh:0.4, ph:0.5, value: 0.94},
                {gh:0.4, ph:0.6, value: 0.91},
                {gh:0.4, ph:0.7, value: 0.89},
                {gh:0.4, ph:0.8, value: 0.86},
                {gh:0.4, ph:0.9, value: 0.84},
                {gh:0.4, ph:1, value: 0.81},

                {gh:0.5, ph:0, value: 1},
                {gh:0.5, ph:0.1, value: 1},
                {gh:0.5, ph:0.2, value: 0.99},
                {gh:0.5, ph:0.3, value: 0.99},
                {gh:0.5, ph:0.4, value: 0.98},
                {gh:0.5, ph:0.5, value: 0.96},
                {gh:0.5, ph:0.6, value: 0.95},
                {gh:0.5, ph:0.7, value: 0.93},
                {gh:0.5, ph:0.8, value: 0.91},
                {gh:0.5, ph:0.9, value: 0.9},
                {gh:0.5, ph:1, value: 0.88},
            ]

            $('.window-properties-table').find('.select-all').click(function () {
                $('.window-properties-table').find('.select-item').prop('checked', $(this).prop('checked'))
                checkSelectedWindowProperties()
            })

            $('.window-properties-table').find('.select-item').change(checkSelectedWindowProperties)

            function checkSelectedWindowProperties(){
                windowProperties = [];
                $('.window-properties-table').find('tbody').find('tr').each((index, item)=>{
                    if($(item).find('.select-item').prop('checked')){
                        windowProperties.push({
                            property: $($(item).find('td')[1]).text(),
                            totalSystemUValue: $($(item).find('td')[2]).text(),
                            totalSystemSHGC: $($(item).find('td')[3]).text()
                        })
                    }
                })
            }

            $(document).on('change keyup click', '.climate-zone, .building-classification, .window-properties .select-item, table input, .project-address', function () {
                let enabled = false;
                if(windowProperties.length > 0 && $('.project-address').val()){
                    enabled = true;
                }
                $('.submit-button').prop('disabled', !enabled);
            })

            $('.submit-button').click(function () {


                let button = $(this);
                button.prop('disabled', true)
                button.html('<i class="fa fa-spinner fa-spin"/>')

                let project = $('.project-address').val();

                isTableJ1_5BorC = ['class3', 'class9c','class9aWard'].includes($('.building-classification').val())?'C':'B';

                let sALookupTable = isTableJ1_5BorC === 'B'?tableJ1_5b : tableJ1_5c;

                sAn = sALookupTable.find(item=>item.climateZone == $('.climate-zone').val()).north;
                sAs = sALookupTable.find(item=>item.climateZone == $('.climate-zone').val()).south;
                sAe = sALookupTable.find(item=>item.climateZone == $('.climate-zone').val()).east;
                sAw = sALookupTable.find(item=>item.climateZone == $('.climate-zone').val()).west;

                // Shading Projection
                northProjection = $('.north_projection').val();
                northW = $('.north_w').val();
                northH = $('.north_h').val();
                northG = northH - northW;
                eastProjection = $('.east_projection').val()
                eastW = $('.east_w').val();
                eastH = $('.east_h').val();
                eastG = eastH - eastW;
                southProjection = $('.south_projection').val();
                southW = $('.south_w').val();
                southH = $('.south_h').val();
                southG = southH - southW;
                westProjection = $('.west_projection').val();
                westW = $('.west_w').val();
                westH = $('.west_h').val();
                westG = westH - westW;

                // G/H

                let northG_H = (northG/northH);
                let southG_H = (southG/southH);
                let eastG_H = (eastG/eastH);
                let westG_H = (westG/westH);

                // P/H

                let northP_H = (northProjection/northH);
                let southP_H = (southProjection/southH);
                let eastP_H = (eastProjection/eastH);
                let westP_H = (westProjection/westH);

                // Shading Coefficients

                let Sn = getShadingCoefficient(northG_H, northP_H, tableSpecJ1_57a);
                let Ss = getShadingCoefficient(southG_H, southP_H, tableSpecJ1_57b);
                let Se = getShadingCoefficient(eastG_H, eastP_H, tableSpecJ1_57a);
                let Sw = getShadingCoefficient(westG_H, westP_H, tableSpecJ1_57a);


                // UAve, UWall

                climateZone = $('.climate-zone').val();
                buildingClassification = $('.building-classification').val();
                uAve = tableJ1_5a.find(item=>item.climateZone == climateZone)[buildingClassification];

                uWal = 1;

                let result = [];

                for (let item of windowProperties){
                    let uValLimit = (uAve - uWal)/(item.totalSystemUValue - uWal);
                    let northSHGCLimit = sAn / (Sn * item.totalSystemSHGC);
                    let southSHGCLimit = sAs / (Ss * item.totalSystemSHGC);
                    let eastSHGCLimit = sAe / (Se * item.totalSystemSHGC);
                    let westSHGCLimit = sAw / (Sw * item.totalSystemSHGC);

                    let nUL_WWR = uValLimit > northSHGCLimit ? northSHGCLimit : uValLimit;
                    let sUL_WWR = uValLimit > southSHGCLimit ? southSHGCLimit : uValLimit;
                    let eUL_WWR = uValLimit > eastSHGCLimit ? eastSHGCLimit : uValLimit;
                    let wUL_WWR = uValLimit > westSHGCLimit ? westSHGCLimit : uValLimit;

                    result.push({
                        property: item.property,
                        output:{
                            north: (nUL_WWR*100).toFixed(1),
                            south:(sUL_WWR*100).toFixed(1),
                            east: (eUL_WWR*100).toFixed(1),
                            west: (wUL_WWR*100).toFixed(1)
                        }
                    })
                }

                let userInputs = ``;

                let resultTable = `<table><thead><tr><th></th>`;

                for (let item of result){
                    resultTable += `<th>${item.property}</th>`;
                }

                // North
                resultTable += '</tr></thead><tbody><tr><td>North</td>';

                for (let item of result){
                    resultTable += `<td>${item.output.north}</td>`;
                }

                resultTable += '</tr>';

                // East
                resultTable += '<tr><td>East</td>';

                for (let item of result){
                    resultTable += `<td>${item.output.east}</td>`;
                }

                resultTable += '</tr>';

                // South
                resultTable += '<tr><td>South</td>';

                for (let item of result){
                    resultTable += `<td>${item.output.south}</td>`;
                }

                resultTable += '</tr>';

                // East
                resultTable += '<tr><td>West</td>';

                for (let item of result){
                    resultTable += `<td>${item.output.west}</td>`;
                }

                resultTable += '</tr></tbody></table>';



                let html = `<strong>Hi, ${fullName}</strong>
                            <p>Thank you for taking the time to use our free online BCA 2019 Facade Calculator. It is hoped that this exercise will offer you some guidance on the allowable window-to-wall ratio for your project at ${project}</p>
                            <p>Summary of Inputs:</p>
                            ${userInputs}
                            <p>Results:</p>
                            ${resultTable}
                            <p>The results above have been generated using the Deemed-to-Satisfy (DTS) pathway as described under NCC 2019 Part J1.5 and associated Specifications. Assumptions and geralisations have been make to simplify the calculations and the above results are provided for early stage design guidance only. The results should not be used for town planning or building permit purposes. Furthermore, alternative solution pathways allow for further design optimisations and offsets to produce differing results</p>
                            <p>Please contact Gary should you wish to discuss your project further and we will be happy to provide a gree consultation in optimising your design for the best overall outcome</p>
                            <p>We can also provide the following services to assist in achieving the sustainability goals for your project:</p>
                            <ul>
                                <li>AFRC Calculations</li>
                                <li>Facade Design</li>
                                <li>Passive Shading Analysis</li>
                                <li>Section J Alternative Solution Assessments</li>
                                <li>Thermal Comfort Modelling</li>
                                <li>Town Planning Sustainability Reporting/Green Travel Plans</li>
                                <li>Green Star / WELL Rating tool Assessments</li>
                                <li>Water Sensitive Urban Design</li>
                                <li>NatHERS Energy Ratings</li>
                            </ul>`;


                let formData = new FormData();
                formData.append('email', email);
                formData.append('result', html);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'post',
                    url:'{{route('mail.send')}}',
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success:res=>{
                        if(res.status){
                            console.log(res.data)
                            toastr.success(res.message)
                            button.prop('disabled', false)
                        } else {
                            console.log(res.errors)
                        }
                        button.html('Submit')
                        button.prop('disabled', false)
                    },
                    error:err=> {
                        button.prop('disabled', false)
                        button.html('Submit')
                        console.log(err)
                    }
                })
            })


            function getShadingCoefficient(gh, ph, table){
                let matchOrSmallestPH = Math.floor(ph * 10)/10;
                let matchOrSmallestGH = Math.floor(gh * 10)/10;

                let lookUpGHArray = table.reduce((result, item)=>{
                    if(item.ph == matchOrSmallestPH){
                        result.push(item);
                    }
                    return  result;
                },[]);

                let result = lookUpGHArray.find(item=>item.gh == matchOrSmallestGH);

                return result.value;
            }
        })
    </script>
@endsection
