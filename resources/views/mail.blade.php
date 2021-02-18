<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
</head>
    <body>
    <div style="width: 100%;max-width: 600px;font-family: Helvetica; font-size: 16px; font-weight: 500;">
        <div style="margin: 50px">
            <div style="width: 100%; display: flex; justify-content: center;">
                <img style=" margin: auto; width: 100px; height: auto; object-fit: contain;" src="{{asset('assets/img/giw-stacked-logo.png')}}">
            </div>
            <p>Hi {{$data->fullName??'Full Name'}},</p>
            <p>Thank you using our free online <a style="font-size: 16px; font-family: Helvetica; color: #096128;" href="https://giw.com.au/calculator/">BCA 2019 Façade Calculator</a>.
                It is hoped that this exercise will offer you some guidance on the allowable window-to-wall ratio for your project at <span style="font-size: 16px; font-family: Helvetica; color: #096128;">{{$data->project??'Project Name'}}</span>.</p>
            <h4 style="font-size: 30px; font-weight: 900; color: #096128;">Summary of Inputs</h4>
            <div><strong style="font-size: 16px; font-weight: 900; color: #096128; line-height: 17px;">Climate Zone: </strong><span>{{$data->climateZone??'climateZone'}}</span></div>
            <div><strong style="font-size: 16px; font-weight: 900; color: #096128; line-height: 17px;">Building Classification: </strong><span style="text-transform: capitalize!important;">{{$data->buildingClassification??'buildingClassification'}}</span></div>

            <div style="margin-top: 50px;">
                <table style="width: 100%; table-layout: fixed; border-collapse: collapse;">
                    <thead>
                    <tr style="border-bottom: solid 2px #096128;">
                        <th style="text-align: left; font-size: 12px">Window Properties</th>
                        <th style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center; font-size: 12px">Total System U-value</th>
                        <th style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center; font-size: 12px">Total System SHGC</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data->windowProperties as $item)
                        <tr style="border-bottom: solid 1px black;">
                            <td style="text-align: left; font-size: 12px">{{$item->property??'property'}}</td>
                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$item->totalSystemUValue??0}}</td>
                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$item->totalSystemSHGC??0}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div style="margin-top: 50px;">
                <table  style="width: 100%; table-layout: fixed; border-collapse: collapse;">
                    <thead>
                    <tr style="border-bottom: solid 2px #096128;">
                        <th style="text-align: left; font-weight: bold;color: #096128; font-size: 12px">Shading</th>
                        <th style="font-weight: bold;color: #096128; text-align: center; font-size: 12px">Projection</th>
                        <th style="font-weight: bold;color: #096128; text-align: center; font-size: 12px">Window Height</th>
                        <th style="font-weight: bold;color: #096128; text-align: center; font-size: 12px">Shading Height</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="border-bottom: solid 1px black;">
                        <td style="text-align: left; font-size: 12px">North</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->north->northProjection??0}}</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->north->northW??0}}</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->north->northH??0}}</td>
                    </tr>
                    <tr style="border-bottom: solid 1px black;">
                        <td style="text-align: left; font-size: 12px">East</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->east->eastProjection??0}}</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->east->eastW??0}}</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->east->eastH??0}}</td>
                    </tr>
                    <tr style="border-bottom: solid 1px black;">
                        <td style="text-align: left; font-size: 12px">South</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->south->southProjection??0}}</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->south->southW??0}}</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->south->southH??0}}</td>
                    </tr>
                    <tr style="border-bottom: solid 1px black;">
                        <td style="text-align: left; font-size: 12px">West</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->west->westProjection??0}}</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->west->westW??0}}</td>
                        <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$data->projection->west->westH??0}}</td>
                    </tr>
                    </tbody>
                </table>
                <div style="color: #808080; padding-top: 10px; font-size: 12px">* Window still to underside of shading</div>
            </div>
        </div>

        <div style="padding: 50px; color: white; background-color: #096128!important; margin-top: 50px!important; display: block">
            <h4  style="font-size: 30px; font-weight: 900; color: white; margin: 0; background-color: #096128!important;">Results</h4>
            <p style="background-color: #096128!important; color: white">
                The following percentages are a representation of the indicative allowable window-to-wall ratio.
            </p>
            <table style=" margin-top: 50px!important; color: white; table-layout: fixed; width: 100%; border-collapse: collapse; background-color: #096128">
                <thead>
                    <tr style="border-bottom: solid 2px white; font-size: 12px">
                        <th></th>
                        @foreach($data->result as $item)
                            <th style="padding-top: 10px; padding-bottom: 10px; font-size: 12px;">{{$item->property??0}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: solid 1px white">
                        <td style="text-align: left; font-size: 12px">North</td>
                        @foreach($data->result as $item)
                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$item->output->north??0}}%</td>
                        @endforeach
                    </tr>
                    <tr style="border-bottom: solid 1px white">
                        <td style="text-align: left; font-size: 12px">East</td>
                        @foreach($data->result as $item)
                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$item->output->east??0}}%</td>
                        @endforeach
                    </tr>
                    <tr style="border-bottom: solid 1px white">
                        <td style="text-align: left; font-size: 12px">South</td>
                        @foreach($data->result as $item)
                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$item->output->south??0}}%</td>
                        @endforeach
                    </tr>
                    <tr style="border-bottom: solid 1px white">
                        <td style="text-align: left; font-size: 12px">West</td>
                        @foreach($data->result as $item)
                            <td style="padding-top: 10px; padding-bottom: 10px; font-size: 12px; text-align: center">{{$item->output->west??0}}%</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <p style="font-weight: bold; margin-top: 50px; font-size: 12px; background-color: #096128!important; color: white">Disclaimer</p>
            <p style="font-size: 12px; font-weight: 400; background-color: #096128!important;  color: white">
                The results above have been generated using the Deemed-to-Satisfy (DTS) pathway as described under NCC 2019 Part J1.5 and associated Specifications.
                Assumptions and generalisations have been made to simplify the calculations and the above results are provided for early stage design guidance only.
                The results should not be used for town planning or building permit purposes.
                Furthermore, alternative solution pathways allow for further design optimisations and offsets to produce differing results.
            </p>
        </div>

        <div style="margin: 50px">
            <p>
                Please <a style="font-size: 16px; font-family: Helvetica; color: #096128" href="https://giw.com.au/contact/">contact our office</a> should you wish to discuss your project further and we will be happy to provide a free consultation in optimising your design for the best overall outcome.
            </p>
            <p>
                We can also provide the following services to assist in achieving the sustainability goals for your project:
            </p>

            <ul>
                <li>AFRC Calculations</li>
                <li>Façade Design</li>
                <li>Passive Shading Analysis</li>
                <li>Section J Alternative Solution Assessments</li>
                <li>Thermal Comfort Modelling</li>
                <li>Town Planning Sustainability Reporting/Green Travel Plans</li>
                <li>Green Star / WELL Rating tool Assessments</li>
                <li>Water Sensitive Urban Design</li>
                <li>NatHERS Energy Ratings</li>
                <li>Circular Economy & Life Cycle Assessments</li>
            </ul>
            <div style="height: 25px; margin-top: 50px">
                <img src="{{asset('assets/img/giw-horizontal-logo.png')}}" style="height: 100%; width: auto; object-fit: contain">
            </div>
            <div style="font-size: 12px; color: #808080; margin-top: 10px">
                <div style="font-size: inherit">GIW Environmental Solutions Pty Ltd</div>
                <div style="font-size: inherit">285 Lennox Street I Richmond VIC 3121 | Australia</div>
                <div style="font-size: inherit">03 9044 5111 | <a style="color: #096128; font-size: 12px" href="mailto:info@giw.com.au">info@giw.com.au</a> | <a style="color: #096128; font-size: inherit" href="https://giw.com.au">giw.com.au</a></div>
            </div>
            <div style="padding-top: 10px; padding-bottom: 10px; color: #096128; font-size: 12px">GIW is a proud member of the GBCA</div>
            <div style="display: flex; margin-top: 10px">
                <img src="{{asset('assets/img/green-star-logo.png')}}" style="height: 30px; width: auto; object-fit: contain; margin-right: 20px">
                <img src="{{asset('assets/img/gbca-logo.png')}}" style="height: 30px; width: auto; object-fit: contain">
            </div>
        </div>
    </div>

    </body>
</html>
