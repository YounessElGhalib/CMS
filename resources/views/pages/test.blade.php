<h2>test page</h2>
<table style="width:50%">
@foreach($array as $arry)
<tr>
    <td>{{$arry['titre']}}</td>
    <td>{{$arry['categorie']}}</td>
    <td>{{$arry['languages']['fr']}}{{$arry['languages']['en']}}{{$arry['languages']['sa']}}</td>
</tr>
@endforeach
</table>