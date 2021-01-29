
<div>Hi, {{$name}}</div>
<h4>Thank you to visit GIW platform</h4>
<p>Here is your calculation!</p>
<table style="width: 100%; table-layout: auto; text-align: center; border-collapse: collapse">
    <caption style="font-size: 18px">Table 1</caption>
    <thead>
    <tr>
        <th style="border: solid 1px black; vertical-align: bottom; font-size: 20px" rowspan="2">Window Properties</th>
        <th style="border: solid 1px black; font-size: 20px" colspan="4">Ultimate Limit for Window to Wall Ratio</th>
    </tr>
    <tr>
        <th style="border: solid 1px black">North</th>
        <th style="border: solid 1px black">South</th>
        <th style="border: solid 1px black">East</th>
        <th style="border: solid 1px black">West</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result as $item)
        <tr>
            <td style="border: solid 1px black">
                {{$item->property}}
            </td>
            <td style="border: solid 1px black">{{$item->output->north}}%</td>
            <td style="border: solid 1px black">{{$item->output->south}}%</td>
            <td style="border: solid 1px black">{{$item->output->east}}%</td>
            <td style="border: solid 1px black">{{$item->output->west}}%</td>
        </tr>
    @endforeach
    </tbody>
</table>

