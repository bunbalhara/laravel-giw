<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
</head>
<body>
<style>
    .inner-body{
        background-color: white;
    }

    table thead tr{
        border: solid 2px #096128;
    }

    @media only screen and (max-width: 600px) {
        .inner-body {
            width: 100% !important;
        }
    }
</style>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                    <td class="body" width="100%" cellpadding="0" cellspacing="0">
                        <table class="inner-body" align="center" width="600" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td class="content-cell" style="width: 100%; font-family: Helvetica; font-size: 16px; font-weight: 500; padding: 20px 50px; text-align: center">
                                        <img style=" margin: auto; width: 100px; height: auto; object-fit: contain;" src="{{asset('assets/img/giw-stacked-logo.png')}}">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px 50px">
                                    <p>Hi {{$data->fullName??'Full Name'}},</p>
                                    <p>Thank you using our free online <a style="font-size: 16px; font-family: Helvetica; color: #096128;" href="https://giw.com.au/calculator/">BCA 2019 Façade Calculator</a>.
                                        This exercise offers guidance on the allowable window-to-wall ratio for your project at <span style="font-size: 16px; font-family: Helvetica; color: #096128;">{{$data->project??'Project Name'}}</span>.</p>
                                    <h4 style="font-size: 30px; font-weight: 900; color: #096128;">Summary of Inputs</h4>
                                    <table>
                                        <tr>
                                            <td>
                                                <strong style="font-size: 16px; font-weight: 900; color: #096128; line-height: 20px; width: 500px">Climate Zone: </strong>
                                            </td>
                                            <td>
                                                <span>{{$data->climateZone??'climateZone'}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong style="font-size: 16px; font-weight: 900; color: #096128; line-height: 20px; width: 500px">Building Classification: </strong>
                                            </td>
                                            <td>
                                                <span style="text-transform: capitalize!important;">{{$data->buildingClassification??'buildingClassification'}}</span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 50px;">
                                    <table style="width: 100%; table-layout: fixed; border-collapse: collapse;">
                                        <thead>
                                        <tr>
                                            <th style="text-align: left; font-size: 12px; border-bottom: solid 2px #096128;">Window Properties</th>
                                            <th style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center; font-size: 12px;  border-bottom: solid 2px #096128;">Total System U-value</th>
                                            <th style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center; font-size: 12px;  border-bottom: solid 2px #096128;">Total System SHGC</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data->windowProperties as $item)
                                            <tr>
                                                <td style="text-align: left; font-size: 12px; border-bottom: solid 1px black;">{{$item->property??'property'}}</td>
                                                <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px black;">{{$item->totalSystemUValue??0}}</td>
                                                <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px black;">{{$item->totalSystemSHGC??0}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 50px">
                                    <table style="width: 100%; table-layout: fixed; border-collapse: collapse;">
                                        <thead>
                                        <tr>
                                            <th style="text-align: left; font-weight: bold;color: #096128; font-size: 12px;border-bottom: solid 2px #096128;">Shading</th>
                                            <th style="font-weight: bold;color: #096128; text-align: center; font-size: 12px;border-bottom: solid 2px #096128;">Projection</th>
                                            <th style="font-weight: bold;color: #096128; text-align: center; font-size: 12px;border-bottom: solid 2px #096128;">Window Height</th>
                                            <th style="font-weight: bold;color: #096128; text-align: center; font-size: 12px;border-bottom: solid 2px #096128;">Shading Height*</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="text-align: left; font-size: 12px;border-bottom: solid 1px #808080;">North</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->north->northProjection??0}}</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->north->northW??0}}</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->north->northH??0}}</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 12px;border-bottom: solid 1px #808080;">East</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->east->eastProjection??0}}</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->east->eastW??0}}</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->east->eastH??0}}</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 12px;border-bottom: solid 1px #808080;">South</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->south->southProjection??0}}</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->south->southW??0}}</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->south->southH??0}}</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left; font-size: 12px;border-bottom: solid 1px #808080;">West</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->west->westProjection??0}}</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->west->westW??0}}</td>
                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px #808080;">{{$data->projection->west->westH??0}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div style="color: #808080; padding-top: 10px; font-size: 12px">* Window sill to underside of shading</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table style=" margin-top: 50px!important; color: white; table-layout: fixed; width: 100%; border-collapse: collapse; background-color: #096128">
                                        <tr>
                                            <td style="padding: 50px 50px 20px 50px;">
                                                <h4  style="font-size: 30px; font-weight: 900; color: white; margin: 0; background-color: #096128!important;">Results</h4>
                                                <p style="background-color: #096128!important; color: white">
                                                    The following percentages are a representation of the indicative allowable window-to-wall ratio.
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 50px">
                                                <table style="width: 100%; border-collapse: collapse; table-layout: fixed; color: white">
                                                    <thead>
                                                    <tr style="font-size: 12px">
                                                        <th style="border-bottom: solid 2px white"></th>
                                                        @foreach($data->result as $item)
                                                            <th style="padding-top: 10px; padding-bottom: 10px; font-size: 12px;border-bottom: solid 2px white; ">{{$item->property??0}}</th>
                                                        @endforeach
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td style="text-align: left; font-size: 12px;border-bottom: solid 1px white">North</td>
                                                        @foreach($data->result as $item)
                                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px white">{{$item->output->north??0}}%</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; font-size: 12px;border-bottom: solid 1px white">East</td>
                                                        @foreach($data->result as $item)
                                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px white">{{$item->output->east??0}}%</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; font-size: 12px;border-bottom: solid 1px white">South</td>
                                                        @foreach($data->result as $item)
                                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px white">{{$item->output->south??0}}%</td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; font-size: 12px;border-bottom: solid 1px white">West</td>
                                                        @foreach($data->result as $item)
                                                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center;border-bottom: solid 1px white">{{$item->output->west??0}}%</td>
                                                        @endforeach
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 20px 50px 50px 50px">
                                                <p style="font-weight: bold; font-size: 12px; background-color: #096128!important; color: white">Disclaimer</p>
                                                <p style="font-size: 12px; font-weight: 400; background-color: #096128!important;  color: white">
                                                    The results above have been generated using the Deemed-to-Satisfy (DTS) pathway as described under NCC 2019 Part J1.5 and associated Specifications.
                                                    Assumptions and generalisations have been made to simplify the calculations and the above results are provided for early stage design guidance only.
                                                    The results should not be used for town planning or building permit purposes.
                                                    Furthermore, alternative solution pathways allow for further design optimisations and offsets to produce differing results.
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 50px">
                                    <p>
                                        Please <a style="font-size: 16px; font-family: Helvetica; color: #096128" href="https://giw.com.au/contact/">contact our office</a> should you wish to discuss your project further and we will be happy to provide a free consultation in optimising your design.
                                    </p>
                                    <p>
                                        We can also provide the following services to assist in achieving the sustainability goals for your project:
                                    </p>

                                    <ul>
                                        <li>AFRC Calculations & Accredited Reporting</li>
                                        <li>Façade Design</li>
                                        <li>Passive Shading Analysis</li>
                                        <li>Section J Alternative Solution Assessments</li>
                                        <li>Thermal Comfort Modelling</li>
                                        <li>Town Planning Sustainability Reporting / Green Travel Plans</li>
                                        <li>Green Star / WELL Rating tool Assessments</li>
                                        <li>Water Sensitive Urban Design</li>
                                        <li>NatHERS Energy Ratings</li>
                                        <li>Circular Economy & Life Cycle Assessments</li>
                                    </ul>
                                    <div style="height: 50px; margin-top: 50px">
                                        <img src="{{asset('assets/img/giw-horizontal-logo.png')}}" style="height: 100%; width: auto; object-fit: contain">
                                    </div>
                                    <div style="font-size: 12px; color: #808080; margin-top: 10px">
                                        <div style="font-size: inherit">GIW Environmental Solutions Pty Ltd</div>
                                        <div style="font-size: inherit">285 Lennox Street I Richmond VIC 3121 | Australia</div>
                                        <div style="font-size: inherit">03 9044 5111 | <a style="color: #096128; font-size: 12px" href="mailto:info@giw.com.au">info@giw.com.au</a> | <a style="color: #096128; font-size: inherit" href="https://giw.com.au">giw.com.au</a></div>
                                    </div>
                                    <div style="padding-top: 10px; padding-bottom: 10px; color: #096128; font-size: 12px">GIW is a proud member of the GBCA</div>
                                    <div style="display: flex; margin-top: 10px; height: 30px">
                                        <img src="{{asset('assets/img/green-star-logo.png')}}" style="height: 30px; width: auto; object-fit: contain; margin-right: 20px">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
