<x-layout>

    <header>
        <div class="container-fluid header">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-6">
                    <h2 class="text-white text-color text-center">chi siamo</h2>
                    <p class="text-white text-color">le differenze tra i vari tipi di natura (ad esempio natura vivente
                        e non vivente, natura
                        selvaggia e natura trasformata dall’uomo)?
                        oppure la differenza tra natura e cultura (cioè ciò che nasce spontaneamente vs. ciò che è
                        creato dall’essere umano)?
                        o ancora le differenze tra ambienti naturali (mare, montagna, foresta, deserto…</p>
                </div>
                <div class="col-6">
                    <img src="/media/sfondo cinema.jpg" alt="foto del fondo" class="shadow rounded">
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container userHeight">
            <div class="row h-100 justify-content-around align-items-center">
                @foreach ($users as $user)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$user['name'] . " " . $user['surname']}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
                            <a href="{{route('aboutUsDetail', ['name' => $user['name']])}}" class="card-link">leggi di
                                più</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>