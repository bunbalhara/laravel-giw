<html>
    <head>
        <title>Window-to-Wall Ratio Calculator Results</title>
    </head>
    <body>
        <h2>Hi {{$data->fullName}},</h2>
        <p>Thank you for taking the time to use our free online BCA 2019 Façade Calculator.
            It is hoped that this exercise will offer you some guidance on the allowable window-to-wall ratio for your project at: {{$data->project}}.</p>
        <h4>Summary of Inputs</h4>

        <p><strong>Climate Zone: </strong><span>{{$data->climateZone}}</span></p>

        <p><strong>Building Classification: </strong><span style="text-transform: capitalize!important;">{{$data->buildingClassification}}</span></p>

        <table style="border: solid 1px #000000; border-collapse: collapse; text-align: center">
            <thead>
                <tr>
                    <th style="border: solid 1px #808080; text-align: center!important">Window Properties</th>
                    <th style="border: solid 1px #808080; text-align: center!important">Total System U-value</th>
                    <th style="border: solid 1px #808080; text-align: center!important">Total System SHGC</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data->windowProperties as $item)
                    <tr>
                        <td style="border: solid 1px #808080; text-align: center!important">{{$item->property}}</td>
                        <td style="border: solid 1px #808080; text-align: center!important">{{$item->totalSystemUValue}}</td>
                        <td style="border: solid 1px #808080; text-align: center!important">{{$item->totalSystemSHGC}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table style="border: solid 1px #000000; border-collapse: collapse;">
            <thead>
            <tr>
                <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px">Shading</th>
                <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px">Projection</th>
                <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px">W (Window Height)</th>
                <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px">H (Shading Height)</th>
            </tr>
            </thead>
            <tbody>
            <tbody>
            <tr>
                <td style="border: solid 1px #808080; text-align: center!important">North</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->north->northProjection}}</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->north->northW}}</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->north->northH}}</td>
            </tr>
            <tr>
                <td style="border: solid 1px #808080; text-align: center!important">East</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->east->eastProjection}}</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->east->eastW}}</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->east->eastH}}</td>
            </tr>
            <tr>
                <td style="border: solid 1px #808080; text-align: center!important">South</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->south->southProjection}}</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->south->southW}}</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->south->southH}}</td>
            </tr>
            <tr>
                <td style="border: solid 1px #808080; text-align: center!important">West</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->west->westProjection}}</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->west->westW}}</td>
                <td style="border: solid 1px #808080; text-align: center!important">{{$data->projection->west->westH}}</td>
            </tr>
            </tbody>
        </table>

        <h4>Results:</h4>
        <table style="border: solid 1px #000000; border-collapse: collapse">
            <thead>
                <tr>
                    <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">-</th>
                    @foreach($data->result as $item)
                        <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">{{$item->property}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">North</td>
                    @foreach($data->result as $item)
                        <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">{{$item->output->north}}</th>
                    @endforeach
                </tr>
                <tr>
                    <td style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">East</td>
                    @foreach($data->result as $item)
                        <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">{{$item->output->east}}</th>
                    @endforeach
                </tr>
                <tr>
                    <td style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">South</td>
                    @foreach($data->result as $item)
                        <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">{{$item->output->south}}</th>
                    @endforeach
                </tr>
                <tr>
                    <td style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">West</td>
                    @foreach($data->result as $item)
                        <th style="border: solid 1px #808080; text-align: center!important; padding: 0 15px;">{{$item->output->west}}</th>
                    @endforeach
                </tr>
            </tbody>
        </table>

        <p>
            The results above have been generated using the Deemed-to-Satisfy (DTS) pathway as described under NCC 2019 Part J1.5 and associated Specifications.
            Assumptions and generalisations have been made to simplify the calculations and the above results are provided for early stage design guidance only.
            The results should not be used for town planning or building permit purposes.
            Furthermore, alternative solution pathways allow for further design optimisations and offsets to produce differing results.
        </p>
        <p>
            Please contact Gary should you wish to discuss your project further and we will be happy to provide a free consultation in optimising your design for the best overall outcome.
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
        </ul>
    </body>
</html>
