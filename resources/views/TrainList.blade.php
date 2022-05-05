<h1>vediamo se ho collegato bene la pagina</h1>
@foreach ($treni as $treno)
    <h2>{{ $treno->stazione_di_arrivo }}</h2>
@endforeach