


    @extends('template.base')

    @section('pageTitle')
        Lista Treni
    @endsection


    @section('pageMain')

     <h1>Questi sono i treni</h1>
    <ol>   
        @foreach ($treni as $treno)
            <li>
                {{ $treno->stazione_di_partenza }} ---> {{ $treno->stazione_di_arrivo }}, il giorno {{ $treno->data_di_partenza }}, orario di partenza {{ $treno->orario_di_partenza }}, orario di arrivo {{ $treno->orario_di_arrivo }}
            </li>
        @endforeach
    </ol>

    <div class="treni">{{ $treni->links() }}</div>
    @endsection

   



