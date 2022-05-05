<h1>Questi sono i treni che partono oggi, ovvero il 2022-07-05</h1>
@foreach ($treni as $treno)
<div>
    <p>
        {{ $treno->stazione_di_partenza }} ---> {{ $treno->stazione_di_arrivo }}, il giorno {{ $treno->data_di_partenza }}
    </p>
</div>
@endforeach