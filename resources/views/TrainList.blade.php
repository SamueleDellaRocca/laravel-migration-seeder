<h1>vediamo se ho collegato bene la pagina</h1>
@foreach ($treni as $treno)
<div>
    <p>
        {{ $treno->stazione_di_partenza }} ---> {{ $treno->stazione_di_arrivo }}, il giorno {{ $treno->data_di_partenza }}
    </p>
</div>
@endforeach